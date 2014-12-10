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

{{ Form::close() }}
</div>
@stop