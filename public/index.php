<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
// Aquí puedes agregar tus controladores más adelante
// use Controllers\LoginController;

// 1. PRIMERO: Creamos la instancia del Router
$router = new Router();

// 2. SEGUNDO: Definimos las rutas (Ejemplo de prueba)
$router->get('/', function() {
    echo "¡Servidor funcionando! Estás en la página de inicio.";
});

$router->get('/login', function() {
    echo "Aquí irá el Login de la App Odonto";
});

// 3. TERCERO Y ÚLTIMO: Comprobamos las rutas
$router->comprobarRutas();