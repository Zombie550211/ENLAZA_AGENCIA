/* MÓDULO: HEADER — abre/cierra el menú en móvil */
(function () {
  const header = document.querySelector(".header");
  const toggle = document.querySelector(".header__toggle");
  if (!header || !toggle) return;

  toggle.addEventListener("click", () => {
    const abierto = header.classList.toggle("abierto");
    toggle.setAttribute("aria-expanded", abierto);
  });

  header.querySelectorAll(".header__nav a, .header__acciones a").forEach((a) =>
    a.addEventListener("click", () => {
      header.classList.remove("abierto");
      toggle.setAttribute("aria-expanded", "false");
    })
  );
})();
