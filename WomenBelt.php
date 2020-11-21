 <!DOCTYPE html>
<html>
<head>
	<title>Women Belt</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	
	$Women_Belt_in = mysqli_query($S, "SELECT * FROM WBELT LIMIT 5") or 
        die( mysqli_connect_error()); ;
	//print query_name result
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Waist in inch </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Belt_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wb_int']."</td>";
			echo "<td>".$row['wb_waist_in']."</td>";
			echo "</tr>";
		} echo "</table>";
$Women_Belt_cm = mysqli_query($S, "SELECT * FROM WBELT LIMIT 5") or 
        die( mysqli_connect_error()); ;
	//print query_name result
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Waist in cm </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Belt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wb_int']."</td>";
			echo "<td>".$row['wb_waist_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
              ?>
         </body>
</html>