/* MÓDULO: CONTACTO — valida y envía el formulario de demo a enviar.php */
(function () {
  const form = document.querySelector("#form-demo");
  if (!form) return;
  const msg = form.querySelector(".form__msg");
  const boton = form.querySelector('button[type="submit"]');
  const textoBoton = boton.querySelector("span");
  const textoOriginal = textoBoton.textContent;

  function validar() {
    const nombre = form.nombre;
    const contacto = form.contacto;
    let valido = true;

    [nombre, contacto].forEach((campo) => {
      const vacio = !campo.value.trim();
      campo.classList.toggle("error", vacio);
      if (vacio) valido = false;
    });

    const v = contacto.value.trim();
    const esCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
    const esTelefono = /^\+?[\d\s()-]{8,20}$/.test(v);
    if (v && !esCorreo && !esTelefono) {
      contacto.classList.add("error");
      valido = false;
    }
    return valido;
  }

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    msg.classList.remove("ok");

    if (!validar()) {
      msg.textContent = "Revisa tu nombre y un WhatsApp o correo válido.";
      return;
    }

    boton.disabled = true;
    textoBoton.textContent = "Enviando…";
    try {
      const res = await fetch(form.action, { method: "POST", body: new FormData(form) });
      const data = await res.json();
      msg.textContent = data.mensaje;
      if (data.ok) {
        msg.classList.add("ok");
        form.reset();
      }
    } catch {
      msg.textContent = "No pudimos enviar tu solicitud. Intenta de nuevo en un momento.";
    } finally {
      boton.disabled = false;
      textoBoton.textContent = textoOriginal;
    }
  });
})();
