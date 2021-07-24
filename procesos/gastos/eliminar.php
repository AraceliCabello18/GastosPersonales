<?php
  include "../../clases/gastos.php";
  $gastos=new Gastos();
  $idgastos=$_POST['idgastos'];
  echo $gastos->eliminar($idgastos);
?>