<?php
/* =========================================================
   MÓDULO: CONTACTO — recibe el formulario de demo
   Guarda cada solicitud en datos/solicitudes.csv y, si hay
   correo configurado en config.php, envía un aviso.
   ========================================================= */

header('Content-Type: application/json; charset=utf-8');

function responder(bool $ok, string $mensaje, int $codigo = 200): void
{
    http_response_code($codigo);
    echo json_encode(['ok' => $ok, 'mensaje' => $mensaje], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(false, 'Método no permitido.', 405);
}

$config = require __DIR__ . '/../../config.php';

// Bot: llenó el campo oculto → fingimos éxito y no guardamos nada
if (!empty($_POST['empresa_web'])) {
    responder(true, '¡Gracias! Te contactaremos muy pronto.');
}

$nombre   = trim((string)($_POST['nombre'] ?? ''));
$contacto = trim((string)($_POST['contacto'] ?? ''));

$esCorreo   = filter_var($contacto, FILTER_VALIDATE_EMAIL) !== false;
$esTelefono = (bool)preg_match('/^\+?[\d\s()\-]{8,20}$/', $contacto);

if (!preg_match('/^.{1,120}$/u', $nombre) ||(!$esCorreo && !$esTelefono)) {
    responder(false, 'Revisa tu nombre y un WhatsApp o correo válido.', 422);
}

// Evita que Excel interprete el texto como fórmula
$limpiar = fn(string $v) => preg_match('/^[=+\-@]/', $v) && !preg_match('/^\+\d/', $v) ? "'" . $v : $v;

$carpeta = __DIR__ . '/../../datos';
if (!is_dir($carpeta)) {
    mkdir($carpeta, 0755, true);
}
$archivo = $carpeta . '/solicitudes.csv';
$nuevo   = !is_file($archivo);

$f = fopen($archivo, 'a');
if (!$f) {
    responder(false, 'No pudimos guardar tu solicitud. Intenta de nuevo.', 500);
}
flock($f, LOCK_EX);
if ($nuevo) {
    fwrite($f, "\xEF\xBB\xBF"); // BOM para que Excel lea bien los acentos
    fputcsv($f, ['fecha', 'nombre', 'contacto', 'tipo', 'ip']);
}
fputcsv($f, [
    date('Y-m-d H:i:s'),
    $limpiar($nombre),
    $limpiar($contacto),
    $esCorreo ? 'correo' : 'whatsapp',
    $_SERVER['REMOTE_ADDR'] ?? '',
]);
flock($f, LOCK_UN);
fclose($f);

// Aviso por correo (opcional)
$destino = $config['formulario']['correo_aviso'] ?? '';
if ($destino !== '') {
    $asunto = 'Nueva solicitud de demo — ' . $config['sitio']['nombre'];
    $cuerpo = "Nombre: $nombre\nContacto: $contacto\nFecha: " . date('Y-m-d H:i');
    @mail($destino, $asunto, $cuerpo, 'Content-Type: text/plain; charset=utf-8');
}

responder(true, "¡Gracias, $nombre! Te contactaremos muy pronto.");
