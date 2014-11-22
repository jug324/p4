@extends ('_master')

@section('title')
Regions of Farenia
@stop

@section('content')
<p>The following is a list of the regions that make up the Farenian Unified Kingdom. Although many of the regions retain some of their independce,
	they share a head of state in the King of Farenia. Many of the regions include a diverse mix of the different races, although some races are 
	more likely to be from certain regions.</p>
<table>
	<tr>
		<th>Region</th>
		<th>Flag</th>
		<th>Description</th>
	</tr>
	
<?php 
$regions = Region::all();
foreach($regions as $region) {
	echo '<tr><td>'.$region->name.'</td>';
	echo '<td><img src="'.$region->flag.'"height="100px"></td>';
	echo '<td>'.$region->description.'</td></tr>';
}
?>
   
@stop