@extends('admin.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-users icon-home"></i> USUARIOS <a href="{{ route('user.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>  Usuario</a></h1>
    </div><br>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Tipo</th>
                        <th>Activo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                           <td><a href="{{ route('user.edit', $user) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a></td>
                           <td>
                               {!! Form::open(['route'=>array('user.destroy', $user)]) !!}
                               <input type="hidden" name="_method" value="DELETE">
                               <button onClick="return confirm('Eliminar usuario ?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                               {!! Form::close() !!}
                           </td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->last_name }}</td>
                           <td>{{ $user->user }}</td>
                           <td>{{ $user->email}}</td>
                           <td>{{ $user->type }}</td>
                           <td>{{ $user->active == 1 ? "Sí" : "No"}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <br>
        {{-- Paginación --}}
        <div>
            {{ $users->links() }}
        </div>
        
    </div>

</div>

@stop