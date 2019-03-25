@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header center">
            <h4 class="card-title">Información del Rol</h4>
        </div>
        <div class="card-body">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p><strong>Nombre</strong> {{ $role->name }}</p>
                        <p><strong>Slug</strong> {{ $role->slug }}</p>
                        <p><strong>Descripción</strong> {{ $role->description }}</p>
                    </div>
                </div><br>
                <div class="form-group">
                  <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary"></i>Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
