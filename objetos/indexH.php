<?php


require_once "./Ordenador.php";

$productogenerico = new Producto();
$productogenerico->setId(1);
$productogenerico->setDescripcion("Raton");
$productogenerico->setPVP(12);

$productogenerico->muestra();


$ordenador1 = new Ordenador();
$ordenador1->setId(2);
$ordenador1->setDescripcion("Ordenador HP");
$ordenador1->setPVP(600);
$ordenador1->setRAM("8GB");
$ordenador1->setDiscoDuro("1TB SSD");

$ordenador1->muestra();

$ordenador1->aumentaPrecio(5);
$ordenador1->muestra();
?>