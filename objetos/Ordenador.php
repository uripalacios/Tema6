<?php

require "./Producto.php";

class Ordenador extends Producto{

    private $RAM;
    private $discoDuro;
    

    /**
     * Get the value of RAM
     */ 
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * Set the value of RAM
     *
     * @return  self
     */ 
    public function setRAM($RAM)
    {
        $this->RAM = $RAM;

        return $this;
    }

    /**
     * Get the value of discoDuro
     */ 
    public function getDiscoDuro()
    {
        return $this->discoDuro;
    }

    /**
     * Set the value of discoDuro
     *
     * @return  self
     */ 
    public function setDiscoDuro($discoDuro)
    {
        $this->discoDuro = $discoDuro;

        return $this;
    }

    public function muestra(){
        echo "<p>".parent::getId().":"
        .parent::getDescripcion().":"
        .parent::getPVP().":"
        .$this->RAM.":"
        .$this->discoDuro.
        "</p>" ;
    }
}

?>