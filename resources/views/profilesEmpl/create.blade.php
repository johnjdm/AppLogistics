@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h2>Perfil Empleado</h2>
      <h4 class="card-title">Ingresa los Datos Personales</h4>
    </div>
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="box box-primary">
            <div class="box-header s12">
              {{ Form::open(['route' => 'profilesEmpl.store', 'files' => true]) }}
              <div class="card-body">
                @include('profilesEmpl.partials.form')
              </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
