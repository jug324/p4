@extends ('_master')

@section('title')
Character Update
@stop

@section('content')
<h1>Change Student Registration</h1>
<h2>{{$character->first_name}} {{$character->last_name}}</h2>
{{Form::open(array('action'=> 'CharacterController@update', 'method' => 'POST'));}}
<input type="hidden" name="id" value="{{ $character->id }}">

{{Form::label('race', 'Character race');}}
<select name="race" id="race">
      <?php
      $races = Race::all();
      echo '<option selected="selected" value="'.$character->race->id.'">'.$character->race->name.'</option>';
      foreach($races as $race) {
          echo '<option value="'.$race->id.'">'.$race->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('region', 'Home Region');}}
<select name="region" id="region">
      <?php
      $regions = Region::all();
      echo '<option selected="selected" value="'.$character->region->id.'">'.$character->region->name.'</option>';
      foreach($regions as $region) {
          echo '<option value="'.$region->id.'">'.$region->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('discipline', 'Discipline');}}
<select name="discipline" id="discipline">
      <?php
      $discipline = Discipline::all();
      echo '<option selected="selected" value="'.$character->discipline->id.'">'.$character->discipline->name.'</option>';
      foreach($discipline as $discipline) {
          echo '<option value="'.$discipline->id.'">'.$discipline->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('title', 'Title Order');}}
<select name="title" id="title">
      <?php
      $titles = Title::all();
      echo '<option selected="selected" value="'.$character->title->id.'">'.$character->title->name.'</option>';
      foreach($titles as $title) {
        echo '<option value="'.$title->id.'">'.$title->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('count', 'Graduation Year');}}
{{Form::selectRange('count', 990, 1010, $character->graduated);}}<br>
{{Form::submit('Update Character', array('name' => 'submit'));}}<br>
{{Form::close();}}


@stop