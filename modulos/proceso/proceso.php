<?php
/* Pasos del proceso de trabajo */
$pasos = [
    ['Diagnóstico', 'Conocemos tu operación: cómo vendes, cómo mides y qué te está costando tiempo hoy.'],
    ['Diseño', 'Definimos contigo pantallas, reglas y reportes antes de escribir una línea de código.'],
    ['Desarrollo', 'Construimos el sistema por etapas para que veas avances y los ajustes a tiempo.'],
    ['Implementación y soporte', 'Lo ponemos en marcha con tu equipo y te acompañamos después del arranque.'],
];
?>
<!-- ===================== MÓDULO: PROCESO (cómo trabajamos) ===================== -->
<section class="seccion proceso" id="proceso">
  <div class="brillo proceso__brillo"></div>
  <div class="contenedor">
    <div class="cabeza cabeza--centro revelar">
      <span class="etiqueta">Cómo trabajamos</span>
      <h2 class="titulo">De tu idea a <span class="degradado-azul">un sistema funcionando.</span></h2>
      <p class="subtitulo">Un proceso claro, con avances visibles en cada etapa.</p>
    </div>

    <ol class="proceso__pasos">
      <?php foreach ($pasos as $i => [$titulo, $texto]): ?>
        <li class="vidrio proceso__paso revelar" style="transition-delay: <?= $i * 100 ?>ms">
          <span class="proceso__num"><?= sprintf('%02d', $i + 1) ?></span>
          <h3><?= e($titulo) ?></h3>
          <p><?= e($texto) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>

    <div class="proceso__cta revelar">
      <a href="#demo" class="btn btn--primario btn--lg">Agenda tu diagnóstico <?= flecha() ?></a>
    </div>
  </div>
</section>
