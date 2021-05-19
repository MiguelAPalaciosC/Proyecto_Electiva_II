<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <title>Profesor</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- ICONS only -->
    <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('css/profesores.css') }}" rel="stylesheet">

</head>
<body id="profesores">
<div class="d-flex">
    <input type="checkbox" id="btn">
    <div class="sidebar-container bg-primary">
        <label id="minium-close" for="btn" class="check p-3"><i class="icon ion-navicon-round"></i></label>
        <div class="welcome">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="ml-2 icon ion-close-round"></i> 
            </a>
            <span class="font-weight-bold">¡Hola, {{ Auth::user()->name }}!</span>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </div>
        <div class="menu">
            @foreach ($materias as $materia)
                <a href="{{ url('profesorMateria/'.$materia) }}" class="d-block p-3 text-color-p"><i class="icon ion-android-book mr-2 lead"></i> {{ $materia }}</a>
            @endforeach
            <label id="close"for="btn" class="check p-3 text-color-p"><i class="icon ion-chevron-left mr-2 lead"></i> Cerrar</label>
        </div>
    </div>
</div>
    @if (isset($clear))
        <div class="bienvenida">
            <i class="icon ion-happy mr-2 lead" width="500px"></i>
            <h3>¡Que gusto tenerte de vuelta!</h3>
        </div>
    @else
        @yield("mostrarMaterias")
    @endif
</body>
</html>
