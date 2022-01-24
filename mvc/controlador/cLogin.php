<?php

//si se ha pulsado el registro
if(isset($_POST['registro'])){
    header('Location: index.php');
    exit();
}
//que haya rellenado y verifica si existe el usuario
elseif(isset($_POST['iniciar'])){
    //el usuario

}elseif(isset($_POST['volver'])){
    //el usuario
    $_SESSION['vista']  = $vistas['inicio'];
    require_once $vistas['layout'];

}
//que sea la primera vez que se entra en login
else{
    $_SESSION['vista'] = $vistas['login'];
    require_once $vistas['layout'];
}


?>