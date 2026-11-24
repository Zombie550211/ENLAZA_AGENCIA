<?php
/* Tipos de sistema que desarrollamos, con su ícono */
$modulos_crm = [
    ['CRM y gestión de clientes', '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>'],
    ['Tableros y reportes', '<path d="M3 3v18h18"/><path d="m7 15 4-4 3 3 5-6"/>'],
    ['Rankings y metas', '<path d="M8 21h8M12 17v4M7 4h10v5a5 5 0 0 1-10 0V4z"/><path d="M17 5h3v2a3 3 0 0 1-3 3M7 5H4v2a3 3 0 0 0 3 3"/>'],
    ['Cálculo de comisiones', '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/>'],
    ['Personal y turnos', '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/>'],
    ['Apps web para celular', '<rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/>'],
];
?>
<!-- ===================== MÓDULO: SISTEMA (franja de módulos) ===================== -->
<section class="sistema" aria-label="Lo que desarrollamos">
  <p class="sistema__titulo">Lo que podemos construir para tu operación</p>
  <div class="sistema__carril">
    <?php for ($vuelta = 0; $vuelta < 2; $vuelta++): /* duplicado para el desplazamiento infinito */ ?>
      <ul class="sistema__lista" <?= $vuelta ? 'aria-hidden="true"' : '' ?>>
        <?php foreach ($modulos_crm as [$nombre, $icono]): ?>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $icono ?></svg>
            <?= e($nombre) ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endfor; ?>
  </div>
</section>
