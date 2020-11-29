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
		$result = mysqli_query($con,"SELECT * FROM ch_shoes")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Foot Height </th>
			<th>Foot CM</th>
		  <th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>Size Jp</th>



			</tr> ";
		while ( $row = mysqli_fetch_array ($result, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['chsh_age']."</td>";
			echo "<td>".$row['chsh_feet_in']."</td>";
			echo "<td>".$row['chsh_feet_cm']."</td>";
			echo "<td>".$row['chsh_us']."</td>";
			echo "<td>".$row['chsh_uk']."</td>";
			echo "<td>".$row['chsh_eur']."</td>";
			echo "<td>".$row['chsh_jp']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
