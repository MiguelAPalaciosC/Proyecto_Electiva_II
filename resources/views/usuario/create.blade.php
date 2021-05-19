<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create-usuario">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    {!! Form::open(['url' => 'usuario', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                    {{ Form::token() }}

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Nombre:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Correo:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Contraseña:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Tipo de Usuario:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <select name="usertype_id_usertype" class="form-control">
                                @foreach ($usertype as $ust)
                                    <option value="{{ $ust->id_usertype }}">{{ $ust->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row" align="center">
                        <div class="form-group col-sm-12" align="center">
                            <button class="btn btn-info" type="submit">Guardar</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>