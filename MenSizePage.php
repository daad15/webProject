<!DOCTYPE html>
<html>
<head>
	<title>Rakez</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="mainStyle" href="mainStyle.css">
  <link rel="stylesheet" href="tableStyle.css">
	<style>
.sectionOne {
  height: 670px;
  position: relative;

  }
 
/**code credit for this class https://www.youtube.com/watch?v=FVmL_esftkQ&feature=youtu.be **/
.sectionTwo {
  height: 670px;
  position: relative;
  display: table;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1em;
}

 /**adject section height here*/
.sectionThree {
  background-color: #f2eeec; 
  position: relative;
  
  border-radius: 80px;
  margin-left: auto;
  margin-right: auto;
  height:  auto; 
  max-width: 80%;
  min-width: auto;

} 
.sectionFour {
   height: 120px;
 }
 .categoryContainer{
  position: relative;
  margin-left: auto;
  margin-right: auto;
  margin-top: 90px;
  max-height: 270px;
  max-width: 800px;

  display: block;

 }
 /**code credit for this class https://www.youtube.com/watch?v=FVmL_esftkQ&feature=youtu.be **/
 .BgContainer{ /**to center the three icon containers "iconBackground" **/
    display: table-cell;
    vertical-align: middle;
   width: 70%; 
}
.iconsBackground { /**sectionTwo icons container with background color**/
  position: relative;
  content: "";
  clear: both;
  display: table; 
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  border-radius: 80px;
  background: #f2eeec;
  padding: 20px;
  max-width: 56.25em;
  max-height: 7.5em;
}

 .categoryContainer p { /**labels style for sectionOne's icons**/ 
  font-family: Questv1;
  font-size:1.5vw;
  color: #474745; 
  position: absolute;
  top: 180px;} 

.iconContainer{ /**container for each clothes icon**/
  width: 0%;
  padding: 2px;
  display: table-cell;
 text-align: center;
}
.iconContainer p{
 font-family: Questv1;
  font-size: 19px;
  color: #474745; 
  margin: 0; 
}
.iconContainer img{
  width: 110px;
  height: auto;
}

 #logo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 120px;
    height: auto; }

/**gender**/
#womanIcon{
   max-width: 225px;
    height: auto;
    position: absolute;
    left: 10px;
  }
 
#manIcon{
   max-width: 185px;
    height: auto;
    position: absolute;
    left: 310px;
  }

 #childIcon{
   width: 200px;
    height: auto;
    position: absolute;
    left: 550px;
      }
#label1{left:70px;}  
#label2{left:320px;}  
#label3{left:565px;}  


#bar{
  position: absolute;
  top: 550px;
  width: 80%;
  height: auto;
  right: 10%;
  margin-right: : -10px;
  top: 88%;
  margin-top: -88px;
}
/**overwrite some styles**/
#Mthoub{
  width: 80px;
  height: auto;
}
#top{
  margin-top: 0px;
}
#pregnantCon{
 border-left: #383836 dashed 3bpx;
}


</style>


</head>
<body>

<div calss=mainPage>

<div class=sectionOne id=sectionOne>
   <img src="images/logo.jpg" alt="Rakez Logo" id=logo  >
   <div class= categoryContainer>
      <img src="images/woman.jpg" alt="woman icon" id=womanIcon onclick="smoothScroll(document.getElementById('sectionTwo'))" >
    <img src="images/man.jpg" alt="man icon" id=manIcon onclick="smoothScroll(document.getElementById('sectionTwo'))">
    <img src="images/child.jpg" alt="child icon" id=childIcon onclick="smoothScroll(document.getElementById('sectionTwo'))">
    <p id=label1 onclick="smoothScroll(document.getElementById('sectionTwo'))">مقاسات نساء</p>
    <p id=label2 onclick="smoothScroll(document.getElementById('sectionTwo'))">مقاسات رجـال</p>
    <p id=label3 onclick="smoothScroll(document.getElementById('sectionTwo'))">مقاسات أطفال</p>
   </div>
       <img src="images/bar.jpg" alt="bar" id=bar >
     </div> 
  <div class=sectionTwo id=sectionTwo>
   <div class=BgContainer> 
     <div class=iconsBackground id=top>
        <div class=iconContainer><img src="images/thoub.png" alt="thoub icon" id="Mthoub" onclick="smoothScroll(document.getElementById('t_mthoub'))"><p id=thoubtxt onclick="smoothScroll(document.getElementById('t_mthoub'))">ثوب</p></div>
       <div class=iconContainer><img src="images/Tshirt.png" alt="Tshirt icon" id="shirt" onclick="smoothScroll(document.getElementById('t_mtops'))"><p id=shirttxt onclick="smoothScroll(document.getElementById('t_mtops'))">ملابس علوية</p></div>
       <div class=iconContainer><img src="images/shirts.png" alt="shirt icon" id="Mshirt" onclick="smoothScroll(document.getElementById('t_mshirt'))"><p id=shirttxt onclick="smoothScroll(document.getElementById('t_mshirt'))">قمصان</p></div>
       <div class=iconContainer><img src="images/pants.png" alt="pants icon" id="panst" onclick="smoothScroll(document.getElementById('t_mpants'))"><p id=pantstxt onclick="smoothScroll(document.getElementById('t_mpants'))">بناطيل</p></div>
     </div>
     <div class=iconsBackground id=middle>
       <div class=iconContainer><img src="images/bottom.png" alt="bottoms icon" id="Mbottoms" onclick="smoothScroll(document.getElementById('t_munderwear'))"><p id=bottomstxt onclick="smoothScroll(document.getElementById('t_munderwear'))">ملابس داخلية</p></div>
     </div>
      <div class=iconsBackground id=bottom>
        <div class=iconContainer><img src="images/shmakh.png" alt="arab shmakh icon" id="Mshmakh" onclick="smoothScroll(document.getElementById('t_mshmagh'))"><p id=skirttxt onclick="smoothScroll(document.getElementById('t_mshmagh'))">شماغ</p></div>
       <div class=iconContainer><img src="images/cap.png" alt="ring icon" id="Mcap" onclick="smoothScroll(document.getElementById('t_mhat'))"><p id=captxt onclick="smoothScroll(document.getElementById('t_mhat'))">قبعة</p></div>
       <div class=iconContainer><img src="images/belt.png" alt="belt icon" id="belt" onclick="smoothScroll(document.getElementById('t_mbelt'))"><p id=belttxt onclick="smoothScroll(document.getElementById('t_mbelt'))">أحزمة</p></div>  
       <div class=iconContainer><img src="images/shoe.png" alt="shoe icon" id="Mshoe" onclick="smoothScroll(document.getElementById('t_mshoes'))"><p id=shoetxt onclick="smoothScroll(document.getElementById('t_mshoes'))">أحذية</p></div>        
       
        
      </div>
      </div> <!--end of BgContainer-->
     </div> <!--end of sectionTwo-->

<div class=sectionThree id=sectionThree> 
 <!--insert schudels here-->
    <!--top schudels -->
  
    <div class="tableContainer">
      <h3 id="t_mthoub"> الثوب  </h3>
         <div class="warpper">
            <input class="radio" id="mth1" name="mthoub" type="radio" checked>
            <input class="radio" id="mth2" name="mthoub" type="radio">
            <input class="radio" id="mth3" name="mthoub" type="radio">

         <div class="tabs">
              <label class="tab" id="t_mth1" for="mth1">الرجال</label>
              <label class="tab" id="t_mth2" for="mth2">  الشباب</label>
              <label class="tab" id="t_mth3" for="mth3">  الأطفال </label>
         </div>

         <div class="panels"> 
          <div class="panel" id="m_thoub" >
            <?php require 'table_queries.php';
            //header
            echo "<table>
              <tr >
              <th>العرض</th>
              <th>الطول</th>
              <th>المقاس</th>
              </tr> ";
            //result
            while ( $row = mysqli_fetch_array ($men_thoub, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mth_chest']."</td>";
              echo "<td>".$row['mth_length']."</td>";
              echo "<td>".$row['mth_size']."</td>";
              echo "</tr>";
            } 
            echo "<tr id='tr_mthoub_clkMore'><td colspan='3'>
                <a onclick=\"loadmore('tr_mthoub_clkMore','m_thoub_more')\">عرض المزيد</a></td></tr>";
            echo "</table>";
            ?>
            <span id='m_thoub_more' style='display:none'>
              <?php require 'table_queries.php';
              //header
              echo "<table>
                <tr>
                <th>العرض</th>
                <th>الطول<sup>> 150</sup></th>
                <th>المقاس</th>
                </tr> ";
              //more rows when click button
                while ( $row = mysqli_fetch_array ($men_thoub_more, MYSQLI_ASSOC) )
                {
                  echo "<tr>";
                  echo "<td>".$row['mth_chest']."</td>";
                  echo "<td>".$row['mth_length']."</td>";
                  echo "<td>".$row['mth_size']."</td>";
                  echo "</tr>";
                }
              echo "<tr><td colspan='3'>
                <a onclick=\"less('m_thoub_more')\">عرض أقل</a></td></tr>"; 
              echo "</table>";
                  ?>
                 </span>
          </div> <!-- end panel 1 -->

          <div class="panel" id="y_thoub" >
            <?php require 'table_queries.php';
            //header
            echo "<table>
              <tr>
              <th>العرض</th>
              <th>الطول</th>
              <th>المقاس</th>
              </tr> ";
            //result
            while ( $row = mysqli_fetch_array ($youth_thoub, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mth_chest']."</td>";
              echo "<td>".$row['mth_length']."</td>";
              echo "<td>".$row['mth_size']."</td>";
              echo "</tr>";
            }echo "<tr id='tr_ythoub_clkMore'><td colspan='3'>
                <a onclick=\"loadmore('tr_ythoub_clkMore','y_thoub_more')\">عرض المزيد</a></td></tr>"; 
            echo "</table>";
                    
             ?> 
             <span id='y_thoub_more' style='display:none'>
          <?php require 'table_queries.php';
          //header
          echo "<table>
            <tr>
            <th>العرض</th>
            <th>الطول<sup>> 120</sup></th>
            <th>المقاس</th>
            </tr> ";
          //more rows when click button
            while ( $row = mysqli_fetch_array ($youth_thoub_more, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mth_chest']."</td>";
              echo "<td>".$row['mth_length']."</td>";
              echo "<td>".$row['mth_size']."</td>";
              echo "</tr>";
            }echo "<tr><td colspan='3'>
            <a onclick=\"less('y_thoub_more')\">عرض أقل</a></td></tr>"; 
          echo "</table>";
               ?>
             </span>
          </div> <!-- end panel 2 -->
          <div class="panel" id="ch_thoub" >
            <?php require 'table_queries.php';
            //header
              echo "<table>
                <tr>
                <th>العرض</th>
                <th>الطول</th>
                <th>المقاس</th>
                </tr> ";
              //result
              while ( $row = mysqli_fetch_array ($child_thoub, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mth_chest']."</td>";
                echo "<td>".$row['mth_length']."</td>";
                echo "<td>".$row['mth_size']."</td>";
                echo "</tr>";
              }
              echo "<tr id='tr_chthoub_clkMore'><td colspan='3'>
                  <a onclick=\"loadmore('tr_chthoub_clkMore','ch_thoub_more')\">عرض المزيد</a></td></tr>"; 
              echo "</table>";
                ?> 
                <span id='ch_thoub_more' style='display:none'>
                  <?php require 'table_queries.php';
                  //header
                  echo "<table>
                    <tr>
                    <th>العرض</th>
                    <th>الطول<sup>> 70</sup></th>
                    <th>المقاس</th>
                    </tr> ";
                  //more rows when click button
                    while ( $row = mysqli_fetch_array ($child_thoub_more, MYSQLI_ASSOC) )
                    {
                      echo "<tr>";
                      echo "<td>".$row['mth_chest']."</td>";
                      echo "<td>".$row['mth_length']."</td>";
                      echo "<td>".$row['mth_size']."</td>";
                      echo "</tr>";
                    }echo "<tr><td colspan='3'>
                    <a onclick=\"less('ch_thoub_more')\">عرض أقل</a></td></tr>"; 
                  echo "</table>";
                   ?>
               </span> 
          </div><!-- end panel 3 -->
    </div> <!-- end panels -->
  </div><!-- end warpper -->
  </div> <!--end container -->   
   
  
    <div class="tableContainer">
      <h3 id="t_mtops">الملابس العلوية </h3>
         <div class="warpper">
            <input class="radio" id="mt1" name="mtop" type="radio" checked>
            <input class="radio" id="mt2" name="mtop" type="radio">
            <input class="radio" id="mt3" name="mtop" type="radio">

         <div class="tabs">
              <label class="tab" id="t_mt1" for="mt1">المقاسات</label>
              <label class="tab" id="t_mt2" for="mt2"> مقاسات طويلة</label>
              <label class="tab" id="t_mt3" for="mt3"> مقاسات القصيرة </label>
         </div>

         <div class="panels"> 
          <div class="panel" id="mtop" >
            <?php require 'table_queries.php';
            // header
            echo "<table id='men_tops_cm'>
              <tr>
              <th> المقاس العالمي</th>            
              <th>المقاس الأوروبي<br>EUR </th>
              <th>المقاس الأمريكي<br>UK <br></th>
                    <th> الصدر</th>
                    <th> الخصر</th>
                    <th>تقويرة العنق</th>
                    <th> طول الذراع</th>
                    <th> الطول </th>
              </tr> ";
            // result
            while ( $row = mysqli_fetch_array ($men_tops_cm, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mt_int']."</td>";            
              echo "<td>".$row['mt_eur']."</td>";
                    echo "<td>".$row['mt_uk']."</td>";
                    echo "<td>".$row['mt_chest_cm']."</td>";
                    echo "<td>".$row['mt_waist_cm']."</td>";
                    echo "<td>".$row['mt_neckLine_cm']."</td>";
                    echo "<td>".$row['mt_armLength_cm']."</td>";
                    echo "<td>".$row['mt_height_cm']."</td>";
              echo "</tr>";
            } echo "</table>";
            // header
            echo "<table id='men_tops_inch' style='display:none'>
              <tr>
              <th> المقاس العالمي</th>            
              <th>المقاس الأوروبي<br>EUR </th>
              <th>المقاس الأمريكي<br>UK </th>
                    <th> الصدر</th>
                    <th> الخصر</th>
                    <th>تقويرة العنق</th>
                    <th> طول الذراع</th>
                    <th> الطول </th>
              </tr> ";
            // result
            while ( $row = mysqli_fetch_array ($men_tops_inch, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mt_int']."</td>";            
              echo "<td>".$row['mt_eur']."</td>";
                    echo "<td>".$row['mt_uk']."</td>";
                    echo "<td>".$row['mt_chest_in']."</td>";
                    echo "<td>".$row['mt_waist_in']."</td>";
                    echo "<td>".$row['mt_neckLine_in']."</td>";
                    echo "<td>".$row['mt_armLength_in']."</td>";
                    echo "<td>".$row['mt_height_in']."</td>";
              echo "</tr>";
            } echo "</table>";
                ?>
                <button id="clk1_mtop" class="buttonSwitch" onclick='tableSwitch("men_tops_cm","men_tops_inch"),highlight("clk1_mtop")'>inch</button>
          </div> <!-- end panel 1 -->

          <div class="panel" id="long_top" >
            <?php require 'table_queries.php';
            // header
              echo "<table id='long_men_tops_cm'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                      <th>تقويرة العنق</th>
                      <th> طول الذراع</th>
                      <th> الطول </th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($long_men_tops_cm, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mt_int']."</td>";           
                echo "<td>".$row['mt_eur']."</td>";
                      echo "<td>".$row['mt_uk']."</td>";
                      echo "<td>".$row['mt_chest_cm']."</td>";
                      echo "<td>".$row['mt_waist_cm']."</td>";
                      echo "<td>".$row['mt_neckLine_cm']."</td>";
                      echo "<td>".$row['mt_armLength_cm']."</td>";
                      echo "<td>".$row['mt_height_cm']."</td>";
                echo "</tr>";
              } echo "</table>";
              // header
              echo "<table id='long_men_tops_inch' style='display:none'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                      <th>تقويرة العنق</th>
                      <th> طول الذراع</th>
                      <th> الطول </th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($long_men_tops_inch, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mt_int']."</td>";            
                echo "<td>".$row['mt_eur']."</td>";
                      echo "<td>".$row['mt_uk']."</td>";
                      echo "<td>".$row['mt_chest_in']."</td>";
                      echo "<td>".$row['mt_waist_in']."</td>";
                      echo "<td>".$row['mt_neckLine_in']."</td>";
                      echo "<td>".$row['mt_armLength_in']."</td>";
                      echo "<td>".$row['mt_height_in']."</td>";
                echo "</tr>";
              } echo "</table>";
                   ?>
            <button id="clk2_mtop" class="buttonSwitch" onclick='tableSwitch("long_men_tops_cm","long_men_tops_inch"),highlight("clk2_mtop")'>inch</button>   
          </div> <!-- end panel 2 -->

          <div class="panel" id="short_top" >
            <?php require 'table_queries.php';
                // header
                echo "<table id='short_men_tops_cm'>
                  <tr>
                  <th> المقاس العالمي</th>            
                  <th>المقاس الأوروبي<br>EUR </th>
                  <th>المقاس الأمريكي<br>UK </th>
                        <th> الصدر</th>
                        <th> الخصر</th>
                        <th>تقويرة العنق</th>
                        <th> طول الذراع</th>
                        <th> الطول </th>
                  </tr> ";
                // result
                while ( $row = mysqli_fetch_array ($short_men_tops_cm, MYSQLI_ASSOC) )
                {
                  echo "<tr>";
                  echo "<td>".$row['mt_int']."</td>";            
                  echo "<td>".$row['mt_eur']."</td>";
                        echo "<td>".$row['mt_uk']."</td>";
                        echo "<td>".$row['mt_chest_cm']."</td>";
                        echo "<td>".$row['mt_waist_cm']."</td>";
                        echo "<td>".$row['mt_neckLine_cm']."</td>";
                        echo "<td>".$row['mt_armLength_cm']."</td>";
                        echo "<td>".$row['mt_height_cm']."</td>";
                  echo "</tr>";
                } echo "</table>";
                // header
                echo "<table id='short_men_tops_inch' style='display:none;'>
                  <tr>
                  <th> المقاس العالمي</th>            
                  <th>المقاس الأوروبي<br>EUR </th>
                  <th>المقاس الأمريكي<br>UK </th>
                        <th> الصدر</th>
                        <th> الخصر</th>
                        <th>تقويرة العنق</th>
                        <th> طول الذراع</th>
                        <th> الطول </th>
                  </tr> ";
                // result
                while ( $row = mysqli_fetch_array ($short_men_tops_inch, MYSQLI_ASSOC) )
                {
                  echo "<tr>";
                  echo "<td>".$row['mt_int']."</td>";            
                  echo "<td>".$row['mt_eur']."</td>";
                        echo "<td>".$row['mt_uk']."</td>";
                        echo "<td>".$row['mt_chest_in']."</td>";
                        echo "<td>".$row['mt_waist_in']."</td>";
                        echo "<td>".$row['mt_neckLine_in']."</td>";
                        echo "<td>".$row['mt_armLength_in']."</td>";
                        echo "<td>".$row['mt_height_in']."</td>";
                  echo "</tr>";
                } echo "</table>";
                  ?>

                 <button id="clk3_mtop" class="buttonSwitch" onclick='tableSwitch("short_men_tops_cm","short_men_tops_inch"),highlight("clk3_mtop")'>inch</button>   
          </div><!-- end panel 3 -->
    </div> <!-- end panels -->
  </div><!-- end warpper -->
  </div> <!--end container -->

  
    <div class="tableContainer">
      <h3 id="t_mshirt"> القمصان </h3>
         <div class="warpper">
            <input class="radio" id="mshr1" name="mshirt" type="radio" checked>
            <input class="radio" id="mshr2" name="mshirt" type="radio">
            <input class="radio" id="mshr3" name="mshirt" type="radio">

         <div class="tabs">
              <label class="tab" id="t_mshr1" for="mshr1">المقاسات</label>
              <label class="tab" id="t_mshr2" for="mshr2"> مقاسات طويلة</label>
              <label class="tab" id="t_mshr3" for="mshr3"> مقاسات القصيرة </label>
         </div>

         <div class="panels"> 
          <div class="panel" id="mshirt" >
            <?php require 'table_queries.php';
            // header
              echo "<table id='men_shirt_cm'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($men_shirt_cm, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mshr_int']."</td>";            
                echo "<td>".$row['mshr_eur']."</td>";
                      echo "<td>".$row['mshr_uk']."</td>";
                      echo "<td>".$row['mshr_chest_cm']."</td>";
                      echo "<td>".$row['mshr_waist_cm']."</td>";
                echo "</tr>";
              } echo "</table>";
              // header
              echo "<table id='men_shirt_inch' style='display:none'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($men_shirt_inch, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mshr_int']."</td>";            
                echo "<td>".$row['mshr_eur']."</td>";
                      echo "<td>".$row['mshr_uk']."</td>";
                      echo "<td>".$row['mshr_chest_in']."</td>";
                      echo "<td>".$row['mshr_waist_in']."</td>";

                echo "</tr>";
              } echo "</table>";
                  
              ?>
              <button id="clk1_mshirt" class="buttonSwitch" onclick='tableSwitch("men_shirt_cm","men_shirt_inch"),highlight("clk1_mshirt")'>inch</button>
            </div> <!-- end panel 1 -->

            <div class="panel" id="long_shirt" >
              <?php require 'table_queries.php';
              // header
              echo "<table id='long_men_shirt_cm'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                      <th>تقويرة العنق</th>
                      <th> طول الذراع</th>
                      <th> الطول </th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($long_men_shirt_cm, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mshr_int']."</td>";            
                echo "<td>".$row['mshr_eur']."</td>";
                      echo "<td>".$row['mshr_uk']."</td>";
                      echo "<td>".$row['mshr_chest_cm']."</td>";
                      echo "<td>".$row['mshr_waist_cm']."</td>";
                      echo "<td>".$row['mshr_neckLine_cm']."</td>";
                      echo "<td>".$row['mshr_armLength_cm']."</td>";
                      echo "<td>".$row['mshr_height_cm']."</td>";
                echo "</tr>";
              } echo "</table>";
              // header
              echo "<table id='long_men_shirt_inch' style='display:none'>
                <tr>
                <th> المقاس العالمي</th>            
                <th>المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK </th>
                      <th> الصدر</th>
                      <th> الخصر</th>
                      <th>تقويرة العنق</th>
                      <th> طول الذراع</th>
                      <th> الطول </th>
                </tr> ";
              // result
              while ( $row = mysqli_fetch_array ($long_men_shirt_inch, MYSQLI_ASSOC) )
              {
                echo "<tr>";
                echo "<td>".$row['mshr_int']."</td>";            
                echo "<td>".$row['mshr_eur']."</td>";
                      echo "<td>".$row['mshr_uk']."</td>";
                      echo "<td>".$row['mshr_chest_in']."</td>";
                      echo "<td>".$row['mshr_waist_in']."</td>";
                      echo "<td>".$row['mshr_neckLine_in']."</td>";
                      echo "<td>".$row['mshr_armLength_in']."</td>";
                      echo "<td>".$row['mshr_height_in']."</td>";
                echo "</tr>";
              } echo "</table>";
             
               ?>
              <button id="clk2_mshirt" class="buttonSwitch" onclick='tableSwitch("long_men_shirt_cm","long_men_shirt_inch"),highlight("clk2_mshirt")'>inch</button>   
            </div> <!-- end panel 2 -->

          <div class="panel" id="short_shirt" >
            <?php require 'table_queries.php';
            // header
            echo "<table id='short_men_shirt_cm'>
              <tr>
              <th> المقاس العالمي</th>            
              <th>المقاس الأوروبي<br>EUR </th>
              <th>المقاس الأمريكي<br>UK </th>
                    <th> الصدر</th>
                    <th> الخصر</th>
                    <th>تقويرة العنق</th>
                    <th> طول الذراع</th>
                    <th> الطول </th>
              </tr> ";
            // result
            while ( $row = mysqli_fetch_array ($short_men_shirt_cm, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mshr_int']."</td>";            
              echo "<td>".$row['mshr_eur']."</td>";
                    echo "<td>".$row['mshr_uk']."</td>";
                    echo "<td>".$row['mshr_chest_cm']."</td>";
                    echo "<td>".$row['mshr_waist_cm']."</td>";
                    echo "<td>".$row['mshr_neckLine_cm']."</td>";
                    echo "<td>".$row['mshr_armLength_cm']."</td>";
                    echo "<td>".$row['mshr_height_cm']."</td>";
              echo "</tr>";
            } echo "</table>";
        
            // header
            echo "<table id='short_men_shirt_inch' style='display:none'>
              <tr>
              <th> المقاس العالمي</th>            
              <th>المقاس الأوروبي<br>EUR </th>
              <th>المقاس الأمريكي<br>UK </th>
                    <th> الصدر</th>
                    <th> الخصر</th>
                    <th>تقويرة العنق</th>
                    <th> طول الذراع</th>
                    <th> الطول </th>
              </tr> ";
            // result
            while ( $row = mysqli_fetch_array ($short_men_shirt_inch, MYSQLI_ASSOC) )
            {
              echo "<tr>";
              echo "<td>".$row['mshr_int']."</td>";            
              echo "<td>".$row['mshr_eur']."</td>";
                    echo "<td>".$row['mshr_uk']."</td>";
                    echo "<td>".$row['mshr_chest_in']."</td>";
                    echo "<td>".$row['mshr_waist_in']."</td>";
                    echo "<td>".$row['mshr_neckLine_in']."</td>";
                    echo "<td>".$row['mshr_armLength_in']."</td>";
                    echo "<td>".$row['mshr_height_in']."</td>";
              echo "</tr>";
            } echo "</table>";
              ?>

               <button id="clk3_mshirt" class="buttonSwitch" onclick='tableSwitch("short_men_shirt_cm","short_men_shirt_inch"),highlight("clk3_mshirt")'>inch</button>   
          </div><!-- end panel 3 -->
    </div> <!-- end panels -->
  </div><!-- end warpper -->
  </div> <!--end container -->

  
    <div class="tableContainer">
      <h3 id="t_mpants"> البناطيل </h3>
         <div class="warpper">
            <input class="radio" id="mp1" name="mpants" type="radio" checked>
            <input class="radio" id="mp2" name="mpants" type="radio">
            <input class="radio" id="mp3" name="mpants" type="radio">

         <div class="tabs">
              <label class="tab" id="t_mp1" for="mp1">المقاسات</label>
              <label class="tab" id="t_mp2" for="mp2"> مقاسات طويلة</label>
              <label class="tab" id="t_mp3" for="mp3"> مقاسات القصيرة </label>
         </div>

         <div class="panels"> 
          <div class="panel" id="mpants" >
            <?php require 'table_queries.php';
                // header
        echo "<table id='men_pants_cm'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR </th>
          <th>المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th> طول الساق</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_pants_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_cm']."</td>";
                echo "<td>".$row['mp_hips_cm']."</td>";
                echo "<td>".$row['mp_leg_cm']."</td>";

          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='men_pants_inch' style='display:none'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR </th>
          <th>المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th> طول الساق</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_pants_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_in']."</td>";
                echo "<td>".$row['mp_hips_in']."</td>";
                echo "<td>".$row['mp_leg_in']."</td>";
          echo "</tr>";
        } echo "</table>";

            
            ?>
            <button id="clk1_mpants" class="buttonSwitch" onclick='tableSwitch("men_pants_cm","men_pants_inch"),highlight("clk1_mpants")'>inch</button>
          </div> <!-- end panel 1 -->

          <div class="panel" id="long_pants" >
            <?php require 'table_queries.php';
              // header
        echo "<table id='long_men_pants_cm'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR</th>
          <th> المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th>طول الساق</th>
                <th>الطول</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($long_men_pants_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_cm']."</td>";
                echo "<td>".$row['mp_hips_cm']."</td>";
                echo "<td>".$row['mp_leg_cm']."</td>";
                echo "<td>".$row['mp_height_cm']."</td>";
          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='long_men_pants_inch' style='display:none'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR</th>
          <th> المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th>طول الساق</th>
                <th>الطول</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($long_men_pants_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_in']."</td>";
                echo "<td>".$row['mp_hips_in']."</td>";
                echo "<td>".$row['mp_leg_in']."</td>";
                echo "<td>".$row['mp_height_in']."</td>";
          echo "</tr>";
        } echo "</table>";

             ?>
            <button id="clk2_mpants" class="buttonSwitch" onclick='tableSwitch("long_men_pants_cm","long_men_pants_inch"),highlight("clk2_mpants")'>inch</button>   
          </div> <!-- end panel 2 -->

        <div class="panel" id="short_pants" >
          <?php require 'table_queries.php';
          // header
        echo "<table id='short_men_pants_cm'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR</th>
          <th> المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th>طول الساق</th>
                <th>الطول</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($short_men_pants_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_cm']."</td>";
                echo "<td>".$row['mp_hips_cm']."</td>";
                echo "<td>".$row['mp_leg_cm']."</td>";
                echo "<td>".$row['mp_height_cm']."</td>";
          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='short_men_pants_inch' style='display:none'>
          <tr>
          <th> المقاس العالمي</th>            
          <th>المقاس الأوروبي<br>EUR</th>
          <th> المقاس الأمريكي<br>UK </th>
                <th> الخصر</th>
                <th> الورك</th>
                <th>طول الساق</th>
                <th>الطول</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($short_men_pants_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
          echo "<td>".$row['mp_int']."</td>";            
          echo "<td>".$row['mp_eur']."</td>";
                echo "<td>".$row['mp_uk']."</td>";
                echo "<td>".$row['mp_waist_in']."</td>";
                echo "<td>".$row['mp_hips_in']."</td>";
                echo "<td>".$row['mp_leg_in']."</td>";
                echo "<td>".$row['mp_height_in']."</td>";
          echo "</tr>";
        } echo "</table>";
          ?>

               <button id="clk3_mpants" class="buttonSwitch" onclick='tableSwitch("short_men_pants_cm","short_men_pants_inch"),highlight("clk3_mpants")'>inch</button>   
        </div><!-- end panel 3 -->
    </div> <!-- end panels -->
  </div><!-- end warpper -->
  </div> <!--end container -->

    <!--middle schudels -->
  
    <div class="tableContainer">
      <h3 id="t_munderwear"> الملابس الداخلية </h3>
            <?php require 'table_queries.php';
            // header
        echo "<table id='men_underwear_cm'>
          <tr>
                <th>المقاس العالمي</th>
                <th> المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK</th>
                <th> الخصر </th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_underwear_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mun_int']."</td>";
                echo "<td>".$row['mun_eur']."</td>";
                echo "<td>".$row['mun_uk']."</td>";            
                echo "<td>".$row['mun_waist_cm']."</td>";
          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='men_underwear_inch'style='display:none'>
          <tr>
                <th>المقاس العالمي</th>
                <th> المقاس الأوروبي<br>EUR </th>
                <th>المقاس الأمريكي<br>UK</th>
                <th> الخصر </th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_underwear_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mun_int']."</td>";
                echo "<td>".$row['mun_eur']."</td>";
                echo "<td>".$row['mun_uk']."</td>";
                echo "<td>".$row['mun_waist_in']."</td>";
          echo "</tr>";
        } echo "</table>";
            ?>
            <button id="clk1_munder" class="buttonSwitch" onclick="tableSwitch('men_underwear_cm','men_underwear_inch'),highlight('clk1_munder')">inch</button>
  </div> <!--end container -->

    <!--bottom schudels -->
  
    <div class="tableContainer">
      <h3 id="t_mshmagh"> الشماغ  </h3>
            <?php require 'table_queries.php';
            // header
        echo "<table id='men_shemagh'>
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
            ?>
  </div> <!--end container -->

 
    <div class="tableContainer"> 
      <h3 id="t_mhat"> القبعة </h3>
            <?php require 'table_queries.php';
            // header
        echo "<table id='men_hat_cm'>
          <tr>
                <th>المقاس العالمي</th>
                <th>محيط الرأس</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_hat_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mh_int']."</td>";
                echo "<td>".$row['mh_head_cm']."</td>";
          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='men_hat_inch' style='display:none'>
          <tr>
                <th>المقاس العالمي</th>
                <th>محيط الرأس</th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_hat_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mh_int']."</td>";
                echo "<td>".$row['mh_head_in']."</td>";
          echo "</tr>";
        } echo "</table>";
            
            ?>
            <button id="clk1_mhat" class="buttonSwitch" onclick='tableSwitch("men_hat_cm","men_hat_inch"),highlight("clk1_mhat")'>inch</button>
  </div> <!--end container -->

 
    <div class="tableContainer">
     <h3 id="t_mbelt"> الأحزمة </h3>
            <?php require 'table_queries.php';
            // header
        echo "<table id='men_belt_cm'>
          <tr>
                <th>المقاس العالمي</th>
                <th> الخصر </th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_belt_cm, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mb_int']."</td>";
                echo "<td>".$row['mb_waist_cm']."</td>";
          echo "</tr>";
        } echo "</table>";
        // header
        echo "<table id='men_belt_inch' style='display:none'>
          <tr>
                <th>المقاس العالمي</th>
                <th> الخصر </th>
          </tr> ";
        // result
        while ( $row = mysqli_fetch_array ($men_belt_inch, MYSQLI_ASSOC) )
        {
          echo "<tr>";
                echo "<td>".$row['mb_int']."</td>";
                echo "<td>".$row['mb_waist_in']."</td>";
          echo "</tr>";
        } echo "</table>";
            ?>
            <button id="clk1_mbelt" class="buttonSwitch" onclick='tableSwitch("men_belt_cm","men_belt_inch"),highlight("clk1_mbelt")'>inch</button>
  </div> <!--end container -->

 
    <div class="tableContainer"> 
      <h3 id="t_mshoes"> الأحذية </h3>
            <?php require 'table_queries.php';
            // header
        echo "<table id='men_shoes_cm'>
          <tr>
                <th> طول القدم</th>
                <th>  المقاس الأوروبي<br>EUR </th>
          <th>  المقاس الأمريكي<br>UK </th>
          <th>  المقاس البريطاني<br>US </th>
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
        // header
        echo "<table id='men_shoes_inch' style='display:none'>
          <tr>
                <th> طول القدم</th>
                <th>  المقاس الأوروبي<br>EUR </th>
          <th>  المقاس الأمريكي<br>UK </th>
          <th>  المقاس البريطاني<br>US </th>
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
            ?>
            <button id="clk1_mshoes" class="buttonSwitch" onclick='tableSwitch("men_shoes_cm","men_shoes_inch"),highlight("clk1_mshoes")'>inch</button>
  </div> <!--end container -->

</div>  
         <div class=sectionFour> 
         <!--footer-->
           </div>
  
  </div> <!--end of mainPage-->
<script>
  //code credit: http://jsfiddle.net/rjSfP/ 
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
    //end of code credit 
}

function less (r){
  var spanLess = document.getElementById(r);
  spanLess.style.display = "none";
}
function loadmore (clk_r,rows){
  var clkRow = document.getElementById(clk_r); 
  var spanMore = document.getElementById(rows);
  clkRow.hidden = true ;
  spanMore.style.display = "block";
}

function tableSwitch(cm,inch) {
   var tcm = document.getElementById(cm); 
   var tinch = document.getElementById(inch);

   if(tcm.style.display =="none"){
    tcm.style.display = "block";
    tcm.style.width = "100%" ;
   }
   else{
     tcm.style.display ="none" ;
   }

    if(tinch.style.display =="none"){
    tinch.style.display = "block";
    tinch.style.width = "100%";
   }
   else{
     tinch.style.display ="none" ;
   }
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