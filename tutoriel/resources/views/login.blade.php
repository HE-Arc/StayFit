@extends('template')

@section('title')
    Subscribe to StayFit
@endsection

@section('contenu')
    <div class="login-page">
		<div class="form">
			{!! Form::open(array('class'=>'register-form','url' => 'login')) !!}
			{!! $errors->has('nom') ? 'has-error' : '' !!}
			{!! Form::text('name',null,['placeholder'=>'username']) !!}
			{!! $errors->first('name', '<small class="help-block">:username error</small>') !!}
			{!! Form::password('password',['placeholder'=>'password']) !!}
			{!! $errors->first('password', '<small class="help-block">:password error</small>') !!}
			{!! Form::text('email',null,['placeholder'=>'email address']) !!}
			{!! $errors->first('email', '<small class="help-block">:email error</small>') !!}
			{!! Form::submit('Create !') !!}
			<p class="message">Already registered? <a href="#">Sign In</a></p>
			{!! Form::close() !!}
			
			
			{!! Form::open(array('class'=>'login-form','url' => 'login')) !!}
			{!! Form::text('nameLog',null,['placeholder'=>'username']) !!}
			{!! $errors->first('nameLog', '<small class="help-block">:username error</small>') !!}
			{!! Form::password('passwordLog:',['placeholder'=>'password']) !!}
			{!! $errors->first('passwordLog', '<small class="help-block">:password error</small>') !!}
			{!! Form::submit('Log In !') !!}
			<p class="message">Not registered? <a href="#">Create an account</a></p>
			{!! Form::close() !!}

		</div>
	</div>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/js-login-click.js"></script>

    
@endsection
@section('csslogin')
	<link rel="stylesheet" href="css/css-login.css">
@endsection