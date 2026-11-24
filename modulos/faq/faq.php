<!-- ===================== MÓDULO: FAQ ===================== -->
<section class="seccion" id="preguntas">
  <div class="contenedor">
    <div class="cabeza cabeza--centro revelar"><span class="etiqueta">Dudas</span><h2 class="titulo">Preguntas frecuentes</h2></div>
    <div class="faq__lista">
      <?php foreach ($config['faq'] as [$pregunta, $respuesta]): ?>
        <details class="faq__item revelar">
          <summary><?= e($pregunta) ?></summary>
          <p><?= e($respuesta) ?></p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
