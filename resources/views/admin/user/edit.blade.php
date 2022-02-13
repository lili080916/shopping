@extends('admin.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-users icon-home"></i> USUARIOS <small>[Editar usuario]</small></h1>
    </div><br>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                  @include('admin.partials.errors')
                @endif
                
                {!! Form::model($user, ['route'=>array('user.update', $user)]) !!}

                    <input type="hidden" name="_method" value="PUT">
                    
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {!! Form::text('name', 
                                        null, 
                                        [
                                            'class'=>'form-control', 
                                            'placeholder'=>'Ingresa el nombre',
                                            'autofocus'=>'autofocus'
                                        ]
                                      ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="last_name">Apellidos</label>
                        {!! Form::text('last_name', 
                                        null, 
                                        [
                                            'class'=>'form-control', 
                                            'placeholder'=>'Ingrese sus apellidos'
                                        ]
                                      ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="address">Dirección</label>
                        {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
                    </div><br>

                    <div class="form-group">
                        <label for="name">Correo</label>
                        {!! Form::text('email', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingrese su correo electrónico'
                                        ]
                                      ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="name">Usuario</label>
                        {!! Form::text('user', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingrese un usuario'
                                        ]
                                      ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="type">Tipo </label>
                        {!! Form::radio('type', 'user', $user->type == 'user' ? true : false) !!} User
                        {!! Form::radio('type', 'admin', $user->type == 'admin' ? true : false) !!} Admin
                    </div><br>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div><br>

                    <div class="form-group">
                        <label for="confirm_password">Confirmar contraseña</label>
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                    </div><br>
                    
                    <div class="form-group">
                        <label for="active">Activo</label>
                        {!! Form::checkbox('active',null, $user->active == 1 ? true : false) !!}
                    </div><br>

                    <div class="form-group">
                        {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('user.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@stop