<!DOCTYPE html>
<html dir="rtl">

<head>
	<title>tablebabay</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<h3 id="t_babycloth">ملابس المواليد </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		//header
				echo "<table id='baby_cm'> 
				<tr>
				<th> العمر </th>
				<th> الوزن </th>
				<th> الطول </th>
				<th> المقاس الأمريكي<br>UK </th>
				</tr> ";
		// result
			while ( $row = mysqli_fetch_array ($baby_cm, MYSQLI_ASSOC) )
			{
				echo "<tr>";
				echo "<td>".$row['b_age']."</td>";
				echo "<td>".$row['b_weight_kg']."</td>";
				echo "<td>".$row['b_height_cm']."</td>";
				echo "<td>".$row['b_us']."</td>";
			} echo "</table>";

		// header
			echo "<table id='baby_inch' style= 'display:none;'>
				<tr>
				<th> العمر </th>
				<th> الوزن </th>
				<th> الطول </th>
				<th> المقاس الأمريكي<br>UK </th>
				</tr> ";
		// result
			while ( $row = mysqli_fetch_array ($baby_inch, MYSQLI_ASSOC) )
			{
				echo "<tr>";
				echo "<td>".$row['b_age']."</td>";
				echo "<td>".$row['b_weight_lb']."</td>";
				echo "<td>".$row['b_height_in']."</td>";
				echo "<td>".$row['b_us']."</td>";
				echo "</tr>";
			} echo "</table>";

			?>
			<button id="clk_baby" class="buttonSwitch" onclick='tableSwitch("baby_cm","baby_inch"),highlight("clk_baby")'>inch</button>
	</div> <!--end tableContainer -->

	<h3 id="t_kbeany">قبعات المواليد </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		// header
			echo "<table id='baby_beany_cm'>
				<tr>
				<th> العمر </th>
				<th> محيط الرأس  </th>
				<th> المقاس العالمي </th>
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
		// header
			echo "<table id='baby_beany_inch' style= 'display:none;'>
				<tr>
				<th> العمر </th>
				<th> محيط الرأس  </th>
			    <th> المقاس العالمي</th>
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

		?>
		<button id="clk_baby_beany" class="buttonSwitch" onclick='tableSwitch("baby_beany_cm","baby_beany_inch"),highlight("clk_baby_beany")'>inch</button>
	</div> <!--end tableContainer -->

	<h3 id="t_onesie"> ملابس الأطفال من 1-7 سنوات </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		// header
			echo "<table id='toddler_cm'>
				<tr>
				<th>العمر </th>
				<th>الطول </th>
				<th>الوزن </th>
				<th>المقاس الأمريكي<br>UK</th>
				<th>المقاس البريطاني<br>US</th>
				<th>المقاس الأوروبي<br>EUR</th>
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

		// header
			echo "<table id='toddler_inch' style= 'display:none;'>
				<tr>
				<th>العمر </th>
				<th>الطول </th>
				<th>الوزن </th>
				<th>المقاس الأمريكي<br>UK</th>
				<th>المقاس البريطاني<br>US</th>
				<th>المقاس الأوروبي<br>EUR</th>
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
			?>
			<button id="clk_toddler" class="buttonSwitch" onclick='tableSwitch("toddler_cm","toddler_inch"),highlight("clk_toddler")'>inch</button>
	</div> <!--end tableContainer -->

	<h3 id="t_kboy"> الأولاد أكبر من 8 سنوات </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		// header
			echo "<table id='boy_cm'>
				<tr>
				<th>المقاس العالمي</th>
				<th>المقاس الأوروبي<br>EUR</th>
				<th>المقاس البريطاني<br>US</th>
				<th>المقاس الأمريكي<br>UK</th>
				<th>الوركين </th>
				<th>الخصر </th>
				<th>الصدر </th>
				<th>الطول </th>
				</tr> ";
		// result
			while ( $row = mysqli_fetch_array ($boy_cm, MYSQLI_ASSOC) )
			{
				echo "<tr>";
				echo "<td>".$row['b_int']."</td>";
				echo "<td>".$row['b_eur']."</td>";
				echo "<td>".$row['b_uk']."</td>";
				echo "<td>".$row['b_us']."</td>";
				echo "<td>".$row['b_hips_cm']."</td>";
				echo "<td>".$row['b_waist_cm']."</td>";
				echo "<td>".$row['b_chest_cm']."</td>";
				echo "<td>".$row['b_height_cm']."</td>";
				echo "</tr>";
			} echo "</table>";

		// header
			echo "<table id='boy_inch' style='display:none;'>
				<tr>
				<th>المقاس العالمي</th>
				<th>المقاس الأوروبي<br>EUR</th>
				<th>المقاس البريطاني<br>US</th>
				<th>المقاس الأمريكي<br>UK</th>
				<th>الوركين </th>
				<th>الخصر </th>
				<th>الصدر </th>
				<th>الطول </th>
				</tr> ";
		// result
			while ( $row = mysqli_fetch_array ($boy_inch, MYSQLI_ASSOC) )
			{
				echo "<tr>";
				echo "<td>".$row['b_int']."</td>";
				echo "<td>".$row['b_eur']."</td>";
				echo "<td>".$row['b_uk']."</td>";
				echo "<td>".$row['b_us']."</td>";
				echo "<td>".$row['b_hips_in']."</td>";
				echo "<td>".$row['b_waist_in']."</td>";
				echo "<td>".$row['b_chest_in']."</td>";
				echo "<td>".$row['b_height_in']."</td>";
				echo "</tr>";
			} echo "</table>";

			?>
			<button id="clk_boy" class="buttonSwitch" onclick='tableSwitch("boy_cm","boy_inch"),highlight("clk_boy")'>inch</button>
	</div> <!--end tableContainer -->

	<h3 id="t_kgirl"> البنات أكثر من 8 سنوات </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		// header
		echo "<table id='girl_cm'>
			<tr>
			<th>المقاس العالمي</th>
			<th>المقاس الأوروبي<br>EUR</th>
			<th>المقاس البريطاني<br>US</th>
			<th>المقاس الأمريكي<br>UK</th>
			<th>الوركين </th>
			<th>الخصر </th>
			<th>الصدر </th>
			<th>الطول </th>
			</tr> ";
		// result
		while ( $row = mysqli_fetch_array ($girl_cm, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['g_int']."</td>";
			echo "<td>".$row['g_eur']."</td>";
			echo "<td>".$row['g_uk']."</td>";
			echo "<td>".$row['g_us']."</td>";
			echo "<td>".$row['g_hips_cm']."</td>";
			echo "<td>".$row['g_waist_cm']."</td>";
			echo "<td>".$row['g_chest_cm']."</td>";
			echo "<td>".$row['g_height_cm']."</td>";
			echo "</tr>";
		} echo "</table>";
		// header
		echo "<table id='girl_inch' style='display:none;'>
			<tr>
			<th>المقاس العالمي</th>
			<th>المقاس الأوروبي<br>EUR</th>
			<th>المقاس البريطاني<br>US</th>
			<th>المقاس الأمريكي<br>UK</th>
			<th>الوركين </th>
			<th>الخصر </th>
			<th>الصدر </th>
			<th>الطول </th>
			</tr> ";
		// result
		while ( $row = mysqli_fetch_array ($girl_inch, MYSQLI_ASSOC) )
		{
			echo "<tr>";
			echo "<td>".$row['g_int']."</td>";
			echo "<td>".$row['g_eur']."</td>";
			echo "<td>".$row['g_uk']."</td>";
			echo "<td>".$row['g_us']."</td>";
			echo "<td>".$row['g_hips_in']."</td>";
			echo "<td>".$row['g_waist_in']."</td>";
			echo "<td>".$row['g_chest_in']."</td>";
			echo "<td>".$row['g_height_in']."</td>";
			echo "</tr>";
		} echo "</table>";
			?>
		<button id="clk_girl" class="buttonSwitch" onclick='tableSwitch("girl_cm","girl_inch"),highlight("clk_girl")'>inch</button>
	</div> <!--end tableContainer -->

	<h3 id="t_kshoes"> أحذية الأطفال </h3>
	<div class="tableContainer">
		<?php require 'table_queries.php';
		// header
		echo "<table id='child_shoes_cm'>
			<tr>
			<th>العمر</th>
			<th>طول القدم </th>
			<th>المقاس الأمريكي<br>UK</th>
			<th>المقاس البريطاني <br>US</th>
			<th>المقاس الأوروبي<br>EUR</th>
      		<th>المقاس الياباني</th>
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
		// header
		echo "<table id='child_shoes_inch' style='display:none'>
			<tr>
			<th>العمر</th>
			<th>طول القدم </th>
			<th>المقاس الأمريكي<br>UK</th>
			<th>المقاس البريطاني <br>US</th>
			<th>المقاس الأوروبي<br>EUR</th>
			<th>المقاس الياباني</th>
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
		
			?>
			<button id="clk_child_shoes" class="buttonSwitch" onclick='tableSwitch("child_shoes_cm","child_shoes_inch"),highlight("clk_child_shoes")'>inch</button>
	</div> <!--end tableContainer -->

<script type="text/javascript">

function tableSwitch(cm,inch) {
   var tcm = document.getElementById(cm); 
   var tinch = document.getElementById(inch);

   tcm.style.display = (
       tcm.style.display == "none" ? "block" : "none"); 
   tinch.style.display = (
       tinch.style.display == "none" ? "block" : "none"); 
}
 
function highlight(btn) {

    var element = document.getElementById(btn);
    if (element.innerHTML == "inch") {
       element.style.background = "#DAD4D4";
       element.innerHTML = "cm";
    }
    else{
    element.style.background = "#FFFFFF";
    element.innerHTML = "inch";
  }
}
</script>
</body>
</html>