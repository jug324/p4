<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Hewytt School of Spells and Skills')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/p4styles.css') }}" type="text/css"/>
  {{ HTML::script('js/jquery.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
  
	@yield ('head')
</head>
<body id="container">
<div class="error-page form-compact">
<img src="../images/sadface.png" >
<p>Oh no, something went wrong!<br> <a href="/">Return to the homepage.</a></p>
</div>
</body>
</html>
