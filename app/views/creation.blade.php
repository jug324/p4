@extends ('_master')

@section('title')
Create New Character
@stop

@section('content')
<h1>New Student Registration</h1>
{{Form::open(array('action'=> 'CharacterController@store', 'method' => 'POST'));}}
{{Form::label('name', 'First Name');}}
{{Form::text('name');}}
{{Form::label('last', 'Last Name');}}
{{Form::text('last');}}<br>
{{Form::label('race', 'Character race');}}
<select name="race" id="race">
      <option>Choose Race</option>
      <?php
      $races = Race::all();
      foreach($races as $race) {
          echo '<option value="'.$race->id.'">'.$race->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('region', 'Home Region');}}
<select name="region" id="region">
      <option>Choose Region</option>
      <?php
      $regions = Region::all();
      foreach($regions as $region) {
          echo '<option value="'.$region->id.'">'.$region->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('discipline', 'Discipline');}}
<select name="discipline" id="discipline">
      <option>Choose Discipline</option>
      <?php
      $discipline = Discipline::all();
      foreach($discipline as $discipline) {
          echo '<option value="'.$discipline->id.'">'.$discipline->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('title', 'Title Order');}}
<select name="title" id="title">
      <option>Title Order</option>
      <?php
      $titles = Title::all();
      foreach($titles as $title) {
          echo '<option value="'.$title->id.'">'.$title->name.'</option>';

      }

      ?>
</select><br>
{{Form::label('year', 'Graduation Year');}}
{{Form::selectRange('count', 990, 1010);}}<br>
{{Form::submit('Create New Character', array('name' => 'submit'));}}<br>


@stop