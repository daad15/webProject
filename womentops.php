<!DOCTYPE html>
<html>
<head>
	<title> WOMEN TOPS</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php
	//connection
		$S = mysqli_connect("localhost","root" ,"","WSDB")
                     or die( mysqli_connect_error() );
	//query_name
	$women_tops_in = mysqli_query($S, "SELECT * FROM WS LIMIT 8 OFFSET 2") or 
                        die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> international sizes</th>
                        <th>  Eur </th>
			<th>  UK </th>
                        <th>  US </th>
                       <th> bust IN inch</th>
                        <th>  WAIST IN INCH</th>
                        <th> HIPS IN INCH </th>
                         
			</tr> ";
		while ( $row = mysqli_fetch_array ($women_tops_in, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
                         echo "<td>".$row['w_uk']."</td>";
                         echo "<td>".$row['w_us']."</td>";
                          echo "<td>".$row['w_bust_in']."</td>";
                          echo "<td>".$row['w_waist_in']."</td>";
                         echo "<td>".$row['w_hips_in']."</td>";
                         
			echo "</tr>";
		} echo "</table>";

	
	$women_tops_cm = mysqli_query($S,"SELECT * FROM WS LIMIT 8 OFFSET 2") or 
                                 die( mysqli_connect_error()); 
	//print query_name result
		echo "<table>
			<tr>
			<th> international sizes</th>
                        <th>  Eur </th>
			<th>  UK </th>
                        <th>  US </th>
                         <th> bust IN cm</th>
                        <th>  WAIST IN cm</th>
                        <th> HIPS IN cm </th>
                          
			</tr> ";
		while ( $row = mysqli_fetch_array ($women_tops_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
                         echo "<td>".$row['w_uk']."</td>";
                         echo "<td>".$row['w_us']."</td>";
                          echo "<td>".$row['w_bust_cm']."</td>";
                          echo "<td>".$row['w_waist_cm']."</td>";
                         echo "<td>".$row['w_hips_cm']."</td>";
   
			echo "</tr>";
		} echo "</table>";

              ?>
         </body>
</html>
