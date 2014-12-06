@extends ('_master')

@section('title')
{{$character->first_name}} {{$character->last_name}}
@stop

@section('content')
<p>{{$character->first_name}} {{$character->last_name}} is a {{$character->race->name}} hailing from the {{$character->region->name}} Region. After attending the Hewytt School, they graduated with a specialty of
	{{$character->discipline->name}} and received the Title Order of {{$character->title->name}}.

</p>

@stop
