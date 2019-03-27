@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h2>Perfil Empleado</h2>
      <h4 class="card-title">Modifica los Datos</h4>
    </div>
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($profileEmpl, ['route' => ['profilesEmpl.update', $profileEmpl->id], 'method' => 'PUT']) !!}
          <div class="card-body">
            @include('profilesEmpl.partials.form_editar')
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
