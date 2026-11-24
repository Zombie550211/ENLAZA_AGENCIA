<?php
/* Funciones de ayuda compartidas por todos los módulos */

/** Escapa texto para imprimirlo seguro en HTML */
function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

/** Flecha → usada en los botones */
function flecha(): string
{
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
}

/** Logo de Enlaza (versión con texto blanco para fondo oscuro) */
function logo(string $clase = 'marca'): string
{
    return '<span class="' . e($clase) . '"><img src="assets/img/logo-enlaza-blanco.png" alt="Enlaza S.A. de C.V. — Licencias y Soluciones Web para Call Center" width="446" height="124" /></span>';
}

/** Carga un módulo: modulos/<nombre>/<nombre>.php */
function modulo(string $nombre, array $config): void
{
    $archivo = __DIR__ . "/../modulos/$nombre/$nombre.php";
    if (is_file($archivo)) {
        include $archivo;
    }
}

/** Imprime las etiquetas <link> de los CSS de los módulos */
function estilos(array $modulos): void
{
    foreach ($modulos as $m) {
        if (is_file(__DIR__ . "/../modulos/$m/$m.css")) {
            echo '  <link rel="stylesheet" href="modulos/' . $m . '/' . $m . '.css" />' . "\n";
        }
    }
}

/** Imprime las etiquetas <script> de los JS de los módulos */
function scripts(array $modulos): void
{
    foreach ($modulos as $m) {
        if (is_file(__DIR__ . "/../modulos/$m/$m.js")) {
            echo '  <script src="modulos/' . $m . '/' . $m . '.js"></script>' . "\n";
        }
    }
}
