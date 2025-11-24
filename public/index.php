<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$appEnv = $_ENV['APP_ENV'] ?? getenv('APP_ENV') ?? 'production';

if (in_array($appEnv, ['production', 'testing'], true)) {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(0);
}

// Protección básica contra acceso directo a carpetas sensibles
$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$path   = parse_url($rawUri, PHP_URL_PATH) ?? '/';
$path   = strtolower(rawurldecode($path));

if (preg_match('#^/(vendor|storage|resources)/#i', $path)) {
    http_response_code(404);
    exit;
}

if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registrar el autoloader de Composer...
require __DIR__ . '/../vendor/autoload.php';

// Refuerzo de HSTS solo para producción/testing y cuando la petición llega por HTTPS
$httpsServer = strtolower((string)($_SERVER['HTTPS'] ?? ''));
$xfp         = strtolower((string)($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''));
$isHttps     = ($httpsServer === 'on' || $httpsServer === '1' || $xfp === 'https');

if (in_array($appEnv, ['production', 'testing'], true) && $isHttps && !headers_sent()) {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload', false);
}

(require_once __DIR__ . '/../bootstrap/app.php')
    ->handleRequest(Request::capture());
