@extends('profesores.index')
@section('mostrarMaterias')

 <div class="container content">
    <div class="row">
        <div class="title-class col-md-6 col-sm-12">
            <h1 class="text-color-p text-start">{{ $nombre }}</h1>
        </div>
        <div class="title-class col-md-6 col-sm-12 m-auto">
            <div class="create">
                <a herf="#" class="card-link" data-bs-toggle="modal" data-bs-target="#modal-crear">
                    <i class="icon ion-android-add mr-2 lead"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tareas</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Asignaciones</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row cards">
                @foreach ($tareas as $tarea)
                    <div class="col-sm-12 col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $tarea['nombre'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$tarea['nota']}}</h6>
                                <p class="card-text">{{$tarea['descripcion']}}</p>
                                <p class="card-text">Fecha de entrega: {{$tarea['fecha']}}</p>
                                <a herf="#" class="card-link" data-bs-toggle="modal" data-bs-target="#modal-tareas-{{$tarea['nombre']}}">
                                    Calificar
                                </a>
                            </div>
                        </div>
                    </div>
                    @include('estudiantes.modal')
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row cards">
                @foreach ($tareas as $tarea)
                    <div class="col-sm-12 col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body available">
                                <h5 class="card-title">{{ $tarea['nombre'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$tarea['nota']}}</h6>
                                <p class="card-text">{{$tarea['descripcion']}}</p>
                                <p class="card-text">Fecha de entrega: {{$tarea['fecha']}}</p>
                                <a herf="#" class="card-link" data-bs-toggle="modal" data-bs-target="#modal-tareas-{{$tarea['nombre']}}">
                                    Editar
                                </a>
                                <a herf="#" class="card-link"> Eliminar </a>
                            </div>
                        </div>
                    </div>
                    @include('estudiantes.modal')
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop