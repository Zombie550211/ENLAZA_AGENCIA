<!-- ===================== MÓDULO: FOOTER ===================== -->
<footer class="footer">
  <div class="contenedor footer__fila">
    <?= logo() ?>
    <nav aria-label="Pie de página">
      <a href="#plataforma">Soluciones</a>
      <a href="#proceso">Cómo trabajamos</a>
      <a href="#preguntas">Preguntas</a>
      <a href="<?= e($config['sitio']['url_privacidad']) ?>">Aviso de privacidad</a>
    </nav>
    <span class="footer__copy">© <?= date('Y') ?> <?= e($config['sitio']['razon_social']) ?><?= $config['sitio']['dominio'] !== '' ? ' · ' . e($config['sitio']['dominio']) : '' ?></span>
  </div>
</footer>
