<!DOCTYPE html>
<html>
<head>
	<title>PTITE WOMEN dress</title>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
<?php
	$S = mysqli_connect("localhost","root" ,"","WSDB")
or die( mysqli_connect_error() );
     $query  = "SELECT * FROM WS LIMIT 4";
	$ptite_women_dress_in = mysqli_query($S, $query ) or 
die( mysqli_connect_error()); 
          echo "الفساتين للمقاسات الصغيرة ";
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
          echo "الفساتين  للمقاسات الصغيرة  ";
           echo "<br/>";
          echo "international sizes"."   "."EUR"."    " . " UK" ."   ". "US" ."   ". "BUST IN CM" ."   ". "WAIST IN CM" ."   ". "HIPS IN CM";
         echo "<br/>";
	while($row = mysqli_fetch_array ($ptite_women_dress_cm, MYSQLI_ASSOC)) {
		
              echo $row['w_int']. "                " .$row['w_eur'] . "                " . $row['w_uk'] ."  ".$row['w_bust_cm']."          ".$row['w_waist_cm']."          ".$row['w_hips_cm'];
		echo "<br />";
}
?>
</body>
</html>