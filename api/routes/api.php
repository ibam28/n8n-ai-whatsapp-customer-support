<?php

declare(strict_types=1);

require_once __DIR__ . '/../responses/Response.php';

require_once __DIR__ . '/../controllers/HealthController.php';
require_once __DIR__ . '/../controllers/CustomerController.php';
require_once __DIR__ . '/../controllers/ConversationController.php';

$routes = [

    '/' => [HealthController::class, 'index'],

    '/health' => [HealthController::class, 'index'],

    '/customers' => [CustomerController::class, 'index'],

    '/conversations' => [ConversationController::class, 'index'],

];

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$path])) {

    [$controller, $method] = $routes[$path];

    (new $controller())->$method();

    exit;
}

Response::json([
    'status' => 'error',
    'message' => 'Endpoint not found'
], 404);