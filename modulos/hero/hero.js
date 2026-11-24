/* MÓDULO: HERO — ilustración que sigue al mouse y código que se escribe solo */
(function () {
  const hero = document.getElementById("hero");
  if (!hero) return;
  const quieto = matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* 1) La ilustración se inclina siguiendo el mouse */
  if (!quieto && matchMedia("(hover: hover)").matches) {
    let cuadro = null;
    hero.addEventListener("pointermove", (e) => {
      if (cuadro) return;
      cuadro = requestAnimationFrame(() => {
        cuadro = null;
        const r = hero.getBoundingClientRect();
        hero.style.setProperty("--mx", ((e.clientX - r.left) / r.width - 0.5).toFixed(3));
        hero.style.setProperty("--my", ((e.clientY - r.top) / r.height - 0.5).toFixed(3));
      });
    });
    hero.addEventListener("pointerleave", () => {
      hero.style.setProperty("--mx", 0);
      hero.style.setProperty("--my", 0);
    });
  }

  /* 2) La ventana de código se escribe sola y va cambiando la regla */
  const codigo = document.getElementById("hero-codigo");
  if (!codigo || quieto) return;

  const reglas = ["tu esquema", "por equipo", "por producto", "por metas"];
  // Cada parte: [clase de color, texto]
  const partes = (regla) => [
    ["c-k", "const"], ["", " "], ["c-v", "comision"], ["", " = "], ["c-f", "calcular"], ["", "({\n  ventas: "],
    ["c-v", "equipo"], ["", ".ventas,\n  regla: "], ["c-s", '"' + regla + '"'], ["", ",\n});"],
  ];
  const escapar = (t) => t.replace(/&/g, "&amp;").replace(/</g, "&lt;");

  function pintar(lista, n) {
    let html = "", resto = n;
    for (const [clase, texto] of lista) {
      if (resto <= 0) break;
      const trozo = escapar(texto.slice(0, resto));
      html += clase ? `<span class="${clase}">${trozo}</span>` : trozo;
      resto -= texto.length;
    }
    codigo.innerHTML = html + '<span class="hero__cursor"></span>';
  }

  const esperar = (ms) => new Promise((r) => setTimeout(r, ms));
  async function ciclo() {
    let i = 0;
    await esperar(1800); // deja terminar la animación de entrada
    for (;;) {
      const lista = partes(reglas[i % reglas.length]);
      const total = lista.reduce((s, [, t]) => s + t.length, 0);
      for (let n = 0; n <= total; n++) { pintar(lista, n); await esperar(n === 0 ? 300 : 38 + Math.random() * 40); }
      await esperar(2600);
      // borra solo la regla y escribe la siguiente
      const fijo = total - (reglas[i % reglas.length].length + 6); // hasta antes de la regla
      for (let n = total; n >= fijo; n--) { pintar(lista, n); await esperar(22); }
      i++;
      const siguiente = partes(reglas[i % reglas.length]);
      const total2 = siguiente.reduce((s, [, t]) => s + t.length, 0);
      for (let n = fijo; n <= total2; n++) { pintar(siguiente, n); await esperar(45 + Math.random() * 40); }
      await esperar(2600);
      i++;
      // de vez en cuando vuelve a escribir todo desde cero
      for (let n = total2; n >= 0; n -= 3) { pintar(siguiente, n); await esperar(12); }
    }
  }
  ciclo();
})();
