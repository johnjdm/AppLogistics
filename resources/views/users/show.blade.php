@extends('layouts.app')

@section('content')
<br>
<div class="container"><br>
    <div class="card">
      <div class="card-header center">
        <h4 class="card-title">Información del Usuario</h4>
      </div>
      <div class="card-body">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <p><strong>Nombre: </strong>   {{ $user->name }}</p>
              <p><strong>Email: </strong>    {{ $user->email }}</p>
              @if(count($role) == 1)
                <p><strong>Rol: </strong>    {{ $role[0]->name }}</p>
              @else
                <strong class="text-danger">Asignarle Rol al Usuario</strong>
              @endif
            </div>
          </div><br>
          <div class="form-group">
            <a href="{{ route('users.index') }}" class="btn btn-outline-secondary"></i>Regresar</a>
          </div>
        </div>
      </div>
    </div>
</div>
<br>
@endsection
