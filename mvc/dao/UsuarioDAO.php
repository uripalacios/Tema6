<?php

class UsuarioDAO implements DAO{
        public static function findAll(){
                $sql = "select * from usuario where codUsuario = ? and password = ?";
                $consulta = ConexionBD::ejecutaConsulta($sql,[]);
                $cont = 0;
                $usuario = null;
                while ($row = $consulta->fetchObject()) {
                        $usuario  = new Usuario($row->codUsuario,$row->nombre,$row->pass,$row->Perfil);
                }
                return $usuario;
        }
        //busca por id(busca por la clave primaria)
        public static function findById($id){
            
        }
        //modifica o actualiza
        public static function update($objeto){}
        //crear o insertar
        public static function save($objeto){}
        //borrar
        public static function delete($objeto){}

        public static function validaUser($user,$pass){
                $sql = "select * from usuario where codUsuario = ? and password = ?";
                $consulta = ConexionBD::ejecutaConsulta($sql,[$user,$pass]);
                $cont = 0;
                $usuario = null;
                while ($row = $consulta->fetchObject()) {
                        $usuario  = new Usuario($row->codUsuario,$row->nombre,$row->password,$row->Perfil);
                }
                return $usuario;
            }
        
}

?>