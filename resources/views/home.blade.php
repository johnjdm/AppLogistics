@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Inicio sesión satisfactoriamente.</h2><br>
                    <h2>Estás conectado en el Aplicativo!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
