<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['id' => 'textarea1', 'class' => 'materialize-textarea']) }}
</div>
<hr>
<h5>Permiso especial</h5>
<div class="form-group">
 	<label>{{ Form::radio('special', 'all-access', ['class' => 'with-gap', 'name' => 'group1', 'type' => 'radio']) }} <span>Acceso Total</span></label>
 	<label>{{ Form::radio('special', 'no-access', ['class' => 'with-gap', 'name' => 'group1', 'type' => 'radio']) }} <span>Ningún Acceso</span></label>
	<label>{{ Form::radio('special', '', ['class' => 'with-gap', 'name' => 'group1', 'type' => 'radio']) }} <span>Ninguno</span></label>
</div>
<hr>
<h5>Lista de permisos</h5>
<br>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
		<li>
			<label>
			{{ Form::checkbox('permissions[]', $permission->id, null, ['type' => 'checked', 'class' => 'filled-in']) }}
			<span>
			{{ $permission->name }}
	    	<em>({{ $permission->description }})</em>
			</span>
	    </label>
		</li>
		@endforeach
	</ul>
</div><br>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	<a href="{{ route('roles.index') }}" class="waves-effect waves-light btn-small"><i class="material-icons right">reply</i>Regresar</a>
</div>
@include('partials.alert.info')
