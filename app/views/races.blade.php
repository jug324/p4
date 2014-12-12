@extends ('_master')

@section('title')
Races of Farenia
@stop

@section('content')
<div class="table-compact">
	<h1>@yield('title')</h1>
<p>The continent of Farenia, along with the Archipelago, are inhabited by a diverse group of creatures.</p>
<table class="table table-bordered table-condensed table-compact">
	<tr>
		<th class="center">Race</th>
		<th class="center">Description</th>
		<th class="center">Traits</th>
	</tr>
	<tbody>
@foreach($races as $race) 
	<tr>
		<td style="vertical-align:middle" class="center race">{{$race->name}}</td>
		<td style="vertical-align:middle">{{$race->description}}</td>
		<td style="vertical-align:middle" class="center">{{$race->traits}}</td>
	</tr>

@endforeach
   </tbody>
</table>
</div>
@stop