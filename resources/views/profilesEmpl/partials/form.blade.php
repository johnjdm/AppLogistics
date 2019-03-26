<div class="row">
	<div class="form-group col-md-6 {{ $errors->has('user_id') ? 'has-error' : ''}}">
		{{ Form::label('users_id', 'Relacion con la session: ') }}
		{{ Form::select('users_id', $users, null, ['class' => 'form-control', 'id' => 'users_id']) }}
	</div>
</div>
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
		{{ Form::label('primer_apellido', 'Digite el Primer Apellido: ') }}
		{{ Form::text('primer_apellido', null, ['class' => 'form-control', 'id' => 'primer_apellido']) }}
	</div>
	<div class="input-field col-md-6 {{ $errors->has('segundo_apellido') ? 'has-error' : ''}}">
		<i class="material-icons prefix">account_circle</i>
		{{ Form::label('segundo_apellido', 'Digite el Segundo Apellido: ') }}
		{{ Form::text('segundo_apellido', null, ['class' => 'form-control', 'id' => 'segundo_apellido']) }}
	</div>
</div>
<br><hr><br>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	<a href="{{ route('profilesEmpl.index') }}" class="waves-effect waves-light btn-small"><i class="material-icons right">reply</i>Regresar</a>
</div>
<br>
@include('partials.alert.info')
