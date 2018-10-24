<?php

class db{
    private $host = 'localhost';
    private $usuario = 'root';
    private $password = '';
    private $base = 'misclientes';
    
    //Conectar BD
    public function conectar(){
        
        $conexion_mysql = "mysql:host=$this->host;dbname=$this->base";
        $conexionBD = new PDO($conexion_mysql, $this->usuario, $this->password);
        $conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Linea de codificación BD
        $conexionBD->exec("set names utf8");
        
        return $conexionBD;
    }
}

