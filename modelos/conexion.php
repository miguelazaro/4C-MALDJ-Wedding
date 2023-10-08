<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3307;dbname=4c-maldj-wedding", "root", "");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>