<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Hewytt School')</title>
	<link rel="stylesheet" href="p4styles.css" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	@yield ('head')
</head>
<body id="container">
	@if(Session::get('message'))
        <div class='message'>{{ Session::get('message') }}</div>
    @endif
	<a href="/"><h1>@yield('title', 'Hewytt School')</h1></a>
	@if(Auth::check())
    <a href='/user/logout'>Log out {{ Auth::user()->email; }}</a>
@else 
    <a href='/user/signup'>Sign up</a> or <a href='/user/login'>Log in</a>
@endif
	@yield('content')

</body>
</html>