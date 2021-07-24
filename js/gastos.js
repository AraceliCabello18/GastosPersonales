$(document).ready(function(){
    $('#tablaGastosLoad').load('vistas/gastos/tablaGastos.php');
});
function agregar() {
    $.ajax({
        type: "POST",
        data: $('#frmAgrega').serialize(),
        url: "procesos/gastos/agregar.php",
        success:function (respuesta) {
            if (respuesta == 1) {
                $('#tablaGastosLoad').load('vistas/gastos/tablaGastos.php');
                $('#frmAgrega')[0].reset();
                swal(";D","agregado con exito!!!","success");
            } else {
                swal(":´(","no se pudo agregar"+respuesta,"error");
            }
        }
    });
    return false;
}

function eliminar(idgastos){
    swal({
        title: "Estas seguro de eliminar el gasto?",
        text: "Una vez eliminada, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                data: "idgastos="+idgastos,
                url: "procesos/gastos/eliminar.php",
                success:function (respuesta) {
                    if (respuesta == 1) {
                        $('#tablaGastosLoad').load('vistas/gastos/tablaGastos.php');
                        swal(";D","se elimino con extio!!!","success");
                    } else {
                        swal(":´(","no se pudo eliminar"+respuesta,"error");
                    }
                }
            });
        } 
    });
}
function obtenerDatos(idgastos) {
    $.ajax({
        type: "POST",
        data: "idgastos="+idgastos,
        url: "procesos/gastos/obtenerdatos.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#fechau').val(respuesta['fecha']);
            $('#nombreu').val(respuesta['nombre']);
            $('#descripcionu').val(respuesta['descripcion']);
            $('#montou').val(respuesta['monto']);
            $('#idgastos').val(respuesta['idgastos']);
        }
    });
}
function actualizar() {
    $.ajax({
        type:"POST",
        data: $('#frmActualiza').serialize(),
        url: "procesos/gastos/actualizar.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaGastosLoad').load('vistas/gastos/tablaGastos.php')
                swal(";D","si se pudo Actualizar!!!!","success")
            } else {
                swal(":´(","no se pudo actualizar"+respuesta,"error");
            }
        }
    });
    return false;
}