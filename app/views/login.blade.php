@extends ('_master')

@section('title')
Login
@stop


@section('content')
<div class="text-center">
<h2>Login</h2>

{{ Form::open(array('url' => '/user/login')) }}

    {{ Form::label('email')}}<br>
    {{ Form::text('email') }}<br><br>

    {{Form::label('password')}}<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Login', array('class' => 'btn-primary')) }}

{{ Form::close() }}<br>
<p class="text-center">Not yet a member? <a href="/user/signup">Sign up!</a></p>
<br>
<p class="text-center">Forget your password? <a href="/password/reset">Reset it.</a></p>
</div>
@stop