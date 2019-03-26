@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Lista de Perfiles de Empleados</h4>
    </div><br>
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <br>
        <div class="panel-heading">
          Crear un Nuevo Perfil:
          @can('profilesEmpl.create')
          <a href="{{ route('profilesEmpl.create') }}" class="btn btn-sm light-blue darken-3 pull-right">
              Crear
          </a>
          @endcan
        </div>
        <br>
        <hr><br>
        <div class="panel-body">
          <table class="table-responsive table-striped table-bordered table-hover display highlight" cellspacing="0" width="100%">
            <thead class="thead-light">
              <tr>
                <th width="50px">ID</th>
                <th>Nombres</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Número del Documento</th>
                <th>Teléfono Celular</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($profilesEmpl as $profileEmpl)
              <tr>
                <td>{{ $profileEmpl->id }}</td>
                <td>{{ $profileEmpl->nombres }}</td>
                <td>{{ $profileEmpl->primer_apellido }}</td>
                <td>{{ $profileEmpl->segundo_apellido }}</td>
                <td>{{ $profileEmpl->genero }}</td>
                <td>{{ $profileEmpl->fecha_nacimiento }}</td>
                <td>{{ $profileEmpl->cedula }}</td>
                <td>{{ $profileEmpl->cell_phone }}</td>
                @can('profilesEmpl.show')
                <td width="10px">
                  <a href="{{ route('profilesEmpl.show', $profileEmpl->id) }}" class="btn btn-sm cyan">
                      Ver
                  </a>
                </td>
                @endcan
                @can('profilesEmpl.edit')
                <td width="10px">
                  <a href="{{ route('profilesEmpl.edit', $profileEmpl->id) }}" class="btn btn-sm amber">
                      Editar
                  </a>
                </td>
                @endcan
                @can('profilesEmpl.destroy')
                <td width="10px">
                  {!! Form::open(['route' => ['profilesEmpl.destroy', $profileEmpl->id], 'method' => 'DELETE']) !!}
                    <button class="waves-effect waves-light btn-small red">
                        Eliminar
                    </button>
                  {!! Form::close() !!}
                </td>
                @endcan
              </tr>
              @endforeach
            </tbody>
          </table>
          <br><hr>
          <hr> {{ $profilesEmpl->render() }}
          <hr><br>
        </div>
      </div>
    </div>
    @include('partials.alert.info')
  </div>
</div><br><br>
@endsection
