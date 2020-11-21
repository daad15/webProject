<!DOCTYPE html>
<html>
<head>
	<title>Women Abaya</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	$Women_Abaya_in = mysqli_query($S, "SELECT * FROM WA LIMIT 5") or 
                        die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Abaya sizes</th>
			<th>lenght IN INCH </th>
			<th>width IN INCH</th>
			<th>sleeve IN INCH</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Abaya_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wa_size']."</td>";
			echo "<td>".$row['wa_length_in']."</td>";
			echo "<td>".$row['wa_width_in']."</td>";
                        echo "<td>".$row['wa_sleeve_in']."</td>";
			echo "</tr>";
		} echo "</table>";
                //query_name
	
	$Women_Abaya_cm= mysqli_query($S, "SELECT * FROM WA LIMIT 5") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Abaya sizes</th>
			<th>lenght IN CM </th>
			<th>width IN CM</th>
			<th>sleeve IN CM</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Abaya_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wa_size']."</td>";
			echo "<td>".$row['wa_length_cm']."</td>";
			echo "<td>".$row['wa_width_cm']."</td>";
                        echo "<td>".$row['wa_sleeve_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
?>
</body>
</html>