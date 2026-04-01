<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

// Rutas Públicas
$router->get('/', [PaginasController::class, 'index']);

// Comprobamos las rutas
$router->comprobarRutas();