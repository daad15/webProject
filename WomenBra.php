<!DOCTYPE html>
<html>
<head>
	<title>Women BRA</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name

	$Women_bra_in = mysqli_query($S, "SELECT * FROM Wbra LIMIT 36") or 
                        die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Bra sizes</th>
			<th>underbust in inch  </th>
			<th>Cup size</th>
			<th>overbust IN INCH</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_bra_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wbra_size']."</td>";
			echo "<td>".$row['wbra_underbust_in']."</td>";
			echo "<td>".$row['cup_size']."</td>";
                        echo "<td>".$row['overbust_in']."</td>";
			echo "</tr>";
		} echo "</table>";
                //query_name
	
	$Women_bra_cm = mysqli_query($S, "SELECT * FROM Wbra LIMIT 36") or 
                           die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th>Women Bra sizes</th>
			<th> under bust IN CM </th>
			<th>cup size</th>
			<th>Overbust IN CM</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Women_bra_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wbra_size']."</td>";
			echo "<td>".$row['wbra_underbust_cm']."</td>";
			echo "<td>".$row['cup_size']."</td>";
                        echo "<td>".$row['overbust_cm']."</td>";
			echo "</tr>";
			echo "</tr>";
		} echo "</table>";
?>
</body>
</html>