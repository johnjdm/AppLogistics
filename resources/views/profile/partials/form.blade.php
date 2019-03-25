<div class="row">
  <div class="input-field col-md-6 {{ $errors->has('full_name_user') ? 'has-error' : ''}}">
    <i class="material-icons prefix">contacts</i>
  	{{ Form::label('full_name_user', 'Digite el Nombre Completo') }}
  	{{ Form::text('full_name_user', $dataUser['name'], ['class' => 'form-control', 'id' => 'full_name_user']) }}
    {!! $errors->first('full_name_user', '<span class="help-block">:message</span>') !!}
  </div>
  <div class="input-field col-md-6 {{ $errors->has('email_user') ? 'has-error' : ''}}">
    <i class="material-icons prefix">mail</i>
  	{{ Form::label('email_user', 'Email') }}
  	{{ Form::email('email_user', $dataUser['email'], ['class' => 'form-control', 'id' => 'email_user', 'readonly']) }}
    {!! $errors->first('email_user', '<span class="help-block">:message</span>') !!}
  </div>
</div>
<div class="row">
  <div class="input-field col-md-6 {{ $errors->has('new_password') ? 'has-error' : ''}}">
    <i class="material-icons prefix">vpn_key</i>
  	{{ Form::label('new_password', 'Digite la Nueva Contraseña') }}
  	{{ Form::password('new_password', null, ['class' => 'form-control', 'id' => 'new_password','required']) }}
    {!! $errors->first('new_password', '<span class="help-block">:message</span>') !!}
  </div>
  <div class="input-field col-md-6 {{ $errors->has('password_confirm') ? 'has-error' : ''}}">
    <i class="material-icons prefix">vpn_key</i>
  	{{ Form::label('password_confirm', 'Confirma la Contraseña') }}
  	{{ Form::password('password_confirm', null, ['class' => 'form-control', 'id' => 'password_confirm','required']) }}
    {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
  </div>
</div>
@include('partials.alert.info')
