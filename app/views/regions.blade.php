@extends ('_master')

@section('title')
Regions of Farenia
@stop

@section('content')
<p>The following is a list of the regions that make up the Farenian Unified Kingdom. Although many of the regions retain some of their independce,
	they share a head of state in the King of Farenia. Many of the regions include a diverse mix of the different races, although some races are 
	more likely to be from certain regions.</p>
<table class="table">
	<thead>
		<tr>
		<th>Region</th>
		<th>Flag</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>

@foreach($regions as $region)
<tr>
<td class="largename">{{$region->name}}</td>
<td><img src={{$region->flag}} height="150px"></td>
<td class="compress">{{$region->description}}</td>
	</tr>
	@endforeach
   </tbody>
@stop