@extends ('_master')

@section('title')
Regions of Farenia
@stop

@section('content')
<div class="table-compact">
	<h1>@yield('title')</h1>
<p>The following is a list of the regions that make up the Farenian Unified Kingdom. Although many of the regions retain some of their independence,
	they share a head of state in the King of Farenia. Many of the regions include a diverse mix of the different races, although some races are 
	more likely to be from certain regions.</p>
<table class="table table-bordered table-condensed">
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
<td style="vertical-align:middle"><img src="{{$region->flag}}"  width="150" alt="region flag"></td>
<td style="vertical-align:middle">{{$region->description}}</td>
	</tr>
	@endforeach
   </tbody>
</table>
</div>
@stop