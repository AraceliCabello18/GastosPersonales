

<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgrega" method="post" onsubmit="return agregar()">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
            <label for="monto">monto</label>
            <input type="text" class="form-control" id="monto" name="monto">
            <br>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>