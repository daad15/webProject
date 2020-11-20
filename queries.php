<!DOCTYPE html>
<html>
<head>
	<title>TEST QUERY</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php 
	//connection
		$con = mysqli_connect("localhost","root","","products")
		or die ( mysqli_connect_error());
	//query_name 
		$product = mysqli_query($con,"SELECT P_name , P_price FROM products_info")
		or die ( mysqli_connect_error()); 
	//print query_name result
		echo "<table> 
			<tr>
			<th>Product Name</th>
			<th>Price</th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($product, MYSQLI_ASSOC) )
		{	
			echo "<tr>";
			echo "<td>".$row['P_name']."</td>";
			echo "<td>".$row['P_price']."</td>";
			echo "</tr>";
		} echo "</table>";


	 ?>
</body>
</html>
