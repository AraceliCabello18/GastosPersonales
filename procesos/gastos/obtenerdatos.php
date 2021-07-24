<?php
  include "../../clases/personas.php";
  $gastos=new Conexion();
  $idgastos=$_POST['idgastos'];
  echo json_encode($gastos->obtenerDatos($idgastos));
?>