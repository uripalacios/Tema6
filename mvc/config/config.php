<?php

/*
    Aqui vamos a definir constantes que podamos necesitar

    incluir los ficheros que mas utilicemos

    vamos a definir algunos arrays para ayudarnos en la navegacion entre paginas,
    es decir, controladores y vistas.
*/
//para cargar las imagenes
//define ('IMAGENES',"/tema6/mvc/webroot/img");

//validacion
include './core/funciones.php';
require './config/datosBD.php';
require './modelo/ConexionBD.php';
require './dao/DAO.php';
require './modelo/Usuario.php';
require './dao/UsuarioDAO.php';

$controladores = [
    'inicio' => 'controlador/cInicio.php',
    'login' => 'controlador/cLogin.php'
];

$vistas = [
    'inicio' => 'vista/vInicio.php',
    'login' => 'vista/vLogin.php',
    'layout' => 'vista/vLayout.php'
];
?>