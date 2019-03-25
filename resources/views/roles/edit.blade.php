@extends('layouts.app')

@section('content')
  <br>
  <div class="container">
    <div class="card">
      <div class="card-header center">
        <h4 class="card-title">Editar el Rol</h4>
      </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
                <div class="panel-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('roles.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
