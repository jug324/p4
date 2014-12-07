@extends ('_master')

@section('title')
Login
@stop


@section('content')

<h1>Log in</h1>

{{ Form::open(array('url' => '/user/login')) }}

    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

@stop