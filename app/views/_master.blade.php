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
	@if(Session::get('message'))
        <div class='alert alert-danger'>{{ Session::get('message') }}</div>
    @endif
	<h1 class="small-caps"><a href="/">Hewytt School of Spells and Skills</a></h1>
   	
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="logo" href="/"> </a>
    
    </div>
    <div class="collapse  navbar-collapse small-caps" id="bs-example-navbar-collapse-1">
      <ul class="nav  navbar-nav">
        <li><a href="/school">Student Directory</a></li>
        <li><a href="/orders">Title Orders</a></li>
        <li><a href="/races">Races</a></li>
        <li><a href="/disciplines">Disciplines</a></li>
        <li><a href="/regions">Regions</a></li>
        <li><a href="/characters">Your Characters</a></li>
            <li><a href="/create">Create NEW Character</a></li>
        
       </ul>
       <p class="navbar-text navbar-right">
@if(Auth::check())
    
    	<a href='/user/logout'>Log out {{ Auth::user()->email; }}</a>
    
@else 
    
    	<a href='/user/signup'>Sign up</a> | <a href='/user/login'>Log in</a>
    

@endif
       </p>
    </div>
</div>
</nav>


	@yield('content')

</body>
</html>