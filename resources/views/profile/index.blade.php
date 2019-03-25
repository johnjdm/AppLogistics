@extends('layouts.app')

@section('content')
  <!-- Esta Seccion Actualiza (Update) el Usuario del primer form -->
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Actualiza tus Datos de Usuario</h4>
    </div><br>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <form id="form" action="profile/updateUser" method="GET">
            @csrf
            <div class="card-body">
                @include('profile.partials.form')
            </div>
          </form>
          <div class="form-group">
            <button id="update" class="btn waves-effect waves-light">Actualizar
              <i class="material-icons right">autorenew</i>
            </button>
          </div><br>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Actualiza tus Datos Personales</h4>
    </div><br>

  </div>
</div>
<br>
<!-- Esta Seccion JavaScript, Actualiza (Update) el Usuario del primer form -->
@include('profile.javascript_updateUser')

@endsection
