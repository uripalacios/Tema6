<?php

    require_once "./Producto.php";

    $producto = new Producto('P01',"Ordenador",1200);
    //Es privado
    //$producto->id= "P01";
    //$producto->descripcion = "Ordenador Gaming";
    $producto->muestra();
?>