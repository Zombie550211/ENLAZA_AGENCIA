<?php
$config = require __DIR__ . '/config.php';
require __DIR__ . '/base/funciones.php';

/* Orden en que aparecen las secciones. Para quitar o mover una, edita esta lista. */
$modulos = ['header', 'hero', 'sistema', 'antes', 'proceso', 'faq', 'contacto', 'footer'];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= e($config['sitio']['titulo']) ?></title>
  <meta name="description" content="<?= e($config['sitio']['descripcion']) ?>" />
  <link rel="icon" href="assets/img/logo-enlaza.png" />
  <meta name="theme-color" content="#05070f" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:wght@700;800&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="base/base.css" />
<?php estilos($modulos); ?>
</head>
<body>

<?php
foreach ($modulos as $m) {
    if ($m === 'hero') echo "<main>\n";      // el contenido principal empieza después del header
    modulo($m, $config);
    if ($m === 'contacto') echo "</main>\n"; // y termina antes del footer
}
?>

  <script src="base/main.js"></script>
<?php scripts($modulos); ?>
</body>
</html>
