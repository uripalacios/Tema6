<?php

if(isset($_POST['logout'])){
    unset($_SESSION['validada']);
    session_destroy();
    header('Location: index.php');
    exit();
}else if(isset($_POST['volver'])){
    $_SESSION['pagina']='inicio';
    header('Location: index.php');
    exit();
}else if(isset($_POST['modificar'])){
    //al modificar vulve a la misma pagina pero con datos nuevos
    
    $todoOk = true;//validar los datos introducidos

    if($todoOk){

    }
}else if(isset($_POST['usuarios'])){
    if($_SESSION['perfil']== 'admini'){
        $_SESSION['vista'] = $vistas['listaUsuarios'];
        $lista = UsuarioDAO::findAll();
        require_once $vistas['layout'];
    }
}else if(isset($_GET['mostrar'])){
    if($_SESSION['perfil']== 'admini'){
        $codUsuario = $_GET['mostrar'];
        $usuario = UsuarioDAO::findById($codUsuario);
        $_SESSION['vistas'] = $vistas['perfil'];
        require_once $vistas['layout'];
    }
}
else{
    //suponiendo que es mi perfil
    $usuario  = new Usuario($_SESSION['codUsuario'],$_SESSION['nombre'],$_SESSION['pass'],$_SESSION['perfil']);
    $_SESSION['vista']= $vistas['perfil'];
    require_once $vistas['layout'];
}