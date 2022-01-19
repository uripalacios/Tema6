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

    //metodo que no se puede sobreescribir(final)

    public final function aumentaPrecio($cuanto){
        $this->PVP = $this->PVP*(1+$cuanto/100);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of PVP
     */ 
    public function getPVP()
    {
        return $this->PVP;
    }

    /**
     * Set the value of PVP
     *
     * @return  self
     */ 
    public function setPVP($PVP)
    {
        $this->PVP = $PVP;

        return $this;
    }
}

?>