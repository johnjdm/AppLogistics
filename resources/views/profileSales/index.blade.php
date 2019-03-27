@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header center">
      <h4 class="card-title">Perfiles Ventas de Empleados</h4>
    </div><br>
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <br>
        <details open>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item active"><h6><strong>Lista de Datos Personales del Empleado</strong></h6></li>
              <br>
              <li class="list-group-item">
                <h4><strong>Perfil del Usuario</strong></h4>
                <p>{{ $profileEmpl->nombres }} {{ $profileEmpl->primer_apellido }} {{ $profileEmpl->segundo_apellido }}</p>
                <p><strong>{{ $profileEmpl->numero_empleado }}</strong></p>
              </li>
              <div class="container">
                <li class="col-md-12 list-group-item"><p><strong>Foto Avatar</strong></p>
                  <figure><img src="{{ $profileEmpl->imagen}}" class="rounded mx-auto d-block img-fluid" width="200" height="170"></figure>
                  <p><strong>Cargo que Desempeña:</strong>  {{ $profileEmpl->cargo }}</p>
                  <p><strong>{{ $profileEmpl->zona }}</strong></p>
                  <p><strong>{{ $profileEmpl->municipio }}, {{ $profileEmpl->departamento }}</strong></p>
                  <p><strong>Ventas Total:</strong> {{ $sumVentas}}</p>
                </li>
              </div>
              <li class="list-group-item">
                <p><strong>Teléfono Celular:</strong>  {{ $profileEmpl->cell_phone }}</p>
                <p><strong>E-mail:</strong>  {{ $profileEmpl->cell_phone }}</p>
              </li>
              <li class="list-group-item">
                <p><strong>Fecha de Nacimiento:</strong>  {{ $profileEmpl->fecha_nacimiento }}</p>
                <p><strong>Cedula:</strong>  {{ $profileEmpl->cedula }}</p>
              </li>
              <li class="list-group-item">
                <p><strong>Fecha de Ingreso:</strong>  {{ $profileEmpl->fecha_ingreso }}</p>
                <p><strong>Jefe:</strong> </p>
              </li>
            </ul>
            <hr><br>
            <div class="panel-body">
              <table class="table-responsive table-striped table-bordered table-hover display highlight" cellspacing="0" width="100%">
                <div class="card-header center">
                  <h4 class="card-title">Subalternos</h4>
                </div><br>
                <thead class="thead-light">
                  <tr>
                    <th>Nombres</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Número del Documento</th>
                    <th>Teléfono Celular</th>
                    <th>Ventas 2019</th>
                    <th>Ver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($profileSales as $profileSale)
                  <tr>
                    <td>{{ $profileSale->nombres }}</td>
                    <td>{{ $profileSale->primer_apellido }}</td>
                    <td>{{ $profileSale->segundo_apellido }}</td>
                    <td>{{ $profileSale->cedula }}</td>
                    <td>{{ $profileSale->cell_phone }}</td>
                    <td>{{ $profileSale->ventas2019 }}</td>
                    @can('profilesEmpl.show')
                    <td width="10px">
                      <a href="{{ route('profileSales.show', $profileSale->id) }}" class="btn btn-sm cyan">
                          Ver
                      </a>
                    </td>
                    @endcan
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
            </div><br>
          </div>
        </details>
      </div>
    </div>
    @include('partials.alert.info')
  </div>
</div><br><br>
@endsection
