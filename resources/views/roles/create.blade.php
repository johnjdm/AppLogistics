@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Ingresa los Datos</h4>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="box-header">
            {{ Form::open(['route' => 'roles.store']) }}
            <div class="card-body">
              @include('roles.partials.form')
            </div>
             {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br>
@endsection
