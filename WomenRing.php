<!DOCTYPE html>
<html>
<head>
	<title>Women Rings</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	

	$Women_Ring_in = mysqli_query($S,"SELECT * FROM Wring LIMIT 17") or 
        die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Cir in inch </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Ring_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wr_int']."</td>";
			echo "<td>".$row['wr_cir_inch']."</td>";
			echo "</tr>";
		} echo "</table>";
$Women_Ring_cm = mysqli_query($S,"SELECT * FROM Wring LIMIT 17") or 
        die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Cir in mm </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Ring_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wr_int']."</td>";
			echo "<td>".$row['wr_cir_mm']."</td>";
			echo "</tr>";
		} echo "</table>";
              ?>
         </body>
</html>