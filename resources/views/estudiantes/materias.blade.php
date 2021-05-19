@extends('estudiantes.index')
@section('mostrarMaterias')

 <div class="container content">
    <div class="row">
        <div class="title-class col-md-6 col-sm-12">
            <h1 class="text-color-p text-start">{{ $nombre }}</h1>
        </div>
        <div class="title-class col-md-6 col-sm-12 m-auto">
            <h2 class="text-color-p text-center">Calificación: 4.5</h2>
        </div>
    </div>
    <div class="divider"></div>
    <div>
        <h2 class="text-color-p mb-2">Mis Tareas</h2>
    </div>
    <div class="row cards">
        @foreach ($tareas as $tarea)
        <div class="col-sm-12 col-lg-4">
            <div class="card">
                <div class="card-body available">
                    <h5 class="card-title">{{ $tarea['nombre'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$tarea['nota']}}</h6>
                    <p class="card-text">{{$tarea['descripcion']}}</p>
                    <p class="card-text">Fecha de entrega: {{$tarea['fecha']}}</p>
                    <a herf="#" class="card-link" data-bs-toggle="modal" data-bs-target="#modal-tareas-{{$tarea['nombre']}}">
                        Descripcion
                    </a>
                    <a herf="#" class="card-link" data-bs-toggle="modal" data-bs-target="#modal-anotaciones-{{$tarea['nombre']}}">
                        Anotaciones
                    </a>
                </div>
                </div>
            </div>
            @include('estudiantes.modal')
        @endforeach
    </div>
</div>
@stop