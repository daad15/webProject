<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<?php  
	//connection
	$con = mysqli_connect("localhost","root","","size_guide")
	or die ( mysqli_connect_error());

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