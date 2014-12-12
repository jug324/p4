@extends ('_master')

@section('title')
Regions of Farenia
@stop

@section('content')
<p>The following is a list of the regions that make up the Farenian Unified Kingdom. Although many of the regions retain some of their independce,
	they share a head of state in the King of Farenia. Many of the regions include a diverse mix of the different races, although some races are 
	more likely to be from certain regions.</p>
<table class="table table-bordered table-condensed table-compact">
	<thead>
		<tr>
		<th class="center">Region</th>
		<th class="center">Flag</th>
		<th class="center">Description</th>
	</tr>
	</thead>
	<tbody>

@foreach($regions as $region)
<tr class="{{$region->name}}">
<td style="vertical-align:middle" class="center region">{{$region->name}}</td>
<td style="vertical-align:middle"><img src="{{$region->flag}}" height="150px"></td>
<td style="vertical-align:middle">{{$region->description}}</td>
	</tr>
	@endforeach
   </tbody>
@stop