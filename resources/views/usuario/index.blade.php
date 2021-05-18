@extends('layouts.app')

@section('content')
    <div class="container">
        @include('usuario.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">USUARIOS</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create-user" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Usuario</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>CORREO</th>
                                            <th>CONTRASEÑA</th>
                                            <th>TIPO DE USUARIO</th>
                                            <th>OPCIONES</th>
                                        </thead>
                                        @foreach ($usuario as $us)
                                            <tr>
                                                <td>{{ $us->id }}</td>
                                                <td>{{ $us->name }}</td>
                                                <td>{{ $us->email }}</td>
                                                <td>{{ $us->password }}</td>
                                                <td>{{ $us->usertype_id_usertype }}</td>
                                                <td>

                                                    {{-- <a href="" data-target="#modal-edit-{{ $us->id }}"
                                                        data-toggle="modal"><button class="btn btn-info">Editar</button></a>

                                                    <a href="" data-target="#modal-delete-{{ $us->id }}"
                                                        data-toggle="modal"><button
                                                            class="btn btn-danger">Eliminar</button></a> --}}

                                                </td>
                                            </tr>
                                            {{-- @include('usuario.edit')
                                            @include('usuario.delete') --}}
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
