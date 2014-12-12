@extends ('_master')

@section('title')
Create New Character
@stop

@section('content')
<h1>New Student Registration</h1>
@foreach ($errors->all() as $message)
  <div class='error'>{{ $message }}</div>
@endforeach
<div class="form-compact">
{{Form::open(array('action'=> 'CharacterController@store', 'method' => 'POST'));}}
{{Form::label('first_name', 'First Name');}}
{{Form::text('first_name');}}<br>
{{Form::label('last_name', 'Last Name');}}
{{Form::text('last_name');}}<br>
{{Form::label('race', 'Character Race');}}
<select name="race" id="race">
      
      <?php
      $races = Race::all();
      foreach($races as $race) {
          echo '<option value="'.$race->id.'">'.$race->name.'</option>';

      }

      ?>
</select><small><a href="/races" target="_blank"> Information on Races</a></small><br>
{{Form::label('region', 'Home Region');}}
<select name="region" id="region">
      
      <?php
      $regions = Region::all();
      foreach($regions as $region) {
          echo '<option value="'.$region->id.'">'.$region->name.'</option>';

      }

      ?>
</select><small><a href="/regions" target="_blank"> Information on Regions</a></small><br>
{{Form::label('discipline', 'Discipline');}}
<select name="discipline" id="discipline">
      
      <?php
      $discipline = Discipline::all();
      foreach($discipline as $discipline) {
          echo '<option value="'.$discipline->id.'">'.$discipline->name.'</option>';

      }

      ?>
</select><small><a href="/disciplines" target="_blank"> Information on Disciplines</a></small><br>
{{Form::label('title', 'Title Order');}}
<select name="title" id="title">
      
      <?php
      $titles = Title::all();
      foreach($titles as $title) {
          echo '<option value="'.$title->id.'">'.$title->name.'</option>';

      }

      ?>
</select><small><a href="/orders" target="_blank"> Information on Title Orders</a></small><br>
{{Form::label('year', 'Graduation Year');}}
{{Form::selectRange('count', 990, 1010);}}<br><br>
{{Form::submit('Create New Character', array('name' => 'submit'));}}
{{Form::close();}}
</div>

@stop