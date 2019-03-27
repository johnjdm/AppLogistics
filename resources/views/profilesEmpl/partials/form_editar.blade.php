{{ Form::hidden('users_id', $profileEmpl['users_id'], ['id' => 'users_id']) }}
<div class="row">
  <div class="input-field col-md-6 {{ $errors->has('nombres') ? 'has-error' : ''}}">
    <i class="material-icons prefix">account_circle</i>
  	{{ Form::label('nombres', 'Digite los Nombres: ') }}
  	{{ Form::text('nombres', null, ['class' => 'form-control', 'id' => 'nombres']) }}
  </div>
</div>
<div class="row">
  <div class="input-field col-md-6 {{ $errors->has('primer_apellido') ? 'has-error' : ''}}">
    <i class="material-icons prefix">account_circle</i>
  	{{ Form::label('primer_apellido', 'Digite los Nombres: ') }}
  	{{ Form::text('primer_apellido', null, ['class' => 'form-control', 'id' => 'primer_apellido']) }}
  </div>
  <div class="input-field col-md-6 {{ $errors->has('segundo_apellido') ? 'has-error' : ''}}">
    <i class="material-icons prefix">account_circle</i>
  	{{ Form::label('segundo_apellido', 'Digite los Apellidos: ') }}
  	{{ Form::text('segundo_apellido', null, ['class' => 'form-control', 'id' => 'segundo_apellido']) }}
  </div>
</div>
<div class="row">
	<div class="input-field col-md-6 {{ $errors->has('cedula') ? 'has-error' : ''}}">
		<i class="material-icons prefix">fingerprint</i>
		{{ Form::label('cedula', 'Digite Número de Documento') }}
		{{ Form::text('cedula', null, ['class' => 'form-control', 'id' => 'cedula']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('fecha_nacimiento') ? 'has-error' : ''}}">
		{{ Form::label('fecha_nacimiento', 'Fecha de Nacimiento: ') }}
		{{ Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'id' => 'fecha_nacimiento']) }}
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('genero', 'Genero: ') }}
		{{ Form::text('genero', null, ['class' => 'form-control', 'id' => 'genero']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('fecha_ingreso') ? 'has-error' : ''}}">
		{{ Form::label('fecha_ingreso', 'Fecha de Ingreso: ') }}
		{{ Form::date('fecha_ingreso', null, ['class' => 'form-control', 'id' => 'fecha_ingreso']) }}
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('numero_empleado', 'Numero Empleado: ') }}
		{{ Form::text('numero_empleado', null, ['class' => 'form-control', 'id' => 'numero_empleado']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('cargo') ? 'has-error' : ''}}">
		{{ Form::label('cargo', 'Tipo de Cargo: ') }}
		{{ Form::text('cargo', null, ['class' => 'form-control', 'id' => 'cargo']) }}
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('jefe', 'Jefe: ') }}
		{{ Form::text('jefe', null, ['class' => 'form-control', 'id' => 'jefe']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('zona') ? 'has-error' : ''}}">
		{{ Form::label('zona', 'Zona: ') }}
		{{ Form::text('zona', null, ['class' => 'form-control', 'id' => 'zona']) }}
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6 {{ $errors->has('municipio') ? 'has-error' : ''}}">
		{{ Form::label('municipio', 'Municipio: ') }}
		{{ Form::text('municipio', null, ['class' => 'form-control', 'id' => 'municipio']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('departamento') ? 'has-error' : ''}}">
		{{ Form::label('departamento', 'Departamento: ') }}
		{{ Form::text('departamento', null, ['class' => 'form-control', 'id' => 'departamento']) }}
	</div>
</div>
<div class="row">
	<div class="form-group col-md-6 {{ $errors->has('ventas2019') ? 'has-error' : ''}}">
		{{ Form::label('ventas2019', 'Ventas 2019:') }}
		{{ Form::text('ventas2019', null, ['class' => 'form-control', 'id' => 'ventas2019']) }}
	</div>
	<div class="form-group col-md-6 {{ $errors->has('imagen') ? 'has-error' : ''}}">
		{{ Form::label('imagen', 'Imagen:') }}
		{{ Form::text('imagen', null, ['class' => 'form-control', 'id' => 'imagen']) }}
	</div>
</div>
<div class="row">
	<div class="input-field col-md-6 {{ $errors->has('cell_phone') ? 'has-error' : ''}}">
		<i class="material-icons prefix">phone_android</i>
		{{ Form::label('cell_phone', 'Teléfono Celular:') }}
		{{ Form::text('cell_phone', null, ['class' => 'form-control', 'id' => 'cell_phone']) }}
	</div>
</div>
<br><hr><br>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	<a href="{{ route('profilesEmpl.index') }}" class="waves-effect waves-light btn-small"><i class="material-icons right">reply</i>Regresar</a>
</div>
@include('partials.alert.info')
