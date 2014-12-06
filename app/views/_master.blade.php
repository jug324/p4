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
	<h1>@yield('title', 'Hewytt School')</h1>
	@yield('content')

</body>
</html>