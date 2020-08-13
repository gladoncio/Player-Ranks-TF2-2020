<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'host');
        define('nombre_bd', 'DB');
        define('usuario', 'USER');
        define('password', 'PASSWORD');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}