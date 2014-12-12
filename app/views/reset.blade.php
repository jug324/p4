@extends ('_master')

@section('title')
New Password
@stop


@section('content')
<div class="text-center">
<h2>Create A New Password</h2><br>

@foreach ($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach
 <div class="form-compact">
{{ Form::open(array('route' => array('update', $token))) }}
 
  {{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}<br>
 
  {{ Form::label('password', 'Password') }}
  {{ Form::password('password') }}<br>
 
  {{ Form::label('password_confirmation', 'Password confirm') }}
  {{ Form::password('password_confirmation') }}<br><br>
 
  {{ Form::hidden('token', $token) }}
 
  {{ Form::submit('Create New Password') }}
 
{{ Form::close() }}
</div>
</div>
@stop