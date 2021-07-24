

<!-- Modal -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualiza" method="post" onsubmit="return actualizar()">
            <label for="idU">id</label>
            <input type="text" class="form-control" id="idU" name="idU">
            <label for="fechaU">Fecha</label>
            <input type="text" class="form-control" id="fechaU" name="fechaU">
            <label for="nombreU">Nombre</label>
            <input type="text" class="form-control" id="nombreU" name="nombreU">
            <label for="descripcionU">Descripcion</label>
            <input type="text" class="form-control" id="descripcionU" name="descripcionU">
            <label for="montoU">monto</label>
            <input type="text" class="form-control" id="montoU" name="montoU">
            <br>
            <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>