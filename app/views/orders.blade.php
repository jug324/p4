@extends ('_master')

@section('title')
Title Orders of Hewytt
@stop

@section('content')
<div class="table-compact">
	<h1>@yield('title')</h1>
<p>The Title Orders of Hewytt are honors bestowed upon graduates of the Hewytt School who complete the entirety of at least one discipline, or about eight years of study.</p>
<table class="table table-bordered table-condensed Orders">
	<tr>
		<th class="center">Order</th>
		<th class="center">Shield</th>
		<th class="center">Description</th>
	</tr>
	
<tbody>
@foreach($titles as $title)
	<tr>
		<td style="vertical-align:middle" class="center {{$title->name}}">{{$title->name}}</td>
		<td style="vertical-align:middle"><img src="{{$title->flag}}" width="150" alt="title shield"></td>
		<td style="vertical-align:middle">{{$title->description}}</td>
	</tr>

@endforeach
</tbody>
</table>
</div>
   
@stop