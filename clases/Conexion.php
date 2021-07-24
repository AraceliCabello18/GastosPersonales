<?php 
    class Conexion{
      public function conectar(){
        $server="localhost";
        $usuario="root";
        $password="";
        $bd="gastos";
        $conexion=mysqli_connect($server, $usuario, $password, $bd);
        return $conexion;
      }
    }
?>