<?php
	$S = mysqli_connect("localhost","root" ,"","WSDB")
or die( mysqli_connect_error() );
mysqli_query($S,"CREATE TABLE IF NOT EXISTS WS(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
		w_int VARCHAR(30),
		w_eur INT,
                w_uk INT,
                w_us VARCHAR(30) , 
                w_bust_in FLOAT , 
                w_waist_in FLOAT,
                w_hips_in FLOAT , 
                w_leg_in  FLOAT,
                w_bust_cm FLOAT,
                w_waist_cm FLOAT,
                w_hips_cm FLOAT , 
                w_leg_cm FLOAT)")
   or die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('3XS', '28' , '2' , '000' , '30' , '24' , '33' , '30' , '76' ,'60' , '84' , '76.6')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('2XS', '30' , '4' , '00' , '31.5' , '25' , '34.5' , '30' , '80' ,'64' , '88' , '76.8')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('XS', '32' , '6' , '0-2' , '33' , '27' , '36.25' , '30.25' , '84' ,'68' , '92' , '77')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('S', '34' , '8' , '4-6' , '34.5' , '28' , '37.75' , '30.25' , '88' ,'72' , '96' , '77.2')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('M', '36' , '10' , '8-10' , '36.25' , '29' , '39' , '30.5' , '92' ,'76' , '99' , '77.4')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('L', '38' , '12' , '12-14' , '37.75' , '31' , '40.25' , '30.5' , '96' ,'80' , '102' , '77.6')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('XL', '40' , '14' , '16-18' , '39.5' , '33' , '41.25' , '30.5' , '100' ,'85' , '105' , '77.8')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('2XL', '42' , '16' , '20-22' , '41' , '35' , '43.5' , '30.75' , '104' ,'90' , '108' , '78')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('3XL', '44' , '18' , '22-24' , '43.5' , '38' , '45.5' , '30.75' , '110' ,'96' , '113' , '78.2')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('4XL', '46' , '20' , '26-28' , '45.5' , '40' , '47.5' , '30.75' , '116' ,'102' , '118' , '78.4')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('5XL', '48' , '22' , '30-32' , '48' , '42' , '49.5' , '31' , '122' ,'108' , '123' , '78.6')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('6XL', '50' , '24' , '34-36' , '40.5' , '44' , '50.5' , '31' , '128' ,'114' , '128' , '78.8')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('7XL', '52' , '26' , '38-40' , '52,75' , '47' , '52.75' , '31' , '134' ,'121' , '134' , '79')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WS (w_int, w_eur ,w_uk , w_us ,  w_bust_in ,  w_waist_in ,w_hips_in ,  w_leg_in ,w_bust_cm  , w_waist_cm ,w_hips_cm , w_leg_cm ) VALUES ('8XL', '54' , '28' , '42-44' , '55' , '50' , '55.5' , '31' , '140' ,'128' , '140' , '79.2')") or 
       die( mysqli_connect_error() );
         
            $query  = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$women_tops_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($women_tops_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";

}
     $query  = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$women_tops_cm = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($women_tops_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$dresses_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
echo "<br>";          
echo "الفساتين";
                echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($dresses_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";
}
        $query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$dresses_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
echo "<br>";          
echo "الفساتين";
                echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN CM" ."   ". "WAIST IN CM " ."   ". "HIPS IN CM ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($dresses_cm, MYSQLI_ASSOC)) {
		
            
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$WOMEN_PANTS_IN = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH " ."   ". "LEG IN INCH";
         echo "<br/>";
	while($row = mysqli_fetch_array ($WOMEN_PANTS_IN, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in']."          ".$row['w_leg_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$WOMEN_PANTS_CM = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM" . "     " . "LEG IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($WOMEN_PANTS_CM, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'] . "      " . $row['w_leg_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$WOMEN_skirts_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "االتنانير";
           echo "<br/>";
		 echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($WOMEN_skirts_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 8 OFFSET 2";
	$WOMEN_skirts_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "االتنانير";
            echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN CM " ."   ". "HIPS IN CM ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($WOMEN_skirts_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
 	$S = mysqli_connect("localhost","root" ,"","WSDB")
or die( mysqli_connect_error() );
     $query  = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_women_tops_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_women_tops_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";

}
     $query  = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_women_tops_cm = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_women_tops_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
 $query  = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_women_dress_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الفساتين للمقاسات الكبيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_women_dress_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";

}
     $query  = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_women_dress_cm = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الفساتين للمقاسات الكبيرة  ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_women_dress_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_WOMEN_PANTS_IN = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل للمقاسات الكبيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH " ."   ". "LEG IN INCH";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_WOMEN_PANTS_IN, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in']."          ".$row['w_leg_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_WOMEN_PANTS_CM = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل لمقاسات الكبيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM" . "     " . "LEG IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_WOMEN_PANTS_CM, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'] . "      " . $row['w_leg_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_WOMEN_skirts_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "  تنانير للمقاسات الكبيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_WOMEN_skirts_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4 OFFSET 10";
	$PLUS_WOMEN_skirts_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "تنانير للمقاسات الكبيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN CM " ."   ". "HIPS IN CM ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($PLUS_WOMEN_skirts_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
$query  = "SELECT * FROM WS LIMIT 4";
	$ptite_women_tops_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($ptite_women_tops_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";

}
     $query  = "SELECT * FROM WS LIMIT 4";
	$ptite_women_tops_cm = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($ptite_women_tops_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
     $query  = "SELECT * FROM WS LIMIT 4";
	$ptite_women_dress_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية للمقاسات الصغيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "BUST IN INCH" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";;
         echo "<br/>";
	while($row = mysqli_fetch_array ($ptite_women_dress_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."            ". $row['w_bust_in']. "           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
echo "<br />";

}
     $query  = "SELECT * FROM WS LIMIT 4";
	$ptite_women_dress_cm = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الملابس العلوية للمقاسات الصغيرة  ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($ptite_women_dress_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}

$query = "SELECT * FROM WS LIMIT 4";
	$Ptite_WOMEN_PANTS_IN = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل للمقاسات الصغيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN INCH " ."   ". "HIPS IN INCH " ."   ". "LEG IN INCH";
         echo "<br/>";
	while($row = mysqli_fetch_array ($Ptite_WOMEN_PANTS_IN, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in']."          ".$row['w_leg_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4";
	$Ptite_WOMEN_PANTS_IN = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "البناطيل للمقاسات الصغيرة ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM" . "     " . "LEG IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($Ptite_WOMEN_PANTS_IN, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'] . "      " . $row['w_leg_cm'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4";
	$Ptite_WOMEN_skirts_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "االتنانيرللمقاسات الصغيرة ";
           echo "<br/>";
		 echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN INCH " ."   ". "HIPS IN INCH ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($Ptite_WOMEN_skirts_in, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."           "  . $row['w_waist_in']."         ".$row['w_hips_in'];
		echo "<br />";
}
$query = "SELECT * FROM WS LIMIT 4";
	$Ptite_WOMEN_skirts_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "االتنانير للمقاسات الصغيرة";
            echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."    ". "WAIST IN CM " ."   ". "HIPS IN CM ";
         echo "<br/>";
	while($row = mysqli_fetch_array ($Ptite_WOMEN_skirts_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}

mysqli_query($S,"CREATE TABLE IF NOT EXISTS womenmaternity(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
		mw_int VARCHAR(30),
                mw_bust_in VARCHAR(30) , 
                mw_under_bust_in VARCHAR(30),
                mw_hips_in VARCHAR(30) , 
                mw_leg_in VARCHAR(30),
                mw_bust_cm VARCHAR(30),
               mw_under_bust_cm VARCHAR(30),
               mw_hips_cm VARCHAR(30) , 
               mw_leg_cm VARCHAR(30))")
          or die( mysqli_connect_error() );

    
mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm) VALUES ('S','36', '27-29', '38' , '21-22' ,'91', '70-75' ,'96' , '54-57')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm ) VALUES ('M','38', '29-31', '40' , '22-24' ,'96', '76-81' ,'101' , '58-61')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm ) VALUES ('L','40', '32-34', '41' , '24-25' ,'101', '82-87' ,'106' , '62-65')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm ) VALUES ('XL','42', '34-36', '43' , '25-27' ,'108', '88-93' ,'111' , '66-69')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm) VALUES ('2XL','45', '37-38', '46' , '27-28' ,'114', '94-99' ,'117' , '70-73')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenmaternity (mw_int,  mw_bust_in ,mw_under_bust_in ,  mw_hips_in ,  mw_leg_in, mw_bust_cm , mw_under_bust_cm ,  mw_hips_cm  ,mw_leg_cm ) VALUES ('3XL','47', '39-41', '48' , '29-30' ,'120', '100-105' ,'122' , '74-77')") or 
       die( mysqli_connect_error() );
$query = "SELECT * FROM womenmaternity LIMIT 6";
	$Maternity_women_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "ملابس الحمل ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Maternity_women_in, MYSQLI_ASSOC)) {
		
              echo $row['mw_int']. "                " .$row['mw_bust_in'] . "                " . $row['mw_under_bust_in'] ."           "  . $row['mw_hips_in']."         ".$row['mw_leg_in'];
		echo "<br />";
}
$query = "SELECT * FROM womenmaternity LIMIT 6";
	$Maternity_women_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "ملابس الحمل ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Maternity_women_cm, MYSQLI_ASSOC)) {
		
              echo $row['mw_int']."          ".$row['mw_bust_cm']."          ".$row['mw_under_bust_cm'] ."           "  . $row['mw_hips_cm']."         ".$row['mw_leg_cm'] ;
		echo "<br />";
}
   
                                   
mysqli_query($S,"CREATE TABLE IF NOT EXISTS WA(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wa_size INT,
                wa_length_in INT,
                 wa_width_in INT , 
                wa_sleeve_in VARCHAR(30),
               wa_length_cm INT,
                wa_width_cm INT , 
                wa_sleeve_cm INT)")
 or die( mysqli_connect_error() );
                                     mysqli_query($S,"INSERT INTO  WA (wa_size,  wa_length_in ,wa_width_in ,  wa_sleeve_in,  wa_length_cm , wa_width_cm , wa_sleeve_cm) VALUES ('52','52', '23', '27' , '132' ,'58', '68')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WA (wa_size,  wa_length_in ,wa_width_in ,  wa_sleeve_in,  wa_length_cm , wa_width_cm , wa_sleeve_cm) VALUES ('54','54', '24', '27' , '137' ,'60', '68' )") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WA (wa_size,  wa_length_in ,wa_width_in ,  wa_sleeve_in,  wa_length_cm , wa_width_cm , wa_sleeve_cm) VALUES ('56','56', '25', '27.5' , '142' ,'63', '69')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WA (wa_size,  wa_length_in ,wa_width_in ,  wa_sleeve_in,  wa_length_cm , wa_width_cm , wa_sleeve_cm) VALUES ('58','58', '26', '28' , '147' ,'66', '70')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WA (wa_size,  wa_length_in ,wa_width_in ,  wa_sleeve_in,  wa_length_cm , wa_width_cm , wa_sleeve_cm) VALUES ('60','60', '17', '28' , '152' ,'70', '70')") or 
       die( mysqli_connect_error() );
$query = "SELECT * FROM WA LIMIT 5";
	$Women_Abaya_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "عبايات ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Abaya_in, MYSQLI_ASSOC)) {
		
              echo $row['wa_size']. "                " .$row['wa_length_in'] . "                " . $row['wa_width_in'] ."           "  . $row['wa_sleeve_in'];
		echo "<br />";
}
$query = "SELECT * FROM WA LIMIT 5";
	$Women_Abaya_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "عبايات ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Abaya_cm, MYSQLI_ASSOC)) {
		
              echo $row['wa_size']. "                " .$row['wa_length_cm']."          ".$row['wa_width_cm']."          ".$row['wa_sleeve_cm'] ;
		echo "<br />";
}
   


mysqli_query($S,"CREATE TABLE IF NOT EXISTS womenshoes(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wsh_eur FLOAT,
                wsh_uk FLOAT,
                wsh_us FLOAT , 
                wsh_feet_in FLOAT,
               wsh_feet_cm FLOAT)")
 or die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('36','3.5', '5.5', '8.75' , '22.2')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('36.5','4', '6', '8.87' , '22.5')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('37','4.5', '6.5', '9' , '23')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes(wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm)  VALUES ('37.5','5', '7', '9.25' , '23.5')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('38','5.5', '7.5', '9.37' , '23.8')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('38.5','6', '8', '9.5' , '24.1')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('39','6.5', '8.5', '9.68' , '24.6')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm)  VALUES ('39.5','7', '9', '9.87' , '25.1')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes(wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('40','7.5', '9.5', '10' , '25.4')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('40.5','8', '10', '10.1' , '25.9')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes(wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm)  VALUES ('41','8.5', '10.5', '10.3' , '26.2')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('41.5','9', '11', '10.5' , '26.7')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('42','9.5', '11.5', '10.6' , '27.1')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('42.5','10', '12', '10.8' , '27.6')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('43','10.5', '12.5', '11' , '28')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  womenshoes (wsh_eur,  wsh_uk ,  wsh_us , wsh_feet_in, wsh_feet_cm) VALUES ('43.5','11', '13', '11.2' , '28.4')") or 
       die( mysqli_connect_error() );
$query = "SELECT * FROM womenshoes LIMIT 16";
	$Women_shoes_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "الاحذية";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_shoes_in, MYSQLI_ASSOC)) {
		
              echo $row['wsh_eur']. "                " .$row['wsh_uk'] . "                " . $row['wsh_us'] ."           "  . $row['wsh_feet_in'];
		echo "<br />";
}
$query = "SELECT * FROM womenshoes LIMIT 16";
	$Women_shoes_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
       echo "الاحذية";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_shoes_cm, MYSQLI_ASSOC)) {
		
              echo $row['wsh_eur']. "                " .$row['wsh_uk'] . "                " . $row['wsh_us'] ."         ".$row['wsh_feet_cm'];
		echo "<br />";
}
 
 
mysqli_query($S,"CREATE TABLE IF NOT EXISTS Wring(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wr_int VARCHAR(30),
                wr_cir_mm INT,
                wr_cir_inch FLOAT)")
 or die( mysqli_connect_error() );
    mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('4','48', '1,84')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('4.5','49', '1.89')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('5','51', '1.94')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('5.5','52', '1.99')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('6','53', '2.04')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('6.5','55', '2.09')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('7','56', '2.19')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('7.5','57', '2.24')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('8','58', '2.29')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('8.5','59', '2.29')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('9','61', '2.34')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('9.5','61', '2.39')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('10','62', '2.44')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('10.5','63', '2.49')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('11','65', '2.54')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('11.5','66', '2.59')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wring (wr_int, wr_cir_mm,  wr_cir_inch)  VALUES ('12','68', '2.65')") or 
       die( mysqli_connect_error() );
$query = "SELECT * FROM Wring LIMIT 17";
	$Women_Ring_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "الخواتم";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Ring_in, MYSQLI_ASSOC)) {
		
              echo $row['wr_int']. "                ". $row['wr_cir_inch'];
		echo "<br />";
}
$query = "SELECT * FROM Wring LIMIT 17";
	$Women_Ring_mm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "الخواتم";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Ring_mm, MYSQLI_ASSOC)) {
		
              echo $row['wr_int']. "                " .$row['wr_cir_mm'];
		echo "<br />";
}
 
    
mysqli_query($S,"CREATE TABLE IF NOT EXISTS WBELT(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wb_int VARCHAR(30),
                wb_waist_in VARCHAR(30),
                wb_waist_cm VARCHAR(30))")
 or die( mysqli_connect_error() );   mysqli_query($S,"INSERT INTO  WBELT (wb_int, wb_waist_cm,  wb_waist_in)  VALUES ('XS','72', '28.25')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WBELT (wb_int, wb_waist_cm,  wb_waist_in)  VALUES ('S','80', '31.5')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WBELT (wb_int, wb_waist_cm,  wb_waist_in)  VALUES ('M','88', '34.5')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WBELT (wb_int, wb_waist_cm,  wb_waist_in)  VALUES ('L','96', '37.75')") or 
       die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WBELT (wb_int, wb_waist_cm,  wb_waist_in)  VALUES ('XL','104', '41')") or 
       die( mysqli_connect_error() );
 $query = "SELECT * FROM WBELT LIMIT 5";
	$Women_Belt_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "مقاسات الاحزمة";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Belt_in, MYSQLI_ASSOC)) {
		
              echo $row['wb_int']. "                " .$row['wb_waist_in'];
		echo "<br />";
}
 $query = "SELECT * FROM WBELT LIMIT 5";
	$Women_Belt_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "مقاسات الاحزمة";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Belt_cm, MYSQLI_ASSOC)) {
		
              echo $row['wb_int']. "              ". $row['wb_waist_cm'];
		echo "<br />";
}
mysqli_query($S,"CREATE TABLE IF NOT EXISTS Wtight(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wt_int VARCHAR(30),
                wt_hips_in VARCHAR(30),
                wt_hips_cm VARCHAR(30),
                wt_hight_in VARCHAR(30))")
 or die( mysqli_connect_error() );    mysqli_query($S,"INSERT INTO  Wtight (wt_int,  wt_hips_in, wt_hips_cm,wt_hight_in)  VALUES ('XS','34', '85-90' ,'4.9-5.1')") or 
       die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wtight (wt_int,  wt_hips_in, wt_hips_cm,wt_hight_in)  VALUES ('S','36', '90-95' ,'5.0-5.4')") or 
       die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wtight (wt_int,  wt_hips_in, wt_hips_cm,wt_hight_in)  VALUES ('M','38', '95-100' ,'5.2-5.8')") or 
       die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wtight (wt_int,  wt_hips_in, wt_hips_cm,wt_hight_in)  VALUES ('L','40', '100-105' , '5.5-5.8')") or 
       die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wtight (wt_int,  wt_hips_in, wt_hips_cm,wt_hight_in)  VALUES ('XL','42', '105-110' ,'5.6-5.10') ")or 
       die( mysqli_connect_error() );
 $query = "SELECT * FROM Wtight LIMIT 5";
	$WomenTight = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "جوارب طويلة";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($WomenTight, MYSQLI_ASSOC)) {
		
              echo $row['wt_int']. "                " .$row['wt_hips_in'] . "                " . $row['wt_hips_cm'] ."     ". $row['wt_hight_in'];
		echo "<br />";
}
 mysqli_query($S,"CREATE TABLE IF NOT EXISTS Wbra(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wbra_size VARCHAR(30),
                wbra_underbust_in VARCHAR(30),
                wbra_underbust_cm VARCHAR(30),
                cup_size VARCHAR(30),
                overbust_cm VARCHAR(30),
                overbust_in VARCHAR(30))")
 or die( mysqli_connect_error() );
                                 mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'A' , '30.3-31.1' ,'77-79' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'B' ,'31.1-31.9' ,'79-81')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'C' ,'31.9-32.7' , '81-83')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'D' ,'32.7-33.5','83-85')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'DD' ,'33.5-34.3' ,'85-87')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('30','24.8-26.4', '63-67' ,'E' , '34.3-35','87-89')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'A' , '32.3-33.1' ,'82-84' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'B' ,'33.1-33.9' ,'84-86')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'C' ,'33.9-34.6' , '86-88')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'D' ,'34.6-35.4','88-90')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'DD' ,'35.4-36.2' ,'90-92')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('32','26.8-28.3', '68-72' ,'E' , '36.2-37','92-94')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'A' , '34.3-35' ,'87-89' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'B' ,'35-35.8' ,'89-91')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'C' ,'35.8-36.6' , '91-93')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'D' ,'36.6-37.4','93-95')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'DD' ,'37.4-38.2' ,'95-97')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('34','28.7-30.3', '73-77' ,'E' , '38.2-39','97-99')") or 
    die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'A' , '36.2-37' ,'92-94' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'B' ,'37-37.8' ,'94-96')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'C' ,'37.8-38.6' , '96-98')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'D' ,'38.6-39.4','98-100')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'DD' ,'39.4-40.2' ,'100-102')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('36','30.7-32.3', '78-82' ,'E' , '40.2-40.9','102-104')") or 
    die( mysqli_connect_error() ); mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'A' , '38.2-39' ,'97-99' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'B' ,'39-39.8' ,'99-101')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'C' ,'39.8-40.6' , '101-103')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'D' ,'40.6-41.3','103-105')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in ,overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'DD' ,'41.3-42.1' ,'105-107')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('38','32.7-34.3', '83-87' ,'E' , '42.1-42.9','107-109')") or 
    die( mysqli_connect_error() );  mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2','88-92' ,'A' , '40.2-40.9' ,'102-104' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2', '88-92' ,'B' ,'40.9-41.7' ,'104-106')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2', '88-92' ,'C' ,'41.7-42.5' , '106-108')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2', '88-92' ,'D' ,'42.5-43.3','108-110')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2', '88-92' ,'DD' ,'43.3-44.1' ,'110-112')") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  Wbra (wbra_size,  wbra_underbust_in,  wbra_underbust_cm,cup_size,overbust_in , overbust_cm)  VALUES ('40','34.6-36.2', '88-92' ,'E' , '44.1-44.9','112-114')") or 
    die( mysqli_connect_error() ); 
$query = "SELECT * FROM Wbra LIMIT 36";
	$Women_bra_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "حمالات الصدر";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_bra_in, MYSQLI_ASSOC)) {
		
              echo $row['wbra_size']. "                " .$row['wbra_underbust_in'] ."     ". $row['cup_size']."     ". $row['overbust_in'];
		echo "<br />";
}
$query = "SELECT * FROM Wbra LIMIT 36";
	$Women_bra_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "حمالات الصدر";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_bra_cm, MYSQLI_ASSOC)) {
		
              echo $row['wbra_size']. "                " . $row['wbra_underbust_cm'] ."     ". $row['cup_size']."     ". $row['overbust_cm'];
		echo "<br />";
}
  mysqli_query($S,"CREATE TABLE IF NOT EXISTS WPANTIES(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
                wp_size VARCHAR(30),
                wp_waist_in VARCHAR(30),
                wp_waist_cm VARCHAR(30),
                wp_hips_in VARCHAR(30),
                wp_hips_cm VARCHAR(30))")
 or die( mysqli_connect_error() ); 
                                mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('4/XS','24-25.5', '60-64' , '34-35.5' ,'84-90' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('5/S','26-27.5', '66-68' , '36-37.5' ,'91-95' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('6/M','28-29.5', '71-73' , '38-39.5' ,'96-100' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('7/L','30-31.5', '76-80' , '40-41.5' ,'101-105' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('8/XL','32-33.5', '81-83' , '42-43.5' ,'106-110' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('9/2XL','34-35.5', '86-88' , '44-45.5' ,'111-115' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('10/3XL','36-37.5', '91-93' , '46-47.5' ,'116-120' )") or 
    die( mysqli_connect_error() );mysqli_query($S,"INSERT INTO  WPANTIES(wp_size ,  wp_waist_in, wp_waist_cm ,wp_hips_in,wp_hips_cm)  VALUES ('11/4L','38-39.5', '96-100' , '48-49.5' ,'121-125' )") or 
    die( mysqli_connect_error() );
   $query = "SELECT * FROM WPANTIES LIMIT 8";
	$Women_Panties_in = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "سروال داخلي ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_Panties_in , MYSQLI_ASSOC)) {
		
              echo $row['wp_size']. "                " .$row['wp_waist_in'] ."     ". $row['wp_hips_in'];
		echo "<br />";
}
 $query = "SELECT * FROM WPANTIES LIMIT 8";
	$Women_panties_cm = mysqli_query($S, $query) or 
die( mysqli_connect_error()); 
          echo "سروال داخلي ";
          
         echo "<br/>";
	while($row = mysqli_fetch_array ($Women_panties_cm, MYSQLI_ASSOC)) {
		
              echo $row['wp_size']. "                " . $row['wp_waist_cm'] ."   ". $row['wp_hips_cm'];
		echo "<br />";
}



	



 
 
  
 
?>