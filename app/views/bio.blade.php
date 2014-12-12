@extends ('_master')

@section('title')
{{$character->first_name}} {{$character->last_name}}
@stop

@section('content')
<div class="table-compact">

<p>{{$character->first_name}} {{$character->last_name}} is a {{$character->race->name}} hailing from the {{$character->region->name}} Region.
After attending the Hewytt School, they graduated in {{$character->graduated}} with a specialty of
	{{$character->discipline->name}}. They received the Title Order of {{$character->title->name}}.

</p>

<div class="pull-left center">
<p class="center">{{$character->region->name}} Native</p>
<img src="../{{$character->region->flag}}" height="150px">
</div>
<div class="pull-right center">
<p class="center">Proud Member of the {{$character->title->name}} Order</p>
<img src="../{{$character->title->flag}}" height="150px">
</div>
<div class="defloat">
<br><br>
<p><a href="/characters">Return to your characters</a> | <a href="/school">Return to student directory</a></p>
</div>
</div>

@stop
