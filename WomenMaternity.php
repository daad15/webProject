<!DOCTYPE html>
<html>
<head>
	<title>Women Maternity</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name
	$Maternity_women_in = mysqli_query($S, "SELECT * FROM womenmaternity LIMIT 6") or 
            die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>international sizes</th>
			<th>BUST IN INCH </th>
			<th>UNDER BUST IN INCH</th>
			<th>HIPS IN INCH</th>
			<th>LEG IN INCH</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Maternity_women_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mw_int']."</td>";
			echo "<td>".$row['mw_bust_in']."</td>";
			echo "<td>".$row['mw_under_bust_in']."</td>";
                        echo "<td>".$row['mw_hips_in']."</td>";
			echo "<td>".$row['mw_leg_in']."</td>";
			echo "</tr>";
		} echo "</table>";
                //query_name
	
	$Maternity_women_CM= mysqli_query($S, "SELECT * FROM womenmaternity LIMIT 6") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>international sizes</th>
			<th>BUST IN CM </th>
			<th>UNDER BUST IN CM</th>
			<th>HIPS IN CM</th>
			<th>LEG IN CM</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Maternity_women_CM, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mw_int']."</td>";
			echo "<td>".$row['mw_bust_cm']."</td>";
			echo "<td>".$row['mw_under_bust_cm']."</td>";
                        echo "<td>".$row['mw_hips_cm']."</td>";
			echo "<td>".$row['mw_leg_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
?>
</body>
</html>