@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Modifica los Datos del Rol</h4>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
          <div class="card-body">
            @include('roles.partials.form')
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
