<?php
require './config/config.php';
session_start();
//si el usuario esta logeado inioLogeado
if(isset($_SESSION['validada'])){
    //enviar a donde haga falta
}

//si el usuario esta logeado y ha solicitado algo

//si el usuario ha pedido ir al loggin
else{
    if(isset($_SESSION['pagina'])){
        $controlador  = $controladores[$_SESSION['pagina']];
        require_once $controlador;
        exit();
    }
}

//si el usuario entra por primera vez
$_SESSION['vista'] = $vistas['inicio'];
$_SESSION['pagina'] = 'inicio';
require $vistas['layout'];
?>