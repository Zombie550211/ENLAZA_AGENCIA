<!-- ===================== MÓDULO: CONTACTO / CIERRE ===================== -->
<section class="contacto" id="demo">
  <div class="cuadricula"></div>
  <div class="brillo contacto__brillo"></div>
  <div class="contenedor contacto__grid">
    <div class="revelar">
      <span class="etiqueta">Hablemos de tu proyecto</span>
      <h2 class="titulo">Tu empresa está lista para <span class="degradado-azul">el siguiente nivel.</span></h2>
      <p class="subtitulo">Déjanos tus datos y te contactamos para entender qué necesita tu operación.</p>
      <ul class="contacto__puntos">
        <li>Revisamos cómo trabaja hoy tu operación</li>
        <li>Te proponemos alcance, etapas y tiempos</li>
        <li>Sin compromiso</li>
      </ul>
    </div>

    <div class="vidrio contacto__caja revelar">
      <form class="form" id="form-demo" action="modulos/contacto/enviar.php" method="post" novalidate>
        <label>Nombre<input type="text" name="nombre" placeholder="Tu nombre" autocomplete="name" maxlength="120" /></label>
        <label>WhatsApp o correo<input type="text" name="contacto" placeholder="+52 ... o tu@empresa.com" maxlength="160" /></label>
        <!-- Campo trampa contra bots: las personas no lo ven -->
        <input type="text" name="empresa_web" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true" />
        <button type="submit" class="btn btn--primario btn--lg btn--bloque"><span>Quiero que me contacten</span> <?= flecha() ?></button>
        <p class="form__msg" role="status" aria-live="polite"></p>
      </form>
    </div>
  </div>
</section>
