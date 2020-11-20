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
		$product = mysqli_query($con,"SELECT b_age,b_height_in,b_weight_lb,b_height_cm,b_weight_kg,b_us, b_uk ,b_eur FROM baby")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>age</th>
			<th>b_height_in</th>
			<th>b_weight_lb</th>
			<th>b_height_cm</th>
			<th>b_weight_kg</th>
			<th>b_us</th>
		  <th>b_uk</th>
			<th>b_eur</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($childsize, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['b_height_in']."</td>";
			echo "<td>".$row['b_weight_lb']."</td>";
			echo "<td>".$row['b_height_cm']."</td>";
			echo "<td>".$row['b_weight_kg']."</td>";
			echo "<td>".$row['b_us']."</td>";
			echo "<td>".$row['b_uk']."</td>";
			echo "<td>".$row['b_eur']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
