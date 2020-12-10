<!DOCTYPE html>
<html dir="rtl">

<head>
	<title>tablebabay</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
	<h3 id="t_wshirt">ملابس علوية</h3>
    <div class="tableContainer">
         <div class="warpper">
            <input class="radio" id="wt1" name="wtop" type="radio" checked>
            <input class="radio" id="wt2" name="wtop" type="radio">
            <input class="radio" id="wt3" name="wtop" type="radio">

         <div class="tabs">
              <label class="tab" id="t_wt1" for="wt1">المقاسات</label>
              <label class="tab" id="t_wt2" for="wt2">مقاسات صغيرة</label>
              <label class="tab" id="t_wt3" for="wt3">مقاسات كبيرة</label>
         </div>

         <div class="panels"> 
         	<div class="panel" id="w_top" >
         		<?php require 'table_queries.php';
         		// header
				echo "<table id='women_tops_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th>  المقاس الأمريكي<br>UK </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف </th>
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

				// header
				echo "<table id='women_tops_inch' style='display:none;'>
					<tr>
					<th> المقاس العالمي </th>
					<th> المقاس الأوروبي<br>EUR</th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK </th>
					<th> محيط الصدر </th>
					<th>  محيط الخصر </th>
					<th> محيط الارداف </th>
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

         		?>
         		<button id="clk1_wtop" class="buttonSwitch" onclick='tableSwitch("women_tops_cm","women_tops_inch"),highlight("clk1_wtop")'>inch</button>
         	</div> <!-- end panel 1 -->

        	<div class="panel" id="petite_top" >
        		<?php require 'table_queries.php';
        		// header
				echo "<table id='petite_women_tops_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th> المقاس البريطاني<br>US </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th> محيط الخصر </th>
		            <th> محيط الارداف  </th>
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
				// header
				echo "<table id='petite_women_tops_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR   </th>
					<th>  المقاس البريطاني<br>US </th>
					<th>  المقاس الأمريكي<br>UK  </th>
					<th> محيط الصدر </th>
					<th> محيط الخصر </th>
					<th> محيط الارداف  </th>
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
        		?>

        		<button id="clk2_wtop" class="buttonSwitch" onclick='tableSwitch("petite_women_tops_cm","petite_women_tops_inch"),highlight("clk2_wtop")'>inch</button>   
         	</div> <!-- end panel 2 -->

    		<div class="panel" id="plus_top" >
    			<?php require 'table_queries.php';
    			// header
				echo "<table id='plus_women_tops_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
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
				// header
				echo "<table id='plus_women_tops_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
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

    			 ?>
               <button id="clk3_wtop" class="buttonSwitch" onclick='tableSwitch("plus_women_tops_cm","plus_women_tops_inch"),highlight("clk3_wtop")'>inch</button>   
    		</div><!-- end panel 3 -->
	  </div> <!-- end panels -->
	</div><!-- end warpper -->
	</div> <!--end container -->

	<h3 id="t_wdress"> الفساتين </h3>
    <div class="tableContainer">
          <div class="warpper">
            <input class="radio" id="wd1" name="wdress" type="radio" checked>
            <input class="radio" id="wd2" name="wdress" type="radio">
            <input class="radio" id="wd3" name="wdress" type="radio">

         <div class="tabs">
              <label class="tab" id="t_wd1" for="wd1">المقاسات</label>
              <label class="tab" id="t_wd2" for="wd2">مقاسات صغيرة</label>
              <label class="tab" id="t_wd3" for="wd3">مقاسات كبيرة</label>
         </div>

         <div class="panels"> 
         	<div class="panel" id="dress" >
         		<?php require 'table_queries.php';
		        // header
				echo "<table id='women_dress_cm'>
					<tr>
					<th>  المقاس العالمي   </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK </th>
					<th> محيط الصدر </th>
					<th> محيط الخصر</th>
					<th> محيط الارداف  </th>
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
				// header
				echo "<table id='women_dress_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK  </th>
					<th> محيط الصدر </th>
					<th>  محيط الخصر </th>
					<th> محيط الارداف  </th>
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

         		?>
         		<button id="clk1_wdress" class="buttonSwitch" onclick='tableSwitch("women_dress_cm","women_dress_inch"),highlight("clk1_wdress")'>inch</button>
         	</div> <!-- end panel 1 -->

        	<div class="panel" id="petite_dress">
        		<?php require 'table_queries.php';
        		// header
				echo "<table id='petite_women_dress_cm'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK  </th>
					<th> محيط الصدر </th>
					<th>  محيط الخصر </th>
					<th> محيط الارداف </th>
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
				// header
				echo "<table id='petite_women_dress_inch' style='display: none'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US </th>
					<th>  المقاس الأمريكي<br>UK  </th>
					<th> محيط الصدر </th>
					<th>  محيط الخصر </th>
					<th> محيط الارداف </th>
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

        		?>
        		<button id="clk2_wdress" class="buttonSwitch" onclick='tableSwitch("petite_women_dress_cm","petite_women_dress_inch"),highlight("clk2_wdress")'>inch</button>   
         	</div> <!-- end panel 2 -->

    		<div class="panel" id="plus_dress" >
    			<?php require 'table_queries.php';
    			// header
				echo "<table id='plus_women_dress_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
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
				// header
				echo "<table id='plus_women_dress_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
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
    			
    			 ?>
               <button id="clk3_wdress" class="buttonSwitch" onclick='tableSwitch("plus_women_dress_cm","plus_women_dress_inch"),highlight("clk3_wdress")'>inch</button>   
    		</div><!-- end panel 3 -->
  		</div> <!-- end panels -->
	</div><!-- end warpper -->
	</div> <!--end container -->

	<h3 id="t_wskirt"> التنانير </h3>
    <div class="tableContainer">
          <div class="warpper">
            <input class="radio" id="ws1" name="wskirt" type="radio" checked>
            <input class="radio" id="ws2" name="wskirt" type="radio">
            <input class="radio" id="ws3" name="wskirt" type="radio">

         <div class="tabs">
              <label class="tab" id="t_ws1" for="ws1">المقاسات</label>
              <label class="tab" id="t_ws2" for="ws2">مقاسات صغيرة</label>
              <label class="tab" id="t_ws3" for="ws3">مقاسات كبيرة</label>
         </div>

         <div class="panels"> 
         	<div class="panel" id="skirt" >
         		<?php require 'table_queries.php';
         		// header
				echo "<table id='women_skirts_cm'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK  </th>
					<th>  محيط الخصر </th>
					<th> محيط الارداف  </th>
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
				// header
				echo "<table id='women_skirts_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
					<th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th>  المقاس الأمريكي<br>UK </th>
					<th>  محيط  الخصر </th>
					<th> محيط الارداف  </th>
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
		        
         		?>
         		<button id="clk1_wskirt" class="buttonSwitch" onclick='tableSwitch("women_skirts_cm","women_skirts_inch"),highlight("clk1_wskirt")'>inch</button>
         	</div> <!-- end panel 1 -->

        	<div class="panel" id="petite_skirt">
        		<?php require 'table_queries.php';
        		// header
				echo "<table id='petite_women_skirts_cm'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR </th>
					<th>  المقاس البريطاني<br>US  </th>
					<th> المقاس الامركي  </th>
					<th> محيط الخصر </th>
					<th>محيط الارداف  </th>
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
				// header
				echo "<table id='petite_women_skirts_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
					<th>  المقاس الأوروبي<br>EUR  </th>
					<th> المقاس البريطاني<br>US </th>
					<th> المقاس الأمريكي<br>UK  </th>
					<th>  محيط الخصر </th>
					<th>محيط الارداف </th>
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
        		
        		?>
        		<button id="clk2_wskirt" class="buttonSwitch" onclick='tableSwitch("petite_women_skirts_cm","petite_women_skirts_inch"),highlight("clk2_wskirt")'>inch</button>   
         	</div> <!-- end panel 2 -->

    		<div class="panel" id="plus_skirt" >
    			<?php require 'table_queries.php';
    			// header
				echo "<table id='plus_women_skirts_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
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
				// header
				echo "<table id='plus_women_skirts_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th> محيط الصدر </th>
		            <th>  محيط الخصر </th>
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
		    			
    			 ?>
               <button id="clk3_wskirt" class="buttonSwitch" onclick='tableSwitch("plus_women_skirts_cm","plus_women_skirts_inch"),highlight("clk3_wskirt")'>inch</button>   
    		</div><!-- end panel 3 -->
		 </div> <!-- end panels -->
	</div><!-- end warpper -->
	</div> <!--end container -->

	<h3 id="t_wpants"> البناطيل </h3>
    <div class="tableContainer">
          <div class="warpper">
            <input class="radio" id="wp1" name="wpants" type="radio" checked>
            <input class="radio" id="wp2" name="wpants" type="radio">
            <input class="radio" id="wp3" name="wpants" type="radio">

         <div class="tabs">
              <label class="tab" id="t_wp1" for="wp1">المقاسات</label>
              <label class="tab" id="t_wp2" for="wp2">مقاسات صغيرة</label>
              <label class="tab" id="t_wp3" for="wp3">مقاسات كبيرة</label>
         </div>

         <div class="panels"> 
         	<div class="panel" id="pants" >
         		<?php require 'table_queries.php';
         		// header
				echo "<table id='women_pants_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th>  المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
		            <th> طول الساق </th>
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
				//  hreader
				echo "<table id='women_pants_inch' style='display:none'>
					<tr>

					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th>  المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
		            <th> طول الساق</th>
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
		        
         		?>
         		<button id="clk1_wpants" class="buttonSwitch" onclick='tableSwitch("women_pants_cm","women_pants_inch"),highlight("clk1_wpants")'>inch</button>
         	</div> <!-- end panel 1 -->

        	<div class="panel" id="petite_pants">
        		<?php require 'table_queries.php';
        		// header
				echo "<table id='petite_women_pants_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th> المقاس البريطاني<br>US  </th>
		            <th>  المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف </th>
		            <th> طول الساق </th>
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
				//  header
				echo "<table id='petite_women_pants_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
		            <th>  المقاس الأوروبي<br>EUR  </th>
					<th> المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف </th>
		            <th>طول الساق  </th>
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
        		
        		?>
        		<button id="clk2_wpants" class="buttonSwitch" onclick='tableSwitch("petite_women_pants_cm","petite_women_pants_inch"),highlight("clk2_wpants")'>inch</button>   
         	</div> <!-- end panel 2 -->

    		<div class="panel" id="plus_pants" >
    			<?php require 'table_queries.php';
    			// header
				echo "<table id='plus_women_pants_cm'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
		            <th> طول الساق  </th>
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
				//  hreader
				echo "<table id='plus_women_pants_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
		            <th> المقاس الأوروبي<br>EUR  </th>
					<th>  المقاس البريطاني<br>US  </th>
		            <th> المقاس الأمريكي<br>UK  </th>
		            <th>  محيط الخصر </th>
		            <th> محيط الارداف  </th>
		            <th> طول الساق  </th>
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
    			 ?>
               <button id="clk3_wpants" class="buttonSwitch" onclick='tableSwitch("plus_women_pants_cm","plus_women_pants_inch"),highlight("clk3_wpants")'>inch</button>   
    		</div><!-- end panel 3 -->
		 </div> <!-- end panels -->
	</div><!-- end warpper -->
	</div> <!--end container -->

	<h3 id="t_tights"> الجوارب الطويلة </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		// headrer
				echo "<table id='women_tight_cm'>
					<tr>
					<th>المقاس العالمي </th>
					<th>محيط الارداف </th>
		            <th> طول الجوارب </th>
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
				// header
				echo "<table id='women_tight_inch' style='display:none'>
					<tr>
					<th> المقاس العالمي </th>
					<th> محيط الارداف    </th>
		            <th>طول الجوارب  </th>
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

         		?>
         		<button id="clk1_wtight" class="buttonSwitch" onclick='tableSwitch("women_tight_cm","women_tight_inch"),highlight("clk1_wtight")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wshoes"> الأحذية </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		// header
				echo "<table id='women_shoes_cm'>
					<tr>
					<th>  المقاس الأوروبي<br>EUR </th>
					<th>  المقاس البريطاني<br>US   </th>
		            <th>  المقاس الأمريكي<br>UK   </th>
		            <th>  طول القدم  </th>
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
				//header
				echo "<table id='women_shoes_inch' style='display:none'>
					<tr>
					<th>  المقاس الأوروبي<br>EUR </th>
					<th>  المقاس البريطاني<br>US   </th>
		            <th>  المقاس الأمريكي<br>UK   </th>
		            <th>  طول القدم </th>
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
         		
         		?>
         		<button id="clk1_wshoes" class="buttonSwitch" onclick='tableSwitch("women_shoes_cm","women_shoes_inch"),highlight("clk1_wshoes")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wring"> الخواتم </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		//header
				echo "<table id='women_ring_cm'>
					<tr>
					<th>المقاس العالمي </th>
					<th> محيط الخاتم </th>
					</tr> ";
				//result
				while ( $row = mysqli_fetch_array ($women_ring_cm, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wr_int']."</td>";
					echo "<td>".$row['wr_cir_mm']."</td>";
					echo "</tr>";
				} echo "</table>";
				//header
				echo "<table id='women_ring_inch' style='display:none'>
					<tr>
					<th>المقاس العالمي </th>
					<th> محيط الخاتم </th>
					</tr> ";
				//result
				while ( $row = mysqli_fetch_array ($women_ring_inch, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wr_int']."</td>";
					echo "<td>".$row['wr_cir_inch']."</td>";
					echo "</tr>";
				} echo "</table>";
         		
         		?>
         		<button id="clk1_wring" class="buttonSwitch" onclick='tableSwitch("women_ring_cm","women_ring_inch"),highlight("clk1_wring")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wbelt"> الأحزمة </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		//header
				echo "<table id='women_belt_cm'>
					<tr>
					<th>المقاس العالمي </th>
					<th> محيط الخصر </th>
					</tr> ";
				//result
				while ( $row = mysqli_fetch_array ($women_belt_cm, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wb_int']."</td>";
					echo "<td>".$row['wb_waist_cm']."</td>";
					echo "</tr>";
				} echo "</table>";
				//header
				echo "<table id='women_belt_inch' style='display:none'>
					<tr>
					<th>المقاس العالمي </th>
					<th> محيط الخصر  </th>
					</tr> ";
				//result
				while ( $row = mysqli_fetch_array ($women_belt_inch, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wb_int']."</td>";
					echo "<td>".$row['wb_waist_in']."</td>";
					echo "</tr>";
				} echo "</table>";
         			
         		?>
         		<button id="clk1_wbelt" class="buttonSwitch" onclick='tableSwitch("women_belt_cm","women_belt_inch"),highlight("clk1_wbelt")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_abaya"> عباءة </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
		         //header
				echo "<table id='women_abaya_cm'>
					<tr>
					<th>مقاس العباية </th>
					<th>طول العباية </th>
					<th>عرض العباية </th>
					<th>طول الكم </th>
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
				//header
				echo "<table id='women_abaya_inch' style='display:none'>
					<tr>
					<th>مقاس العباية </th>
					<th>طول العباية  </th>
					<th>عرض العباية </th>
					<th>طول الكم </th>
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
         		?>
         		<button id="clk1_wabaya" class="buttonSwitch" onclick='tableSwitch("women_abaya_cm","women_abaya_inch"),highlight("clk1_wabaya")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wuderwear"> الملابس الداخلية </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
		         // header
				echo "<table id='women_underwear_cm'>
					<tr>
					<th>المقاس العالمي </th>
					<th>المقاس البريطاني<br>US </th>
					<th>محيط الخصر </th>
					<th>محيط الارداف </th>
					</tr> ";
				// result
				while ( $row = mysqli_fetch_array ($women_underwear_cm, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wun_int']."</td>";
		            echo "<td>".$row['wun_uk']."</td>";
					echo "<td>".$row['wun_waist_cm']."</td>";
					echo "<td>".$row['wun_hips_cm']."</td>";
					echo "</tr>";
				} echo "</table>";
				// header
				echo "<table id='women_underwear_inch' style='display:none'>
					<tr>
					<th>المقاس العالمي </th>
					<th>المقاس البريطاني<br>US </th>
					<th>محيط الخصر </th>
					<th>محيط الارداف </th>
					</tr> ";
				// result
				while ( $row = mysqli_fetch_array ($women_underwear_inch, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wun_int']."</td>";
		            echo "<td>".$row['wun_uk']."</td>";
					echo "<td>".$row['wun_waist_in']."</td>";
					echo "<td>".$row['wun_hips_in']."</td>";
					echo "</tr>";
				} echo "</table>";
         		?>
         		<button id="clk1_wunder" class="buttonSwitch" onclick='tableSwitch("women_underwear_cm","women_underwear_inch"),highlight("clk1_wunder")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wbra"> ملابسداخلية علوية </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		// header
				echo "<table id='women_bra_cm'>
					<tr>
					<th>المقاس </th>
		            <th>مقاس تكور حمالة الصدر </th>
					<th>محيط الصدر </th>
		            <th>محيط اسفل الصدر </th>
		            </tr> ";
				// result
				while ( $row = mysqli_fetch_array ($women_bra_cm, MYSQLI_ASSOC) )
				{
					echo "<tr>";
					echo "<td>".$row['wbra_size']."</td>";
					echo "<td>".$row['cup_size']."</td>";
		            echo "<td>".$row['overbust_cm']."</td>";
		            echo "<td>".$row['wbra_underbust_cm']."</td>";
					echo "</tr>";
				} echo "</table>";
				// header
				echo "<table id='women_bra_inch' style='display:none'>
					<tr>
					<th>المقاس </th>
					<th>مقاس تكور حمالة الصدر </th>
					<th>محيط الصدر </th>
					<th>محيط اسفل الصدر </th>
					</tr> ";
				// result
				while ( $row = mysqli_fetch_array ($women_bra_inch, MYSQLI_ASSOC) )
				{
					echo "<tr>";
		            echo "<td>".$row['wbra_size']."</td>";
		            echo "<td>".$row['cup_size']."</td>";
					echo "<td>".$row['overbust_in']."</td>";
		            echo "<td>".$row['wbra_underbust_in']."</td>";
					echo "</tr>";
				} echo "</table>";
         		?>
         		<button id="clk1_wbra" class="buttonSwitch" onclick='tableSwitch("women_bra_cm","women_bra_inch"),highlight("clk1_wbra")'>inch</button>
	</div> <!--end container -->

	<h3 id="t_wperg">  الحمل </h3>
    <div class="tableContainer">
         		<?php require 'table_queries.php';
         		//header
				echo "<table id='women_maternity_cm'>
					<tr>
					<th>المقاس العالمي </th>
					<th>محيط الصدر  </th>
					<th>محيط اسفل الصدر </th>
					<th>محيط الارداف</th>
					<th>طول الساق </th>
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
				//header
				echo "<table id='women_maternity_inch' style='display:none'>
					<tr>
					<th>المقاس العالمي </th>
					<th>محيط الصدر </th>
					<th>محيط اسفل الصدر </th>
					<th>محيط الارداف </th>
					<th>طول الساق </th>
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
         		
         		?>
         		<button id="clk1_wmen" class="buttonSwitch" onclick='tableSwitch("women_maternity_cm","women_maternity_inch"),highlight("clk1_wmen")'>inch</button>
	</div> <!--end container -->

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