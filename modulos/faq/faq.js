/* MÓDULO: FAQ — solo una pregunta abierta a la vez */
(function () {
  const items = document.querySelectorAll(".faq__item");
  items.forEach((item) =>
    item.addEventListener("toggle", () => {
      if (!item.open) return;
      items.forEach((otro) => { if (otro !== item) otro.open = false; });
    })
  );
})();
