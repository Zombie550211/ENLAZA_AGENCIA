/* BASE — animación de aparición al hacer scroll */
(function () {
  const elementos = document.querySelectorAll(".revelar");
  if (!("IntersectionObserver" in window)) {
    elementos.forEach((el) => el.classList.add("visible"));
    return;
  }
  const obs = new IntersectionObserver(
    (entradas) =>
      entradas.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          obs.unobserve(e.target);
        }
      }),
    { threshold: 0.12 }
  );
  elementos.forEach((el) => obs.observe(el));
})();

/* BASE — tarjetas .vidrio: el foco de luz y el borde siguen al mouse */
(function () {
  if (!matchMedia("(hover: hover)").matches) return;
  document.addEventListener("pointermove", (e) => {
    const t = e.target.closest && e.target.closest(".vidrio");
    if (!t) return;
    const r = t.getBoundingClientRect();
    t.style.setProperty("--x", e.clientX - r.left + "px");
    t.style.setProperty("--y", e.clientY - r.top + "px");
  });
})();
