<?php
  include "../../clases/gastos.php";
  $gastos=new Gastos();

  $datos=array(
    "id_gastos"=>$_POST['idU'],
    "fecha"=>$_POST['fechaU'],
    "nombre"=>$_POST['nombreU'],
    "descripcion"=>$_POST['descripcionU'],
    "monto"=>$_POST['montoU']
  );
  echo $gastos->actualizar($datos);
?>
