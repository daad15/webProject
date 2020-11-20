<!DOCTYPE html>
<html>
<head>
	<title>TEST QUERY</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$con = mysqli_connect("localhost","root","","baby")
		or die ( mysqli_connect_error());
	//query_name
		$ruslt = mysqli_query($con,"SELECT * FROM baby_beany")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>bb_age</th>
			<th>bb_head_in</th>
			<th>bb_head_cm</th>
			<th>bb_int</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($ruslt, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_in']."</td>";
			echo "<td>".$row['bb_head_cm']."</td>";
			echo "<td>".$row['>bb_int']."</td>";


			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
