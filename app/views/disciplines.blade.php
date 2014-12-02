@extends ('_master')

@section('title')
Discipline Specialties
@stop

@section('content')
<p>Each student of the Hewytt School focuses on one of the following disciplines of study.</p>
<table>
	<tr>
		<th>Discipline</th>
		<th>Description</th>
	</tr>
	
<?php 
$discipline = Discipline::all();
foreach($discipline as $discipline) {
	echo '<tr><td>'.$discipline->name.'</td>';
	echo '<td>'.$discipline->description.'</td></tr>';
}
?>
   
@stop