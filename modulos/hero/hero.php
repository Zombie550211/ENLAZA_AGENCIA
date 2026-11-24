<!-- ===================== MÓDULO: HERO ===================== -->
<section class="hero" id="hero">
  <div class="cuadricula"></div>
  <div class="brillo hero__brillo1"></div>
  <div class="brillo hero__brillo2"></div>

  <div class="contenedor hero__grid">
  <div class="hero__texto">
    <span class="etiqueta entra" style="--d:.05s">Licencias y soluciones web para call center</span>
    <h1 class="hero__titulo">
      <span class="degradado entra" style="--d:.15s">Sistemas web</span>
      <span class="degradado entra" style="--d:.27s">a la medida</span>
      <span class="degradado-azul entra" style="--d:.39s">para tu call center.</span>
    </h1>
    <p class="hero__sub entra" style="--d:.55s">Diseñamos y desarrollamos el software que tu operación necesita: clientes, ventas, reportes, comisiones y equipos, hecho para tu forma de trabajar.</p>
    <div class="hero__botones entra" style="--d:.7s">
      <a href="#demo" class="btn btn--primario btn--lg">Cuéntanos tu proyecto <?= flecha() ?></a>
      <a href="#proceso" class="btn btn--vidrio btn--lg">Cómo trabajamos</a>
    </div>
  </div>

  <!-- Ilustración genérica (no es ningún sistema real): panel abstracto + ventana de código -->
  <div class="hero__escena entra-escena" aria-hidden="true">
    <div class="hero__marco" id="hero-marco">
      <div class="pantalla">
        <div class="ui">
          <aside class="ui__lateral"><span class="ui__logo"></span><i class="activo"></i><i></i><i></i><i></i><i></i></aside>
          <div class="ui__main">
            <div class="ui__barra"><span class="ui__buscar"></span><span class="ui__avatar"></span></div>
            <div class="ui__kpis">
              <div class="ui__kpi"><span class="ui__linea" style="width:55%"></span><b></b><em class="sube"></em></div>
              <div class="ui__kpi"><span class="ui__linea" style="width:40%"></span><b></b><em class="sube"></em></div>
              <div class="ui__kpi"><span class="ui__linea" style="width:62%"></span><b></b><em></em></div>
              <div class="ui__kpi"><span class="ui__linea" style="width:48%"></span><b></b><em class="sube"></em></div>
            </div>
            <div class="ui__fila">
              <div class="ui__card ui__grafica">
                <span class="ui__linea" style="width:30%"></span>
                <svg viewBox="0 0 400 140" preserveAspectRatio="none">
                  <defs><linearGradient id="g-area" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#2f7bff" stop-opacity=".45"/><stop offset="1" stop-color="#2f7bff" stop-opacity="0"/></linearGradient></defs>
                  <path d="M0 110 C40 100 60 70 100 78 S160 40 200 52 S260 90 300 50 S360 20 400 28 V140 H0Z" fill="url(#g-area)"/>
                  <path id="linea-ventas" class="ui__trazo" d="M0 110 C40 100 60 70 100 78 S160 40 200 52 S260 90 300 50 S360 20 400 28" fill="none" stroke="#22d3ee" stroke-width="3"/>
                  <!-- punto de luz que recorre la línea -->
                  <circle class="ui__punto" r="5" fill="#ffffff" opacity="0">
                    <set attributeName="opacity" to="1" begin="2.6s" />
                    <animateMotion dur="5s" begin="2.6s" repeatCount="indefinite"><mpath href="#linea-ventas" /></animateMotion>
                  </circle>
                </svg>
              </div>
              <div class="ui__card ui__barras">
                <span class="ui__linea" style="width:45%"></span>
                <div><i style="--h:55%"></i><i style="--h:80%"></i><i style="--h:42%"></i><i style="--h:92%"></i><i style="--h:66%"></i><i style="--h:74%"></i></div>
              </div>
            </div>
            <div class="ui__card ui__tabla">
              <?php foreach (['verde', 'ambar', 'verde', 'azul'] as $i => $c): ?>
                <div class="ui__renglon"><span class="ui__circulo"></span><span class="ui__linea" style="width:<?= [38, 30, 44, 34][$i] ?>%"></span><span class="ui__linea ui__linea--tenue" style="width:<?= [22, 28, 18, 25][$i] ?>%"></span><span class="ui__pill ui__pill--<?= $c ?>"></span></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Ventana de código flotante: "lo construimos para ti" -->
      <div class="hero__codigo">
        <div class="hero__codigo-barra"><i></i><i></i><i></i><span>comisiones.js</span></div>
<pre><code id="hero-codigo"><span class="c-k">const</span> <span class="c-v">comision</span> = <span class="c-f">calcular</span>({
  ventas: <span class="c-v">equipo</span>.ventas,
  regla: <span class="c-s">"tu esquema"</span>,
});</code></pre>
      </div>
      <div class="hero__chip"><i></i><b>Hecho a tu medida</b></div>
    </div>
  </div>
  </div>
</section>
