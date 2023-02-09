<?php  

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        //session_start(); //tengo que ver si esto va aqui
        isAuth();
        $router->render('cita/index',[
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);

    }
}