<!DOCTYPE html>
<html>
<head>
	<title>Suize Guide</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>

<?php 
	//connection
	$con = mysqli_connect("localhost","root","","size_guide")
	or die ( mysqli_connect_error());

//						 *************	Children Size 	**************
//QUERY: baby (cm) 
		$baby_cm = mysqli_query($con,
			"SELECT bb_age,bb_head_cm,bb_int 
			FROM baby_beany")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>age</th>
			<th>head circumference,cm</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($baby_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_cm']."</td>";
			echo "<td>".$row['bb_int']."</td>";
			echo "</tr>";
		} echo "</table>";
		
//QUERY: baby (inch) 
		$baby_inch = mysqli_query($con,
			"SELECT bb_age,bb_head_in,bb_int 
			FROM baby_beany")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>age</th>
			<th>head circumference,inch</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($baby_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_in']."</td>";
			echo "<td>".$row['bb_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: babay beany (cm) 
		$baby_beany_cm = mysqli_query($con,
			"SELECT bb_age,bb_head_cm,bb_int 
			FROM baby_beany")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Head circumference ,cm</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($baby_beany_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_cm']."</td>";
			echo "<td>".$row['bb_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: babay beany (inch) 
		$baby_beany_inch = mysqli_query($con,
			"SELECT bb_age,bb_head_in,bb_int  
			FROM baby_beany")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Head circumference ,inches</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($baby_beany_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['bb_age']."</td>";
			echo "<td>".$row['bb_head_in']."</td>";
			echo "<td>".$row['bb_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: toddler (cm) 
		$toddler_cm = mysqli_query($con,
			"SELECT t_age,t_height_cm,t_weight_kg,t_us,t_uk,t_eur 
			FROM toddler")
		or die ( mysqli_connect_error());
	// header 
		echo "<table>
			<tr>
			<th>age</th>
			<th>Height, cm</th>
			<th>Weight, kg</th>
			<th>US size</th>
			<th>UK size</th>
			<th>Eurp size</th>
			</tr> ";
	//  result
		while ( $row = mysqli_fetch_array ($toddler_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['t_age']."</td>";
			echo "<td>".$row['t_height_cm']."</td>";
			echo "<td>".$row['t_weight_kg']."</td>";
			echo "<td>".$row['t_us']."</td>";
			echo "<td>".$row['t_uk']."</td>";
			echo "<td>".$row['t_eur']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: toddler (inch) 
		$toddler_inch = mysqli_query($con,
			"SELECT t_age,t_height_in,t_weight_lb,t_us,t_uk,t_eur 
			FROM toddler")
		or die ( mysqli_connect_error());
	// header 
		echo "<table>
			<tr>
			<th>age</th>
			<th>Height,inches</th>
			<th>Weight, Ibs</th>
			<th>US size</th>
			<th>UK size</th>
			<th>Eurp size</th>
			</tr> ";
	//  result
		while ( $row = mysqli_fetch_array ($toddler_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['t_age']."</td>";
			echo "<td>".$row['t_height_in']."</td>";
			echo "<td>".$row['t_weight_lb']."</td>";
			echo "<td>".$row['t_us']."</td>";
			echo "<td>".$row['t_uk']."</td>";
			echo "<td>".$row['t_eur']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: boys (cm) 
		$boy_cm = mysqli_query($con,
			"SELECT b_height_cm,b_chest_cm,b_waist_cm,b_hips_cm,b_us,b_uk,b_eur,b_int  
			FROM ch_boy")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Cm Height </th>
			<th>Cm chest</th>
			<th>Cm Waist</th>
			<th>Cm Hips</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>international Size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($boy_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['b_height_cm']."</td>";
			echo "<td>".$row['b_chest_cm']."</td>";
			echo "<td>".$row['b_waist_cm']."</td>";
			echo "<td>".$row['b_hips_cm']."</td>";
			echo "<td>".$row['b_us']."</td>";
			echo "<td>".$row['b_uk']."</td>";
			echo "<td>".$row['b_eur']."</td>";
			echo "<td>".$row['b_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: boys (inch) 
		$boy_inch = mysqli_query($con,
			"SELECT b_height_in,b_chest_in,b_waist_in,b_hips_in,b_us,b_uk,b_eur,b_int 
			FROM ch_boy")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Inche Height </th>
			<th>Inche chest</th>
			<th>Inche Waist</th>
			<th>Inche Hips</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>international Size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($boy_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['b_height_in']."</td>";
			echo "<td>".$row['b_chest_in']."</td>";
			echo "<td>".$row['b_waist_in']."</td>";
			echo "<td>".$row['b_hips_in']."</td>";
			echo "<td>".$row['b_us']."</td>";
			echo "<td>".$row['b_uk']."</td>";
			echo "<td>".$row['b_eur']."</td>";
			echo "<td>".$row['b_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: girls (cm) 
		$girl_cm = mysqli_query($con,
			"SELECT g_height_cm,g_chest_cm,g_waist_cm,g_hips_cm,g_us,g_uk,g_eur,g_int
			FROM ch_girl")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Cm Height </th>
			<th>Cm chest</th>
			<th>Cm Waist</th>
			<th>Cm Hips</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>international Size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($girl_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['g_height_cm']."</td>";
			echo "<td>".$row['g_chest_cm']."</td>";
			echo "<td>".$row['g_waist_cm']."</td>";
			echo "<td>".$row['g_hips_cm']."</td>";
			echo "<td>".$row['g_us']."</td>";
			echo "<td>".$row['g_uk']."</td>";
			echo "<td>".$row['g_eur']."</td>";
			echo "<td>".$row['g_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: girls (inch) 
		$girl_inch = mysqli_query($con,
			"SELECT g_height_in,g_chest_in,g_waist_in,g_hips_in,g_us,g_uk,g_eur,g_int 
			FROM ch_girl")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Inche Height </th>
			<th>Inche chest</th>
			<th>Inche Waist</th>
			<th>Inche Hips</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>international Size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($girl_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['g_height_in']."</td>";
			echo "<td>".$row['g_chest_in']."</td>";
			echo "<td>".$row['g_waist_in']."</td>";
			echo "<td>".$row['g_hips_in']."</td>";
			echo "<td>".$row['g_us']."</td>";
			echo "<td>".$row['g_uk']."</td>";
			echo "<td>".$row['g_eur']."</td>";
			echo "<td>".$row['g_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: children shoes (cm) 
		$child_shoes_cm = mysqli_query($con,
			"SELECT chsh_age,chsh_feet_cm,chsh_us,chsh_uk,chsh_eur,chsh_jp
			FROM ch_shoes")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Foot length cm</th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>Size Jp</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($child_shoes_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['chsh_age']."</td>";
			echo "<td>".$row['chsh_feet_cm']."</td>";
			echo "<td>".$row['chsh_us']."</td>";
			echo "<td>".$row['chsh_uk']."</td>";
			echo "<td>".$row['chsh_eur']."</td>";
			echo "<td>".$row['chsh_jp']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: children shoes (inch) 
		$child_shoes_inch = mysqli_query($con,
			"SELECT chsh_age,chsh_feet_in,chsh_us,chsh_uk,chsh_eur,chsh_jp
			FROM ch_shoes")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>Age</th>
			<th>Foot length inch </th>
			<th>Size US</th>
			<th>Size UK</th>
			<th>Size Eurp</th>
			<th>Size Jp</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($child_shoes_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['chsh_age']."</td>";
			echo "<td>".$row['chsh_feet_in']."</td>";
			echo "<td>".$row['chsh_us']."</td>";
			echo "<td>".$row['chsh_uk']."</td>";
			echo "<td>".$row['chsh_eur']."</td>";
			echo "<td>".$row['chsh_jp']."</td>";
			echo "</tr>";
		} echo "</table>";

//						 *************	Women Size 	**************
//QUERY: women tops (cm) 
	$women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 8 OFFSET 2") or 
	die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th> bust, cm</th>
            <th>  WAIST, cm</th>
            <th> HIPS, cm </th>             
			</tr> ";
	// result
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

//QUERY: women tops (inch) 
	$women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in 
		FROM women_size LIMIT 8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th> bust, inch</th>
			<th>  WAIST, INCH</th>
			<th> HIPS, INCH </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_tops_inch, MYSQLI_ASSOC) )
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
		
//QUERY: women dress (cm)
	$women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT  8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($women_dress_cm, MYSQLI_ASSOC) )
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

//QUERY: women dress (inch)
	$women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT  8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($women_dress_inch, MYSQLI_ASSOC) )
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

//QUERY : women skirts (cm)
	$women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT 8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header 
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , cm</th>
			<th> HIPS , cm </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_skirts_cm, MYSQLI_ASSOC) )
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
		
//QUERY : women skirts (inch)
	$women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , INCH</th>
			<th> HIPS , INCH </th>      
			</tr> ";
	//  result
		while ( $row = mysqli_fetch_array ($women_skirts_inch , MYSQLI_ASSOC) )
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

//QUERY : women pants (cm)
	$women_pants_cm = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST IN cm</th>
            <th> HIPS IN cm </th>
            <th> LEG IN cm</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_cm']."</td>";
            echo "<td>".$row['w_hips_cm']."</td>";
            echo "<td>".$row['w_leg_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women pants (inch)	
	$women_pants_inch = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 8 OFFSET 2") 
	or die( mysqli_connect_error()); 
	//  hreader
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST , inch</th>
            <th> HIPS , inch </th>
            <th> LEG , inch</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_in']."</td>";
            echo "<td>".$row['w_hips_in']."</td>";
            echo "<td>".$row['w_leg_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women tight (cm)
		$women_tight_cm = mysqli_query($con,
			"SELECT wt_int,wt_hips_cm,wt_hight_cm
			FROM women_tight") 
		or die( mysqli_connect_error()); 
	// headrer
		echo "<table>
			<tr>
			<th>international size</th>			
			<th>hips , CM</th>
            <th>hight , inch</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_tight_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wt_int']."</td>";
			echo "<td>".$row['wt_hips_cm']."</td>";
            echo "<td>".$row['wt_hight_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women tight (inch)
		$women_tight_inch = mysqli_query($con,
			"SELECT wt_int,wt_hips_in,wt_hight_in 
			FROM women_tight") 
		or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th>international size</th>
			<th>hips, inch </th>
            <th>hight, inch</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_tight_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wt_int']."</td>";
			echo "<td>".$row['wt_hips_in']."</td>";
            echo "<td>".$row['wt_hight_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women shoes (cm)
	$women_shoes_cm = mysqli_query($con,
		"SELECT wsh_eur,wsh_uk,wsh_us,wsh_feet_cm 
		FROM women_shoes ")
	or die( mysqli_connect_error()); 
	// header 
		echo "<table>
			<tr>
			<th>  shoes size EUR</th>
			<th>  UK </th>
            <th>  US </th>
            <th>  FEET IN CM </th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_shoes_cm, MYSQLI_ASSOC) )
		{
		echo "<tr>";
			echo "<td>".$row['wsh_eur']."</td>";
			echo "<td>".$row['wsh_uk']."</td>";
            echo "<td>".$row['wsh_us']."</td>";
            echo "<td>".$row['wsh_feet_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
//QUERY : women shoes (inch)
	$women_shoes_inch = mysqli_query($con,
		"SELECT wsh_eur,wsh_uk,wsh_us,wsh_feet_in 
		FROM women_shoes ")
	or die( mysqli_connect_error()); 
	//header 
		echo "<table>
			<tr>
			<th>  shoes size EUR</th>
			<th>  UK </th>
            <th>  US </th>
            <th>  FEET ,inch</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_shoes_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wsh_eur']."</td>";
			echo "<td>".$row['wsh_uk']."</td>";
            echo "<td>".$row['wsh_us']."</td>";
            echo "<td>".$row['wsh_feet_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women ring (cm)
	$women_ring_cm = mysqli_query($con,
		"SELECT wr_int,wr_cir_mm 
		FROM women_ring ") 
	or die( mysqli_connect_error());
	//header 
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Cir in mm </th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_ring_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wr_int']."</td>";
			echo "<td>".$row['wr_cir_mm']."</td>";
			echo "</tr>";
		} echo "</table>"; 
//QUERY : women ring (inch)
	$women_ring_inch = mysqli_query($con,
		"SELECT wr_int,wr_cir_inch 
		FROM women_ring ") 
	or die( mysqli_connect_error());
	//header 
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Cir in inch </th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_ring_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wr_int']."</td>";
			echo "<td>".$row['wr_cir_inch']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women belt (cm) 
	$women_belt_cm = mysqli_query($con, 
		"SELECT wb_int,wb_waist_cm 
		FROM women_belt ") 
	or die( mysqli_connect_error()); 
	//header
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Waist in cm </th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_belt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wb_int']."</td>";
			echo "<td>".$row['wb_waist_cm']."</td>";
			echo "</tr>";
		} echo "</table>";	
	
//QUERY: women belt (inch) 
	$women_belt_inch = mysqli_query($con, 
		"SELECT wb_int,wb_waist_in 
		FROM women_belt") 
	or die( mysqli_connect_error()); ;
	//header
		echo "<table>
			<tr>
			<th>international size</th>
			<th> Waist in inch </th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_belt_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wb_int']."</td>";
			echo "<td>".$row['wb_waist_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women abaya (cm)
	$women_abaya_cm= mysqli_query($con, 
		"SELECT wa_size,wa_length_cm,wa_width_cm,wa_sleeve_cm 
		FROM women_abaya ") 
	or die( mysqli_connect_error()); 
	//header
		echo "<table>
			<tr>
			<th>Women Abaya sizes</th>
			<th>lenght IN CM </th>
			<th>width IN CM</th>
			<th>sleeve IN CM</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_abaya_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wa_size']."</td>";
			echo "<td>".$row['wa_length_cm']."</td>";
			echo "<td>".$row['wa_width_cm']."</td>";
            echo "<td>".$row['wa_sleeve_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women abaya (inch)
	$women_abaya_inch = mysqli_query($con, 
		"SELECT wa_size,wa_length_in,wa_width_in,wa_sleeve_in  
		FROM women_abaya") 
	or die( mysqli_connect_error()); 
	//header
		echo "<table>
			<tr>
			<th>Women Abaya sizes</th>
			<th>lenght IN INCH </th>
			<th>width IN INCH</th>
			<th>sleeve IN INCH</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_abaya_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wa_size']."</td>";
			echo "<td>".$row['wa_length_in']."</td>";
			echo "<td>".$row['wa_width_in']."</td>";
            echo "<td>".$row['wa_sleeve_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women underwear (cm) 
		$women_underwear_cm = mysqli_query($con,
			"SELECT wun_waist_cm,wun_hips_cm,wun_uk,wun_int
			FROM women_underwear")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>waist,cm</th>
			<th>hips,cm</th>
			<th>Size UK</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_underwear_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wun_waist_cm']."</td>";
			echo "<td>".$row['wun_hips_cm']."</td>";
			echo "<td>".$row['wun_uk']."</td>";
			echo "<td>".$row['wun_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women underwear (inch) 
		$women_underwear_inch = mysqli_query($con,
			"SELECT wun_waist_in,wun_hips_in,wun_uk,wun_int
			FROM women_underwear")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>waist,inch</th>
			<th>hips,inch</th>
			<th>Size UK</th>
			<th>international size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_underwear_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wun_waist_in']."</td>";
			echo "<td>".$row['wun_hips_in']."</td>";
			echo "<td>".$row['wun_uk']."</td>";
			echo "<td>".$row['wun_int']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women bra (cm) 
		$women_bra_cm = mysqli_query($con,
			"SELECT wbra_underbust_cm,overbust_cm,wbra_size,cup_size
			FROM women_bra")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>underbust,cm</th>			
			<th>Size</th>
			<th>overbust,cm</th>
			<th>cup size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_bra_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wbra_underbust_cm']."</td>";
			echo "<td>".$row['wbra_size']."</td>";
			echo "<td>".$row['overbust_cm']."</td>";
			echo "<td>".$row['cup_size']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: women bra (inch) 
		$women_bra_inch = mysqli_query($con,
			"SELECT wbra_underbust_in,overbust_in,wbra_size,cup_size
			FROM women_bra")
		or die ( mysqli_connect_error());
	// header
		echo "<table>
			<tr>
			<th>underbust,inch</th>
			<th>Size</th>
			<th>overbust,inch</th>
			<th>cup size</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($women_bra_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wbra_underbust_in']."</td>";
			echo "<td>".$row['wbra_size']."</td>";
			echo "<td>".$row['overbust_in']."</td>";
			echo "<td>".$row['cup_size']."</td>";
			echo "</tr>";
		} echo "</table>";

//				 *************	Women maternity Size 	**************
//QUERY : women maternity (cm)
    $women_maternity_cm= mysqli_query($con, 
		"SELECT wm_int,wm_bust_cm,wm_under_bust_cm,wm_hips_cm,wm_leg_cm 
		FROM women_maternity") 
	or die( mysqli_connect_error()); 
	//header
		echo "<table>
			<tr>
			<th>international sizes</th>
			<th>BUST IN CM </th>
			<th>UNDER BUST IN CM</th>
			<th>HIPS IN CM</th>
			<th>LEG IN CM</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_maternity_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['wm_int']."</td>";
			echo "<td>".$row['wm_bust_cm']."</td>";
			echo "<td>".$row['wm_under_bust_cm']."</td>";
            echo "<td>".$row['wm_hips_cm']."</td>";
			echo "<td>".$row['wm_leg_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women maternity (inch)
	$women_maternity_inch = mysqli_query($con, 
		"SELECT wm_int,wm_bust_in,wm_under_bust_in,wm_hips_in,wm_leg_in 
		FROM women_maternity ") 
	or die( mysqli_connect_error()); 
	//header
		echo "<table>
			<tr>
			<th>international sizes</th>
			<th>BUST IN INCH </th>
			<th>UNDER BUST IN INCH</th>
			<th>HIPS IN INCH</th>
			<th>LEG IN INCH</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($women_maternity_inch,MYSQLI_ASSOC))
		{
			echo "<tr>";
			echo "<td>".$row['wm_int']."</td>";
			echo "<td>".$row['wm_bust_in']."</td>";
			echo "<td>".$row['wm_under_bust_in']."</td>";
            echo "<td>".$row['wm_hips_in']."</td>";
			echo "<td>".$row['wm_leg_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//				 *************	Women -petite- Size 	**************
//QUERY: women -petite- tops (cm) 
	$petite_women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th> bust, cm</th>
            <th>  WAIST, cm</th>
            <th> HIPS, cm </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($petite_women_tops_cm, MYSQLI_ASSOC) )
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

//QUERY: women -petite- tops (inch) 
	$petite_women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in 
		FROM women_size  LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th> bust, inch</th>
			<th>  WAIST, INCH</th>
			<th> HIPS, INCH </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($petite_women_tops_inch, MYSQLI_ASSOC) )
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
		
//QUERY: women -petite- dress (cm)
	$petite_women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($petite_women_dress_cm, MYSQLI_ASSOC) )
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

//QUERY: women -petite- dress (inch)
	$petite_women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($petite_women_dress_inch, MYSQLI_ASSOC) )
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

//QUERY : women -petite- skirts (cm)
	$petite_women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header 
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , cm</th>
			<th> HIPS , cm </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($petite_women_skirts_cm, MYSQLI_ASSOC) )
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
		
//QUERY : women -petite- skirts (inch)
	$petite_women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , INCH</th>
			<th> HIPS , INCH </th>      
			</tr> ";
	//  result
		while ( $row = mysqli_fetch_array ($petite_women_skirts_inch , MYSQLI_ASSOC) )
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

//QUERY : women -petite- pants (cm)
	$petite_women_pants_cm = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST IN cm</th>
            <th> HIPS IN cm </th>
            <th> LEG IN cm</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($petite_women_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_cm']."</td>";
            echo "<td>".$row['w_hips_cm']."</td>";
            echo "<td>".$row['w_leg_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women -petite- pants (inch)	
	$petite_women_pants_inch = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 4") 
	or die( mysqli_connect_error()); 
	//  hreader
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST , inch</th>
            <th> HIPS , inch </th>
            <th> LEG , inch</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($petite_women_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_in']."</td>";
            echo "<td>".$row['w_hips_in']."</td>";
            echo "<td>".$row['w_leg_in']."</td>";
			echo "</tr>";
		} echo "</table>";
//				 *************	Women -plus- Size 	**************
//QUERY: women -plus- tops (cm) 
	$plus_women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th> bust, cm</th>
            <th>  WAIST, cm</th>
            <th> HIPS, cm </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($plus_women_tops_cm, MYSQLI_ASSOC) )
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

//QUERY: women -plus- tops (inch) 
	$plus_women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in 
		FROM women_size  LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th> bust, inch</th>
			<th>  WAIST, INCH</th>
			<th> HIPS, INCH </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($plus_women_tops_inch, MYSQLI_ASSOC) )
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
		
//QUERY: women -plus- dress (cm)
	$plus_women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($plus_women_dress_cm, MYSQLI_ASSOC) )
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

//QUERY: women -plus- dress (inch)
	$plus_women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
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
	// result
		while ( $row = mysqli_fetch_array ($plus_women_dress_inch, MYSQLI_ASSOC) )
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

//QUERY : women -plus- skirts (cm)
	$plus_women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm 
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header 
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , cm</th>
			<th> HIPS , cm </th>       
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($plus_women_skirts_cm, MYSQLI_ASSOC) )
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
		
//QUERY : women -plus- skirts (inch)
	$plus_women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>
			<th>  WAIST , INCH</th>
			<th> HIPS , INCH </th>      
			</tr> ";
	//  result
		while ( $row = mysqli_fetch_array ($plus_women_skirts_inch , MYSQLI_ASSOC) )
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

//QUERY : women -plus- pants (cm)
	$plus_women_pants_cm = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST IN cm</th>
            <th> HIPS IN cm </th>
            <th> LEG IN cm</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($plus_women_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_cm']."</td>";
            echo "<td>".$row['w_hips_cm']."</td>";
            echo "<td>".$row['w_leg_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY : women -plus- pants (inch)	
	$plus_women_pants_inch = mysqli_query($con,
		"SELECT * 
		FROM women_size LIMIT 4 OFFSET 10") 
	or die( mysqli_connect_error()); 
	//  hreader
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th>  Eur </th>
			<th>  UK </th>
            <th>  US </th>
            <th>  WAIST , inch</th>
            <th> HIPS , inch </th>
            <th> LEG , inch</th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($plus_women_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['w_int']."</td>";
			echo "<td>".$row['w_eur']."</td>";
            echo "<td>".$row['w_uk']."</td>";
            echo "<td>".$row['w_us']."</td>";
            echo "<td>".$row['w_waist_in']."</td>";
            echo "<td>".$row['w_hips_in']."</td>";
            echo "<td>".$row['w_leg_in']."</td>";
			echo "</tr>";
		} echo "</table>";

//						 *************	Men Size 	**************
//QUERY: Men tops (cm) 
	$men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'R' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>
            <th>  neckline, cm</th>
            <th>  armlength, cm</th>
            <th>  hight , cm </th>            
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_tops_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_cm']."</td>";
            echo "<td>".$row['mt_waist_cm']."</td>";
            echo "<td>".$row['mt_neckLine_cm']."</td>";
            echo "<td>".$row['mt_armLength_cm']."</td>";	
            echo "<td>".$row['mt_height_cm']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men tops (inch) 
	$men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'R'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th>
            <th>  neckline, inch</th>
            <th>  armlength, inch</th>
            <th>  hight , inch </th>  
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_tops_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_in']."</td>";
            echo "<td>".$row['mt_waist_in']."</td>";
            echo "<td>".$row['mt_neckLine_in']."</td>";
            echo "<td>".$row['mt_armLength_in']."</td>";	
            echo "<td>".$row['mt_height_in']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men shirt (cm) 
	$men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'R' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>        
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_shirt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_cm']."</td>";
            echo "<td>".$row['mshr_waist_cm']."</td>";			
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men shirt (inch) 
	$men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'R'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th> 
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_shirt_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_in']."</td>";
            echo "<td>".$row['mshr_waist_in']."</td>";			
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men pants (cm) 
	$men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_eur,mp_uk
		FROM men_pants 
		where mp_type = 'R' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, cm</th>
            <th>  hips, cm</th>
            <th>  leg, cm</th>        
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_cm']."</td>";
            echo "<td>".$row['mp_hips_cm']."</td>";
            echo "<td>".$row['mp_leg_cm']."</td>";				
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men pants (inch) 
	$men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'R'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, inch</th>
            <th>  hips, inch</th>
            <th>  leg, inch</th>   
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_in']."</td>";
            echo "<td>".$row['mp_hips_in']."</td>";
            echo "<td>".$row['mp_leg_in']."</td>";			
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men shoes (cm) 
	$men_shoes_cm = mysqli_query($con,
		"SELECT msh_feet_cm,msh_eur,msh_uk,msh_us
		FROM men_shoes ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th> feet , cm</th>     
            <th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>               
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_shoes_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['msh_feet_cm']."</td>";				
            echo "<td>".$row['msh_eur']."</td>";
            echo "<td>".$row['msh_uk']."</td>";
            echo "<td>".$row['msh_us']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men shoes (inch) 
	$men_shoes_inch = mysqli_query($con,
		"SELECT msh_feet_in,msh_eur,msh_uk,msh_us
		FROM men_shoes ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th> feet , inch</th>     
            <th>  Eur </th>
			<th>  UK </th>
			<th>  US </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_shoes_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['msh_feet_in']."</td>";				
            echo "<td>".$row['msh_eur']."</td>";
            echo "<td>".$row['msh_uk']."</td>";
            echo "<td>".$row['msh_us']."</td>";    
			echo "</tr>";
		} echo "</table>";

//QUERY: Men belt (cm) 
	$men_belt_cm = mysqli_query($con,
		"SELECT mb_waist_cm,mb_int
		FROM men_belt ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> waist , cm </th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_belt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mb_int']."</td>";				
            echo "<td>".$row['mb_waist_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men belt (inch) 
	$men_belt_inch = mysqli_query($con,
		"SELECT mb_waist_in, mb_int
		FROM men_belt ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> waist , inch </th>  
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_belt_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mb_int']."</td>";				
            echo "<td>".$row['mb_waist_in']."</td>";   
			echo "</tr>";
		} echo "</table>";

//QUERY: Men hat (cm) 
	$men_hat_cm = mysqli_query($con,
		"SELECT mh_head_cm,mh_int
		FROM men_hat ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> head circu. , cm </th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_hat_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mh_int']."</td>";				
            echo "<td>".$row['mh_head_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men hat (inch) 
	$men_hat_inch = mysqli_query($con,
		"SELECT mh_head_in, mh_int
		FROM men_hat ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> head circu. , inch </th>  
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_hat_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mh_int']."</td>";				
            echo "<td>".$row['mh_head_in']."</td>";   
			echo "</tr>";
		} echo "</table>";

//QUERY: Men underwear (cm) 
	$men_underwear_cm = mysqli_query($con,
		"SELECT mun_int, mun_waist_cm, mun_eur, mun_uk
		FROM men_underwear ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> waist , cm </th>
            <th> EUR size </th>
            <th> UK size </th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_underwear_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mun_int']."</td>";				
            echo "<td>".$row['mun_waist_cm']."</td>";
            echo "<td>".$row['mun_eur']."</td>";
            echo "<td>".$row['mun_uk']."</td>";	
			echo "</tr>";
		} echo "</table>";

//QUERY: Men underwear (inch) 
	$men_underwear_inch = mysqli_query($con,
		"SELECT mun_int, mun_waist_in, mun_eur, mun_uk
		FROM men_underwear ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th>international Size</th>     
            <th> waist , inch </th>
            <th> EUR size </th>
            <th> UK size </th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_underwear_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mun_int']."</td>";				
            echo "<td>".$row['mun_waist_in']."</td>";
            echo "<td>".$row['mun_eur']."</td>";
            echo "<td>".$row['mun_uk']."</td>";		   
			echo "</tr>";
		} echo "</table>";

//QUERY: Men shemagh 
	$men_shemagh = mysqli_query($con,
		"SELECT mshm_size, mshm_height_cm
		FROM men_shemagh ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
            <th> مقاس الشماغ </th>     
            <th>  الطول المناسب </th>
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($men_shemagh, MYSQLI_ASSOC) )
		{
			echo "<tr>";
            echo "<td>".$row['mshm_size']."</td>";				
            echo "<td>".$row['mshm_height_cm']."</td>";
			echo "</tr>";
		} echo "</table>";

//						 *************	Men & Youth & Child Thoub 	**************
//QUERY: men thoub
		$men_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest 
			FROM men_thoub")
		or die ( mysqli_connect_error());
	//header
		echo "<table>
			<tr>
			<th>Size</th>
			<th>Length</th>
			<th>Width</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($men_thoub, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mth_size']."</td>";
			echo "<td>".$row['mth_length']."</td>";
			echo "<td>".$row['mth_chest']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: youth thoub
		$youth_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest 
			FROM youth_thoub")
		or die ( mysqli_connect_error());
	//header
		echo "<table>
			<tr>
			<th>Size</th>
			<th>Length</th>
			<th>Width</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($youth_thoub, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mth_size']."</td>";
			echo "<td>".$row['mth_length']."</td>";
			echo "<td>".$row['mth_chest']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: child thoub
		$child_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest  
			FROM child_thoub")
		or die ( mysqli_connect_error());
	//header
		echo "<table>
			<tr>
			<th>Size</th>
			<th>Length</th>
			<th>Width</th>
			</tr> ";
	//result
		while ( $row = mysqli_fetch_array ($child_thoub, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mth_size']."</td>";
			echo "<td>".$row['mth_length']."</td>";
			echo "<td>".$row['mth_chest']."</td>";
			echo "</tr>";
		} echo "</table>";


//						 *************	Men short Size 	**************
//QUERY: Men -long- tops (cm) 
	$long_men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'L' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>
            <th>  neckline, cm</th>
            <th>  armlength, cm</th>
            <th>  hight , cm </th>            
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_tops_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_cm']."</td>";
            echo "<td>".$row['mt_waist_cm']."</td>";
            echo "<td>".$row['mt_neckLine_cm']."</td>";
            echo "<td>".$row['mt_armLength_cm']."</td>";	
            echo "<td>".$row['mt_height_cm']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -long- tops (inch) 
	$long_men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'L'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th>
            <th>  neckline, inch</th>
            <th>  armlength, inch</th>
            <th>  hight , inch </th>  
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_tops_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_in']."</td>";
            echo "<td>".$row['mt_waist_in']."</td>";
            echo "<td>".$row['mt_neckLine_in']."</td>";
            echo "<td>".$row['mt_armLength_in']."</td>";	
            echo "<td>".$row['mt_height_in']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -long- shirt (cm) 
	$long_men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_neckLine_cm,mshr_armLength_cm,mshr_height_cm,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'L' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>
            <th>  neckline, cm</th>
            <th>  armlength, cm</th>
            <th>  hight , cm </th>            
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_shirt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_cm']."</td>";
            echo "<td>".$row['mshr_waist_cm']."</td>";
            echo "<td>".$row['mshr_neckLine_cm']."</td>";
            echo "<td>".$row['mshr_armLength_cm']."</td>";	
            echo "<td>".$row['mshr_height_cm']."</td>";				
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -long- shirt (inch) 
	$long_men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_neckLine_in,mshr_armLength_in,mshr_height_in,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'L'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th>
            <th>  neckline, inch</th>
            <th>  armlength, inch</th>
            <th>  hight , inch </th>  
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_shirt_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_in']."</td>";
            echo "<td>".$row['mshr_waist_in']."</td>";
            echo "<td>".$row['mshr_neckLine_in']."</td>";
            echo "<td>".$row['mshr_armLength_in']."</td>";	
            echo "<td>".$row['mshr_height_in']."</td>";				
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -long- pants (cm) 
	$long_men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_height_cm,mp_eur,mp_uk
		FROM men_pants 
		where mp_type = 'L' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, cm</th>
            <th>  hips, cm</th>
            <th>  leg, cm</th> 
            <th>  height, cm</th>        
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_cm']."</td>";
            echo "<td>".$row['mp_hips_cm']."</td>";
            echo "<td>".$row['mp_leg_cm']."</td>";
            echo "<td>".$row['mp_height_cm']."</td>";				
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -long- pants (inch) 
	$long_men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_height_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'L'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, inch</th>
            <th>  hips, inch</th>
            <th>  leg, inch</th> 
            <th>  height, cm</th>   
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($long_men_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_in']."</td>";
            echo "<td>".$row['mp_hips_in']."</td>";
            echo "<td>".$row['mp_leg_in']."</td>";
            echo "<td>".$row['mp_height_in']."</td>";			
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//						 *************	Men -short- Size 	**************
//QUERY: Men -short- tops (cm) 
	$short_men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'S' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>
            <th>  neckline, cm</th>
            <th>  armlength, cm</th>
            <th>  hight , cm </th>            
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_tops_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_cm']."</td>";
            echo "<td>".$row['mt_waist_cm']."</td>";
            echo "<td>".$row['mt_neckLine_cm']."</td>";
            echo "<td>".$row['mt_armLength_cm']."</td>";	
            echo "<td>".$row['mt_height_cm']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -short- tops (inch) 
	$short_men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top 
		where mt_type = 'S'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th>
            <th>  neckline, inch</th>
            <th>  armlength, inch</th>
            <th>  hight , inch </th>  
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_tops_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mt_int']."</td>";
            echo "<td>".$row['mt_chest_in']."</td>";
            echo "<td>".$row['mt_waist_in']."</td>";
            echo "<td>".$row['mt_neckLine_in']."</td>";
            echo "<td>".$row['mt_armLength_in']."</td>";	
            echo "<td>".$row['mt_height_in']."</td>";				
            echo "<td>".$row['mt_eur']."</td>";
            echo "<td>".$row['mt_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -short- shirt (cm) 
	$short_men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_neckLine_cm,mshr_armLength_cm,mshr_height_cm,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'S' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> chest, cm</th>
            <th>  waist, cm</th>
            <th>  neckline, cm</th>
            <th>  armlength, cm</th>
            <th>  hight , cm </th>            
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_shirt_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_cm']."</td>";
            echo "<td>".$row['mshr_waist_cm']."</td>";
            echo "<td>".$row['mshr_neckLine_cm']."</td>";
            echo "<td>".$row['mshr_armLength_cm']."</td>";	
            echo "<td>".$row['mshr_height_cm']."</td>";				
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -short- shirt (inch) 
	$short_men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_neckLine_in,mshr_armLength_in,mshr_height_in,mshr_eur,mshr_uk
		FROM men_shirt 
		where mshr_type = 'S'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
			<th> chest, inch</th>
            <th>  waist, inch</th>
            <th>  neckline, inch</th>
            <th>  armlength, inch</th>
            <th>  hight , inch </th>  
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_shirt_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mshr_int']."</td>";
            echo "<td>".$row['mshr_chest_in']."</td>";
            echo "<td>".$row['mshr_waist_in']."</td>";
            echo "<td>".$row['mshr_neckLine_in']."</td>";
            echo "<td>".$row['mshr_armLength_in']."</td>";	
            echo "<td>".$row['mshr_height_in']."</td>";				
            echo "<td>".$row['mshr_eur']."</td>";
            echo "<td>".$row['mshr_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -short- pants (cm) 
	$short_men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_height_cm,mp_eur,mp_uk
		FROM men_pants 
		where mp_type = 'S' ") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, cm</th>
            <th>  hips, cm</th>
            <th>  leg, cm</th> 
            <th>  height, cm</th>        
            <th>  Eur </th>
			<th>  UK </th>             
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_pants_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_cm']."</td>";
            echo "<td>".$row['mp_hips_cm']."</td>";
            echo "<td>".$row['mp_leg_cm']."</td>";
            echo "<td>".$row['mp_height_cm']."</td>";				
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";
			echo "</tr>";
		} echo "</table>";

//QUERY: Men -short- pants (inch) 
	$short_men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_height_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'S'") 
	or die( mysqli_connect_error()); 
	// header
		echo "<table>
			<tr>
			<th> international sizes</th>
            <th> waist, inch</th>
            <th>  hips, inch</th>
            <th>  leg, inch</th> 
            <th>  height, cm</th>   
			<th>  Eur </th>
			<th>  UK </th>    
			</tr> ";
	// result
		while ( $row = mysqli_fetch_array ($short_men_pants_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['mp_int']."</td>";
            echo "<td>".$row['mp_waist_in']."</td>";
            echo "<td>".$row['mp_hips_in']."</td>";
            echo "<td>".$row['mp_leg_in']."</td>";
            echo "<td>".$row['mp_height_in']."</td>";			
            echo "<td>".$row['mp_eur']."</td>";
            echo "<td>".$row['mp_uk']."</td>";       
			echo "</tr>";
		} echo "</table>";

		
 ?>

</body>
</html>