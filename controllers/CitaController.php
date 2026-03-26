<?php
namespace Controllers;
use MVC\Router;
use Model\Cita;

class CitaController {
    public static function index(Router $router) {
        session_start();
        isAuth(); // Protege la ruta

        $router->render('cita/index', [
            'titulo' => 'Reservar Cita',
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}