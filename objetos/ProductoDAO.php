<?php

    class ProductoDAO implements DAO,otraI{
        //busca todos
        public static function findAll(){
            echo "finAll";
        }
        //busca por id(busca por la clave primaria)
        public static function findById($id){
            echo "findById";
        }
        //modifica o actualiza
        public static function update($objeto){
            echo "update";
        }
        //crear o insertar
        public static function save($objeto){
            echo "save";
        }
        //borrar
        public static function delete($objeto){
            echo "delete";
        }
        //funcion muestra
        public static function muestra(){
            echo "Este es el metodo  muestra";
        }
    }

?>