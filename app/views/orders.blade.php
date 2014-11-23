@extends ('_master')

@section('title')
Title Orders of Hewytt
@stop

@section('content')
<p>The Title Orders of Hewytt are honors bestowed upon graduates of the Hewytt School who complete the entirety of at least one discipline, or about eight years of study.</p>
<table>
	<tr>
		<th>Order</th>
		<th>Shield</th>
		<th>Description</th>
	</tr>
	
<?php 
$regions = Title::all();
foreach($regions as $title) {
	echo '<tr><td>'.$title->name.'</td>';
	echo '<td><img src="'.$title->flag.'"height="100px"></td>';
	echo '<td>'.$title->description.'</td></tr>';
}
?>
   
@stop