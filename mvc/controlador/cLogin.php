<?php

//si se ha pulsado el registro
if(isset($_POST['registro'])){
    $_SESSION['pagina'] = 'registro';
    header('Location: index.php');
    exit();
}
//que haya rellenado y verifica si existe el usuario
elseif(isset($_POST['iniciar'])){
    //el usuario
    //validar que hay datos en los input
    $todoOk = true;
    //llamamos al valida y retornna true/false
    if($todoOk){
        $user = $_POST['nombre'];
        $pass = $_POST['pass'];
        //$pass = hash("SHA256",$user.$pass);
        $pass = "25c0af9a1dc924c388e66d0acf93ef54885d9783a03131e11f6a21e378e4f70a";

        $usuario =  UsuarioDAO::validaUser($user,$pass);
        if($usuario != null){
            $_SESSION['validada'] = true;
            $_SESSION['user'] = $usuario->codUsuario;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['perfil'] = $usuario->perfil;
            $_SESSION['pagina'] = 'inicio';
            header('Location: index.php');
            exit();
        }else{
            $_SESSION['mensaje'] = "No existe el usuario o contraseña";
            $_SESSION['vista'] = $vistas['login'];
        }
    }

}elseif(isset($_POST['volver'])){
    //el usuario
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit();

}
//que sea la primera vez que se entra en login
else{
    $_SESSION['vista'] = $vistas['login'];
    require_once $vistas['layout'];
}


?>