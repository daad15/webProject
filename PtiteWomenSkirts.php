<!DOCTYPE html>
<html>
<head>
	<title>Ptite WOMEN skirts</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name
	
	$Ptite_WOMEN_skirts_in = mysqli_query($S,"SELECT * FROM WS LIMIT 4") or 
                                 die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> international sizes</th>
                        <th>  Eur </th>
			<th>  UK </th>
                        <th>  US </th>
                        <th>  WAIST IN INCH</th>
                        <th>  HIPS IN INCH </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Ptite_WOMEN_skirts_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
                         echo "<td>".$row['w_uk']."</td>";
                         echo "<td>".$row['w_us']."</td>";
                          echo "<td>".$row['w_waist_in']."</td>";
                         echo "<td>".$row['w_hips_in']."</td>";
			echo "</tr>";
		} echo "</table>";

	
	$Ptite_WOMEN_skirts_cm = mysqli_query($S,"SELECT * FROM WS LIMIT 4") or 
                                 die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> international sizes</th>
                        <th>  Eur </th>
			<th>  UK </th>
                        <th>  US </th>
                        <th>  WAIST IN CM</th>
                        <th>  HIPS IN CM </th>
			</tr> ";
		while ( $row = mysqli_fetch_array ($Ptite_WOMEN_skirts_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
                         echo "<td>".$row['w_uk']."</td>";
                         echo "<td>".$row['w_us']."</td>";
                          echo "<td>".$row['w_waist_cm']."</td>";
                         echo "<td>".$row['w_hips_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

              ?>
         </body>
</html>
