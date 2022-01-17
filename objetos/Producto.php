<?php

class Producto{
    //Atributos
    private $id;
    private $descripcion;
    private $PVP;

    //Metodos
    public function muestra(){
        echo "<p>".$this->id.":"
        .$this->descripcion.":"
        .$this->PVP ;
    }
}

?>