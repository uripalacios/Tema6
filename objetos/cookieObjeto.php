<?php

    require_once "./ProductoMagico.php";

    $deserializado = unserialize( $_COOKIE['objeto']);
    echo $deserializado;
    

?>