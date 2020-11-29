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
		$result = mysqli_query($con,"SELECT * FROM toddler")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Height,inches</th>
			<th>Weight, Ibs</th>
			<th>Height, cm</th>
			<th>Weight, kg</th>
			<th>US size</th>
			<th>UK size</th>
			<th>Eurp size</th>



			</tr> ";
		while ( $row = mysqli_fetch_array ($result, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['t_age']."</td>";
			echo "<td>".$row['t_height_in']."</td>";
			echo "<td>".$row['t_weight_lb']."</td>";
			echo "<td>".$row['t_height_cm']."</td>";
			echo "<td>".$row['t_weight_kg']."</td>";
			echo "<td>".$row['t_us']."</td>";
			echo "<td>".$row['t_uk']."</td>";
			echo "<td>".$row['t_eur']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
