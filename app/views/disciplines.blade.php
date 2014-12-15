@extends ('_master')

@section('title')
Discipline Specialties
@stop

@section('content')
<div class="table-compact">
	<h1>@yield('title')</h1>
<p>Each student of the Hewytt School focuses on at least one of the following disciplines of study.</p>
<table class="table table-bordered table-condensed ">
	<tr>
		<th class="center">Discipline</th>
		<th class="center">Description</th>
	</tr>
	<tbody>
@foreach($discipline as $discipline)
	<tr class="{{$discipline->name}} center">
		<td style="vertical-align:middle" class="discipline">{{$discipline->name}}</td>
		<td>{{$discipline->description}}</td>
	</tr>

@endforeach
   </tbody>
</table>
</div>
@stop