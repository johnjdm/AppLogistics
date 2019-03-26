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
                <th>User</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Número del Documento</th>
                <th>Teléfono Celular</th>
                <th>Email</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
          <br><hr>
          <hr>
          <hr><br>
        </div>
      </div>
    </div>
    @include('partials.alert.info')
  </div>
</div><br><br>
@endsection
