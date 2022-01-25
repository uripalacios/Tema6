<?php
//inicio
if(isset($_POST['volver'])){
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit();
}else if(isset($_POST['registro'])){
    //usuaremos mi libreria de validar
    //intenetar insertar el usuario nuevo
}else if(isset($_POST['login'])){
    //que se haya rellenado el login
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
    exit();
}else{
    //que sea la primera vez que se entra en login
    $_SESSION['vista'] = $vistas['registro'];
    require_once $vistas['layout'];
}

?>