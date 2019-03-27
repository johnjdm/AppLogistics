@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="card">
      <div class="card-header center">
        <h4 class="card-title">Información del Usuario Empleado</h4>
      </div>
        <div class="col-md-offset-2">
            <div class="panel panel-default">
                <details open>
                  <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item active"><h6><strong>Lista de Datos Personales del Empleado</strong></h6></li>
                    <div class="container">
                      <li class="col-md-12 list-group-item"><p><strong>Foto Avatar</strong></p>
                        <figure><img src="{{ $profileEmpl->imagen}}" class="rounded mx-auto d-block img-fluid" width="200" height="170"></figure>
                      </li>
                    </div>
                    <li class="list-group-item"><p><strong>Nombre:</strong>  {{ $profileEmpl->nombres }}</p></li>
                    <li class="list-group-item"><p><strong>Primer Apellido:</strong>  {{ $profileEmpl->primer_apellido }}</p></li>
                    <li class="list-group-item"><p><strong>Segundo Apellido:</strong>  {{ $profileEmpl->segundo_apellido }}</p></li>
                    <li class="list-group-item"><p><strong>Número de Documento:</strong>  {{ $profileEmpl->cedula }}</p></li>
                    <li class="list-group-item"><p><strong>Fecha de Nacimiento:</strong>  {{ $profileEmpl->fecha_nacimiento }}</p></li>
                    <li class="list-group-item"><p><strong>Genero:</strong>  {{ $profileEmpl->genero }}</p></li>
                    <li class="list-group-item"><p><strong>Fecha de Ingreso:</strong>  {{ $profileEmpl->fecha_ingreso }}</p></li>
                    <li class="list-group-item"><p><strong>Número de Empleado:</strong>  {{ $profileEmpl->numero_empleado }}</p></li>
                    <li class="list-group-item"><p><strong>Cargo que Desempeña:</strong>  {{ $profileEmpl->cargo }}</p></li>
                    <li class="list-group-item"><p><strong>Jefe:</strong>  {{ $profileEmpl->jefe }}</p></li>
                    <li class="list-group-item"><p><strong>Zona:</strong>  {{ $profileEmpl->zona }}</p></li>
                    <li class="list-group-item"><p><strong>Municipio:</strong>  {{ $profileEmpl->municipio }}</p></li>
                    <li class="list-group-item"><p><strong>Departamento:</strong>   {{ $profileEmpl->departamento }}</p></li>
                    <li class="list-group-item"><p><strong>Ventas 2019:</strong>  {{ $profileEmpl->ventas2019 }}</p></li>
                    <li class="list-group-item"><p><strong>Teléfono Celular:</strong>  {{ $profileEmpl->cell_phone }}</p></li>
                  </ul>
                  <br>
                  <div class="container form-group">
                    <a href="{{ route('profilesEmpl.index') }}" class="waves-effect waves-light btn-small"><i class="material-icons right">reply</i>Regresar</a>
                  </div>
                  <br>
                  </div>
                </details>
            </div>
        </div>
        </div>
      </div>
    </div>
</div><br>
@endsection
