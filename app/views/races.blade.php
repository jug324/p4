@extends ('_master')

@section('title')
Races of Farenia
@stop

@section('content')
<p>The continent of Farenia, along with the Archipelago, are inhabited by a diverse group of creatures.</p>
<table>
	<tr>
		<th>Race</th>
		<th>Description</th>
		<th>Traits</th>
	</tr>
	
<?php 
$races = Race::all();
foreach($races as $race) {
	echo '<tr><td>'.$race->name.'</td>';
	echo '<td>'.$race->description.'</td>';
	echo '<td>'.$race->traits.'</td></tr>';
}
?>
   
@stop