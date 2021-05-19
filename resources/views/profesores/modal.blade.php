<div class="modal fade" id="modal-crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="nombreTarea" class="col-form-label">Nombre</label>
          <div>
            <input type="text" class="form-control" id="nombreTarea">
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="nombreTarea" class="col-form-label">Fecha de entrega</label>
          <div>
            <input type="date" class="form-control" id="nombreTarea">
          </div>
        </div>
        <div class="mb-3">
          <label for="nombreTarea" class="col-form-label">Valor</label>
          <div>
            <input type="number" class="form-control" id="nombreTarea">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-anotaciones-{{$tarea['nombre']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anotaciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($tareas as $t)
          @if ($tarea['nombre'] == $t['nombre'])
            <h3>{{ $t['nombre'] }}</h3>
            <p>{{ $t['descripcion'] }}</p>
            <strong>Calificación: {{ $t['nota'] }}</strong>
          @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Entregar</button>
      </div>
    </div>
  </div>
</div>