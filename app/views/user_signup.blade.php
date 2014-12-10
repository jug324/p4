@extends ('_master')

@section('title')
New User Signup
@stop

@section('content')

@foreach ($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach
<div class="text-center">
<h2>Signup</h2>

{{ Form::open(array('url' => '/user/signup'))}}

	{{ Form::label('email')}}<br>
	{{Form::text('email')}}<br><br>

	{{Form::label('password')}}<br>
	{{Form::password('password')}}<br>
	<small>Min. 8 characters</small><br><br>
	{{Form::submit('Sign up', array('class' => 'btn-primary'))}}

	{{Form::close()}}
</div>
@stop