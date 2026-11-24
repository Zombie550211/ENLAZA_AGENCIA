<?php
/* Beneficios de un sistema a la medida: [título, texto, ícono SVG] */
$beneficios = [
    ['Se adapta a tu proceso', 'El sistema trabaja como tu operación, no al revés. Nada de forzar a tu equipo a cambiar su forma de vender.',
        '<path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="9"/>'],
    ['Una sola fuente de verdad', 'Clientes, ventas y equipos en una misma base de datos. Se acabaron las versiones distintas del mismo archivo.',
        '<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>'],
    ['Automatiza lo repetitivo', 'Reportes, comisiones y seguimientos se generan solos. Tu equipo dedica su tiempo a vender, no a capturar.',
        '<path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>'],
    ['Decisiones con datos', 'Indicadores claros por día, equipo y agente para actuar a tiempo, no cuando el mes ya se perdió.',
        '<path d="M3 3v18h18"/><path d="m7 15 4-4 3 3 5-6"/>'],
    ['Menos errores', 'Validaciones y cálculos automáticos evitan capturas duplicadas, fórmulas rotas y pagos mal calculados.',
        '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>'],
    ['Crece contigo', 'Empieza con lo esencial y agrega nuevos módulos cuando tu operación lo necesite.',
        '<path d="M3 17 9 11l4 4 8-8"/><path d="M14 7h7v7"/>'],
];

/* Lo que también incluye (antes estaba en la sección "Qué desarrollamos") */
$extras = [
    ['Supervisión y calidad', 'Rankings, metas por equipo y auditoría de llamadas.',
        '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
    ['Integraciones', 'Conectamos tu sistema con Excel, telefonía u otras plataformas.',
        '<path d="M9 7H6a5 5 0 0 0 0 10h3M15 7h3a5 5 0 0 1 0 10h-3M8 12h8"/>'],
    ['Accesos por rol', 'Agentes, supervisores y dirección ven solo lo que les toca.',
        '<rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/>'],
    ['Desde el navegador', 'Nada que instalar: oficina o celular.',
        '<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/>'],
];

/* Comparativo: [aspecto, a la medida (true = sí), genérico (texto)] */
$comparativo = [
    ['Se ajusta a tu forma de trabajar', 'Hecho sobre tu proceso', 'Tú te ajustas al software'],
    ['Funciones', 'Solo las que tu operación usa', 'Muchas que nadie usa'],
    ['Reglas propias (comisiones, metas, estatus)', 'Programadas como las necesitas', 'Limitadas a lo que trae'],
    ['Integración con tus herramientas', 'Se diseña desde el inicio', 'Depende del proveedor'],
    ['Cambios y nuevas funciones', 'Se agregan cuando las necesitas', 'Esperas a que el proveedor las saque'],
];
?>
<!-- ===================== MÓDULO: ANTES / BENEFICIOS ===================== -->
<section class="seccion antes" id="plataforma">
  <div class="brillo antes__brillo"></div>
  <div class="contenedor">
    <div class="cabeza cabeza--centro revelar">
      <span class="etiqueta">Deja atrás las hojas de cálculo</span>
      <h2 class="titulo">¿Sigues administrando tu empresa <span class="degradado-azul">con Excel?</span></h2>
      <p class="subtitulo">Digitaliza tu operación con un sistema diseñado a tu medida y para crecer contigo.</p>
    </div>

    <div class="antes__grid">
      <!-- Antes -->
      <article class="vidrio antes__tarjeta antes__tarjeta--antes revelar">
        <span class="antes__marca antes__marca--mal">Antes</span>
        <h3>Archivos sueltos y datos duplicados</h3>
        <ul class="antes__lista">
          <li>Un Excel por supervisor, ninguno coincide</li>
          <li>Ventas repetidas y comisiones mal calculadas</li>
          <li>Reportes que llegan días tarde</li>
        </ul>
        <div class="hoja" aria-hidden="true">
          <?php mt_srand(7); for ($i = 0; $i < 48; $i++): $r = mt_rand(1, 100); ?>
            <span class="<?= $r > 90 ? 'r' : ($r > 80 ? 'a' : '') ?>"><i style="width:<?= mt_rand(30, 85) ?>%"></i></span>
          <?php endfor; ?>
        </div>
      </article>

      <!-- Con un sistema a la medida -->
      <article class="vidrio antes__tarjeta antes__tarjeta--enlaza revelar">
        <span class="antes__marca antes__marca--bien">Con un sistema a tu medida</span>
        <h3>Toda tu operación en un solo lugar</h3>
        <ul class="antes__lista antes__lista--bien">
          <li>Una sola base de datos para todo el equipo</li>
          <li>Procesos automatizados: reportes, comisiones, seguimientos</li>
          <li>Accesos por rol: cada quien ve lo que necesita</li>
        </ul>
        <!-- Ilustración genérica: tabla ordenada -->
        <div class="orden" aria-hidden="true">
          <div class="orden__cabeza"><span></span><span></span><span></span><span></span></div>
          <?php foreach (['verde', 'ambar', 'verde', 'azul', 'verde'] as $i => $c): ?>
            <div class="orden__fila" style="--d: <?= $i * 90 ?>ms"><span class="orden__c"></span><span class="orden__l" style="width:<?= [70, 55, 80, 62, 48][$i] ?>%"></span><span class="orden__l orden__l--t" style="width:<?= [50, 66, 40, 58, 72][$i] ?>%"></span><span class="orden__p orden__p--<?= $c ?>"></span></div>
          <?php endforeach; ?>
        </div>
      </article>
    </div>

    <!-- ===== Beneficios (cuadrícula de tamaños distintos, cada tarjeta con su ilustración animada) ===== -->
    <div class="beneficios">
      <div class="beneficios__separador revelar">
        <span>Lo que ganas con un sistema a la medida</span>
      </div>

      <?php $b = fn(int $i) => $beneficios[$i]; /* [título, texto, ícono] */ ?>
      <div class="bento">

        <!-- 1. Se adapta a tu proceso (ancha) -->
        <article class="vidrio bento__celda bento__celda--ancha revelar">
          <?php [$t, $x, $ico] = $b(0); ?>
          <div class="bento__texto">
            <span class="bento__icono"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $ico ?></svg></span>
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <div class="flujo" aria-hidden="true">
            <?php foreach (['Prospecto', 'Venta', 'Validación', 'Comisión'] as $n => $etapa): ?>
              <?php if ($n): ?><span class="flujo__linea" style="--n: <?= $n ?>"></span><?php endif; ?>
              <span class="flujo__nodo" style="--n: <?= $n ?>"><i></i><?= $etapa ?></span>
            <?php endforeach; ?>
          </div>
          <div class="flujo__chips" aria-hidden="true"><span>Tus etapas</span><span>Tus reglas</span><span>Tus nombres</span></div>
        </article>

        <!-- 2. Una sola fuente de verdad (alta) -->
        <article class="vidrio bento__celda bento__celda--alta revelar" style="transition-delay:.1s">
          <?php [$t, $x, $ico] = $b(1); ?>
          <div class="bento__texto">
            <span class="bento__icono"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $ico ?></svg></span>
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <div class="fuente" aria-hidden="true">
            <svg class="fuente__lineas" viewBox="0 0 300 300" preserveAspectRatio="none">
              <?php foreach ([[96, 30], [192, 84], [84, 222], [216, 270]] as [$fx, $fy]): ?>
                <line x1="<?= $fx ?>" y1="<?= $fy ?>" x2="150" y2="150" />
              <?php endforeach; ?>
            </svg>
            <span class="fuente__archivo" style="left:32%;top:10%">ventas.xlsx</span>
            <span class="fuente__archivo" style="left:64%;top:28%">ventas_2.xlsx</span>
            <span class="fuente__archivo" style="left:28%;top:74%">clientes.xlsx</span>
            <span class="fuente__archivo" style="left:72%;top:90%">notas.txt</span>
            <span class="fuente__centro"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/></svg></span>
          </div>
        </article>

        <!-- 3. Automatiza lo repetitivo -->
        <article class="vidrio bento__celda revelar" style="transition-delay:.2s">
          <?php [$t, $x, $ico] = $b(2); ?>
          <div class="bento__texto">
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <ul class="auto" aria-hidden="true">
            <?php foreach (['Reporte diario', 'Cálculo de comisiones', 'Recordatorio de seguimiento'] as $n => $tarea): ?>
              <li style="--n: <?= $n ?>"><span class="auto__switch"></span><?= $tarea ?><em>Listo</em></li>
            <?php endforeach; ?>
          </ul>
        </article>

        <!-- 4. Decisiones con datos -->
        <article class="vidrio bento__celda revelar">
          <?php [$t, $x, $ico] = $b(3); ?>
          <div class="bento__texto">
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <div class="datos" aria-hidden="true">
            <svg viewBox="0 0 220 90" preserveAspectRatio="none">
              <defs><linearGradient id="g-datos" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#22d3ee" stop-opacity=".35"/><stop offset="1" stop-color="#22d3ee" stop-opacity="0"/></linearGradient></defs>
              <path d="M0 78 L30 70 L60 74 L90 56 L120 60 L150 38 L180 42 L220 14 V90 H0Z" fill="url(#g-datos)"/>
              <path class="datos__linea" d="M0 78 L30 70 L60 74 L90 56 L120 60 L150 38 L180 42 L220 14" fill="none" stroke="#22d3ee" stroke-width="2.5"/>
            </svg>
            <span class="datos__punto"></span>
            <span class="datos__badge">▲ Al alza</span>
          </div>
        </article>

        <!-- 5. Menos errores -->
        <article class="vidrio bento__celda revelar" style="transition-delay:.1s">
          <?php [$t, $x, $ico] = $b(4); ?>
          <div class="bento__texto">
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <div class="valida" aria-hidden="true">
            <span class="valida__campo"><span class="valida__etq">Folio de venta</span><b>VTA-0001</b></span>
            <span class="valida__estado valida__estado--mal">✕ Duplicado</span>
            <span class="valida__estado valida__estado--bien">✓ Validado</span>
          </div>
        </article>

        <!-- 6. Crece contigo -->
        <article class="vidrio bento__celda revelar" style="transition-delay:.2s">
          <?php [$t, $x, $ico] = $b(5); ?>
          <div class="bento__texto">
            <h3><?= e($t) ?></h3>
            <p><?= e($x) ?></p>
          </div>
          <div class="crece" aria-hidden="true">
            <?php for ($n = 0; $n < 8; $n++): ?><span class="<?= $n < 3 ? 'base' : '' ?>" style="--n: <?= $n ?>"></span><?php endfor; ?>
          </div>
        </article>

        <!-- Fila final: lo que también incluye -->
        <?php foreach ($extras as $n => [$t, $x, $ico]): ?>
          <article class="vidrio bento__celda bento__mini revelar" style="transition-delay: <?= $n * 90 ?>ms">
            <span class="bento__mini-icono"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $ico ?></svg></span>
            <div><h3><?= e($t) ?></h3><p><?= e($x) ?></p></div>
          </article>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- ===== Comparativo ===== -->
    <div class="comparativo revelar">
      <div class="comparativo__cabeza">
        <h3>A la medida vs. software genérico</h3>
        <p>Lo que cambia cuando el sistema se construye para ti.</p>
      </div>
      <div class="vidrio comparativo__tabla" role="table" aria-label="Comparativo entre un sistema a la medida y un software genérico">
        <span class="comparativo__resalte" aria-hidden="true"></span>
        <div class="comparativo__fila comparativo__fila--titulos" role="row">
          <span role="columnheader"></span>
          <span role="columnheader" class="comparativo__col-medida">A la medida</span>
          <span role="columnheader">Software genérico</span>
        </div>
        <?php foreach ($comparativo as [$aspecto, $medida, $generico]): ?>
          <div class="comparativo__fila" role="row">
            <span role="rowheader" class="comparativo__aspecto"><?= e($aspecto) ?></span>
            <span role="cell" class="comparativo__si"><?= e($medida) ?></span>
            <span role="cell" class="comparativo__no"><?= e($generico) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="antes__cta revelar">
      <a href="#demo" class="btn btn--primario btn--lg">Quiero un sistema a mi medida <?= flecha() ?></a>
    </div>
  </div>
</section>
