<!DOCTYPE html>
<html>
<head>
	<title>Women underwear</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	
	$Women_Panties_in = mysqli_query($S,"SELECT * FROM WPANTIES LIMIT 8") or 
                            die( mysqli_connect_error() );
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Pantes sizes</th>
			<th>Waist in inch </th>
			<th>Hips IN INCH</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Panties_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wp_size']."</td>";
			echo "<td>".$row['wp_waist_in']."</td>";
			echo "<td>".$row['wp_hips_in']."</td>";
			echo "</tr>";
		} echo "</table>";
                //query_name
	
	$Women_Panties_cm = mysqli_query($S, "SELECT * FROM WPANTIES LIMIT 8") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Pantes sizes</th>
			<th>Waist in CM  </th>
			<th>Hips IN CM </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_Panties_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wp_size']."</td>";
			echo "<td>".$row['wp_waist_cm']."</td>";
			echo "<td>".$row['wp_hips_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
?>
</body>
</html>