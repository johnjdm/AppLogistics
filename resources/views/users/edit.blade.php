@extends('layouts.app')

@section('content')
<br>
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Modifica los Datos</h4>
    </div>
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
          <div class="card-body">
            @include('users.partials.form')
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
