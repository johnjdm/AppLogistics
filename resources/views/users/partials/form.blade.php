<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<h5>Lista de roles</h5>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null, ['type' => 'checked', 'class' => 'filled-in']) }}
			 		<span>
						{{ $role->name }}
						<em>({{ $role->description }})</em>
					</span>
				</label>
	    </li>
	   @endforeach
  </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	<a href="{{ route('users.index') }}" class="waves-effect waves-light btn-small"><i class="material-icons right">reply</i>Regresar</a>
</div>
@include('partials.alert.info')
