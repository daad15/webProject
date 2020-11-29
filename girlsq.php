<!DOCTYPE html>
<html>
<head>
	<title>TEST QUERY</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$con = mysqli_connect("localhost","root","","childsize")
		or die ( mysqli_connect_error());
	//query_name
		$result = mysqli_query($con,"SELECT * FROM ch_girl")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>Inche Height </th>
			<th>Inches chest</th>
			<th>Inche Waist</th>
			<th>Inche Hips</th>
			<th>Cm Height </th>
			<th>Cm chest</th>
			<th>Cm Waist</th>
			<th>Cm Hips</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>



			</tr> ";
		while ( $row = mysqli_fetch_array ($result, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['g_height_in']."</td>";
			echo "<td>".$row['g_chest_in']."</td>";
			echo "<td>".$row['g_waist_in']."</td>";
			echo "<td>".$row['g_hips_in']."</td>";
			echo "<td>".$row['g_height_cm']."</td>";
			echo "<td>".$row['g_chest_cm']."</td>";
			echo "<td>".$row['g_waist_cm']."</td>";
			echo "<td>".$row['g_hips_cm']."</td>";
			echo "<td>".$row['g_us']."</td>";
			echo "<td>".$row['g_uk']."</td>";
			echo "<td>".$row['g_eur']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
