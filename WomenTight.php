<!DOCTYPE html>
<html>
<head>
	<title>Women Tight</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	
	
	$WomenTight = mysqli_query($S, "SELECT * FROM Wtight LIMIT 5") or 
                      die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>international size</th>
			<th>hips in inch </th>
			<th>Hips IN CM</th>
                        <th>hight in inch</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($WomenTight, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wt_int']."</td>";
			echo "<td>".$row['wt_hips_in']."</td>";
			echo "<td>".$row['wt_hips_cm']."</td>";
                        echo "<td>".$row['wt_hight_in']."</td>";
			echo "</tr>";
		} echo "</table>";
              ?>
         </body>
</html>