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
		$result = mysqli_query($con,"SELECT * FROM baby_beany")
		or die ( mysqli_connect_error());
	//print query_name result
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Head circumference ,inches</th>
			<th>Head circumference ,cm</th>
			<th>Size</th>


			</tr> ";
		while ( $row = mysqli_fetch_array ($result, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_in']."</td>";
			echo "<td>".$row['bb_head_cm']."</td>";
			echo "<td>".$row['bb_int']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
