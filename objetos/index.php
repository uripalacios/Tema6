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

    //atributo estatico
    echo ProductoMagico::$numeroProductos;

    echo "<br>";
    //metodo estatico
    ProductoMagico::muestraContador();

    //si un objeto que ya esta instanciado pertenece a una clase
    if($productoM instanceof ProductoMagico){
        echo "Pertenece";
    }else{
        echo "Producto no pertenece";
    }

    echo "<br>";

    //que metodos tiene una clase
    print_r(get_class_methods('ProductoMagico'));

    echo "<br>";

    //si existe una clase
    if(class_exists('ProductoL')){
        echo "Existe";
    }else{
        echo "No existe";
    }

    echo "<br>";

    //Alias
    class_alias('Producto','Articulo');
    $art = new Articulo();
    //si un objeto que ya esta instanciado pertenece a una clase
    if($art instanceof Producto){
        echo "Pertenece";
    }else{
        echo "Producto no pertenece";
    }

    echo "<br>";

    //si existe el metodo muestra
    if(method_exists('Producto','muestra')){
        echo "si existe el metodo";
    }else{
        echo "No existe el metodo";
    }

    echo "<br>";

    //atributos de clase
    print_r(get_class_vars('ProductoMagico'));

    echo "<br>";

    //atributos de objeto devuelve aquellos a lo que puedes acceder(publicos)
    print_r(get_object_vars($productoM));

    echo "<br>";

    //Si existe la propiedad
    if(property_exists('ProductoMagico','id')){
        echo "Existe";
    }

    echo "<br>";

    //quiero comparar objetos
    //p1 1 raton 100
    //p2 1 raton 100
    
    $p1 = new ProductoMagico(1,'raton',100);
    $p2 = new ProductoMagico(1,'raton',100);

    //comprar un objeto segun sus atributos
    if($p1 == $p2){
        echo "Es igual";
    }else{
        echo "No es igual";
    }

    echo "<br>";

    //comprar un objeto segun su posicion de memoria
    if($p1 === $p2){
        echo "Es igual";
    }else{
        echo "No es igual";
    }
    $p3 = $p1;
    if($p1 === $p3){
        echo "Es igual";
    }else{
        echo "No es igual";
    }

    echo "<br>";

    //serializar un objeto
    $serializado = serialize($p1);
    //deserializar un objeto
   // $deserializado = unserialize($p1);

    setcookie("objeto",$serializado);
    
?>

<a href="cookieObjeto.php">Enlace para probar serializar</a>