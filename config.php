<?php
/* =========================================================
   CONFIGURACIÓN GENERAL — cambia aquí los datos del sitio
   ========================================================= */

return [
    'sitio' => [
        'nombre'      => 'Enlaza',
        'razon_social'=> 'Enlaza S.A. de C.V.',
        'dominio'     => '', // p. ej. 'enlaza.com.mx' — si se deja vacío no aparece en el pie
        'titulo'      => 'Enlaza — Sistemas web a la medida para call center',
        'descripcion' => 'Enlaza S.A. de C.V. diseña y desarrolla sistemas web a la medida para call centers: CRM, reportes, comisiones y supervisión de equipos.',
        'url_login'   => '#',
        'url_privacidad' => '#',
    ],

    'faq' => [
        ['¿Necesito instalar algo?', 'No. Desarrollamos sistemas web: se usan desde el navegador, en computadora o celular.'],
        ['¿Cuánto tarda un proyecto?', 'Depende del alcance. Después del diagnóstico te entregamos una propuesta con etapas y tiempos.'],
        ['¿Pueden pasar mi información de Excel al sistema nuevo?', '[Confirmar: migración de datos incluida o como servicio adicional].'],
        ['¿Mis datos están seguros?', '[Describir respaldos, cifrado y dónde se alojan los datos].'],
        ['¿Ofrecen capacitación?', 'Sí, acompañamos a tu equipo en el arranque. [Detallar modalidad].'],
    ],

    /* Formulario de demo: cada solicitud se guarda en datos/solicitudes.csv.
       Si pones un correo aquí, además se envía un aviso (requiere que el hosting tenga mail()). */
    'formulario' => [
        'correo_aviso' => '',
    ],
];
