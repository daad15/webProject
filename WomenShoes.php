<!DOCTYPE html>
<html>
<head>
	<title>Women shoes</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	


	$Women_shoes_in = mysqli_query($S, "SELECT * FROM women_shoes LIMIT 16") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> women shoes size EUR</th>
			<th>  UK </th>
                        <th>  US </th>
                        <th>  FEET IN INCH </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_shoes_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wsh_eur']."</td>";
			echo "<td>".$row['wsh_uk']."</td>";
                         echo "<td>".$row['wsh_us']."</td>";
                         echo "<td>".$row['wsh_feet_in']."</td>";
			echo "</tr>";
		} echo "</table>";

	$Women_shoes_cm = mysqli_query($S, "SELECT * FROM women_shoes LIMIT 16") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> women shoes size EUR</th>
			<th>  UK </th>
                        <th>  US </th>
                        <th>  FEET IN CM </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_shoes_cm, MYSQLI_ASSOC) )
		{
		echo "<tr>";
			echo "<td>".$row['wsh_eur']."</td>";
			echo "<td>".$row['wsh_uk']."</td>";
                         echo "<td>".$row['wsh_us']."</td>";
                         echo "<td>".$row['wsh_feet_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
              ?>
         </body>
</html>