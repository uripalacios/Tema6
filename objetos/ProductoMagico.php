<?php

class ProductoMagico{
    //Atributos
    private $id;
    private $descripcion;
    private $PVP;
    //atributo eestatico
    public static $numeroProductos = 0;
    
    //Metodos
    public function muestra(){
        echo "<p>".$this->id.":"
        .$this->descripcion.":"
        .$this->PVP ;
    }
    
    //Constructor
    public function __construct($id,$descripcion,$PVP)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->PVP = $PVP;
        self::$numeroProductos++;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }
    
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    
    // public function __destruct()
    // {
        //     echo "Estoy destruyendo el producto";
        // }
        
        public function __toString()
        {
            return "<p>".$this->id.":"
            .$this->descripcion.":"
            .$this->PVP ;
        }
        
            //Metodo estatico
            public static function muestraContador(){
                echo self::$numeroProductos;
                echo "<br>";
            }
    }
    ?>