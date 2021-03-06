
<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Administracion de Gastos Personales</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
        Agregar Gasto
    </span>
    <hr>
    <div id="tablaGastosLoad"></div>
    <div style="height: 700px"></div>
    <p class="lead mb-0"></p>
    </div>
</div>
</div>

<?php
    include "vistas/gastos/modalAgregar.php";
    include "vistas/gastos/modalActualizar.php";
?>

<?php include "footer.php"; ?>
<script src="js/gastos.js"></script>




