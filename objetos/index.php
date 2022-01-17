<?php

    require_once "./Producto.php";
    require_once "./ProductoMagico.php";

    $producto = new Producto('P01',"Ordenador",1200);
    //Es privado
    //$producto->id= "P01";
    //$producto->descripcion = "Ordenador Gaming";
    $producto->setId('P01');
    echo $producto->getId();
    $producto->muestra();

    echo "<h1>ProductoMagico</h1>";
    $productoM = new ProductoMagico('P01',"Ordenador",1200);
    $productoM->muestra();
    echo "<br>";
    //get
    echo $productoM->__get("id");
    echo "<br>";
    echo $productoM->id;
    echo "<br>";

    //set
    $productoM->__set("id",'P02');
    $productoM->descripcion ='ordenador magico';
    $productoM->muestra();

    //Destruct
    echo "<br>";
    //$productoM = null;

    //ToString
    echo "To String<br>";
    echo $productoM->__toString();
    echo $productoM;


    $productoM = new ProductoMagico('P03',"Ordenador 2",1200);

    echo "<br>";
    echo ProductoMagico::$numeroProductos;
?>