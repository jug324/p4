@extends ('_master')

@section('title')
New User Signup
@stop

@section('content')

@foreach ($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach

{{ Form::open(array('url' => '/user/signup'))}}

	{{ Form::label('email')}}
	{{Form::text('email')}}

	{{Form::label('password')}}
	{{Form::password('password')}}
	<small>Min. 8 characters</small>

	{{Form::submit('Submit')}}

	{{Form::close()}}
@stop