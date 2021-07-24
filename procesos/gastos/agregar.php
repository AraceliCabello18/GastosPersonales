<?php
  include "../../clases/gastos.php";
  $gastos=new Gastos();
  $fecha=$_POST['fecha'];
  $nombre=$_POST['nombre'];
  $descripcion=$_POST['descripcion'];
  $monto=$_POST['monto'];
  echo $gastos->agregar($fecha,$nombre,$descripcion,$monto);
?>