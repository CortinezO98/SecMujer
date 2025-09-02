<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$path   = parse_url($rawUri, PHP_URL_PATH) ?? '/';
$path   = strtolower(rawurldecode($path));

if (preg_match('#^/(vendor|storage|resources)/#i', $path)) {
    http_response_code(404);
    exit;
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

$appEnv = $_ENV['APP_ENV'] ?? getenv('APP_ENV') ?? null;
$httpsServer = strtolower((string)($_SERVER['HTTPS'] ?? ''));
$xfp        = strtolower((string)($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''));
$isHttps    = ($httpsServer === 'on' || $httpsServer === '1' || $xfp === 'https');

if (in_array($appEnv, ['production', 'testing'], true) && $isHttps && !headers_sent()) {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload', false);
}


// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
