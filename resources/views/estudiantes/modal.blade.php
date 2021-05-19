<div class="modal fade" id="modal-tareas-{{$tarea['nombre']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$tarea['nombre']}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($tareas as $t)
            @if ($tarea['nombre'] == $t['nombre'])
                <p>{{ $t['descripcion'] }}</p>
            @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Entregar</button>
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
                <p>{{ $t['descripcion'] }}</p>
            @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Entregar</button>
      </div>
    </div>
  </div>
</div>