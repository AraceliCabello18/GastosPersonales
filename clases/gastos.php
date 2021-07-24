<?php
  include "Conexion.php";
  class Gastos extends Conexion{
    public function obtenerDatos($idgastos){
      $conexion= Conexion::conectar();
      $sql="SELECT id_gastos,
                  fecha,
                  nombre,
                  descripcion,
                  monto
                  FROM t_gastos 
                  WHERE id_gastos='$idgastos'";
      $result=mysqli_query($conexion, $sql);
      $gastos=mysqli_fetch_array($result);
      $datos=array(
        "idgastos"=>$gastos['id_gastos'],
        "fecha"=>$gastos['fecha'],
        "nombre"=>$gastos['nombre'],
        "descripcion"=>$gastos['descripcion'],
        "monto"=>$gastos['monto'],
      );
      return $datos;
    }
    public function eliminar($idgastos){
      $conexion= Conexion::conectar();
      $sql="DELETE FROM t_gastos WHERE id_gastos='$idgastos'";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function agregar($fecha, $nombre, $descripcion, $monto){
      $conexion= Conexion::conectar();
      $sql="INSERT INTO t_gastos (fecha, nombre, descripcion, monto) VALUES ('$fecha','$nombre','$descripcion','$monto')";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function actualizar($datos){
      $conexion= Conexion::conectar();
      $sql="UPDATE t_gastos SET fecha=?, nombre=?, descripcion=?, monto=? WHERE id_gastos=?";
      $query=$conexion->prepare($sql);
      $query->bind_param(
        'ssssi',$datos['fecha'],
                $datos['nombre'],
                $datos['descripcion'],
                $datos['monto'],
                $datos['id_gastos']
      );
      $respuesta=$query->execute();
      return $respuesta;
    }
  }
?>