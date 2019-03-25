@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="card">
      <div class="card-header center">
        <h4 class="card-title">Lista de Roles</h4>
      </div><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
                <div class="panel-heading">
                    Crear un Nuevo Rol:
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                <br>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                @can('roles.show')
                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}"
                                    class="btn btn-sm btn-info">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td width="10px">
                                    <a href="{{ route('roles.edit', $role->id) }}"
                                    class="btn btn-sm btn-success">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('roles.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id],
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
