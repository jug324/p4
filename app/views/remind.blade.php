@extends ('_master')

@section('title')
Reset Password
@stop


@section('content')
<div class="text-center">
<h2>Reset Your Password</h2><br>
@foreach ($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach
 <p class="text-center">Enter your email address. An email will be sent to you with instructions for resetting your password.</p>
{{ Form::open(array('route' => 'request')) }}
 
  {{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}<br><br>
 
  {{ Form::submit('Reset Password') }}
 
{{ Form::close() }}
</div>

@stop