<!DOCTYPE html>
<html>
<head>
	<title>Rakez - Kids</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
	<script src="btn.js"></script>
  <link rel="mainStyle" href="mainStyle.css">
  <link rel="stylesheet" type="text/css" href="tableStyle.css">
	<link rel="stylesheet" type="text/css" href="cmnStyle.css">
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
}

 /**adject section height here*/
.sectionThree {
  background-color: #f2eeec;
  position: relative;
  height:  2000px;

}
.sectionFour {
   height: 120px;
 }
 .categoryContainer{
  position: relative;
      margin-left: auto;
    margin-right: auto;
   margin-top: 90px;
      height: 270px;
  width: 800px;

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
  width: 900px;
  height: 120px;
}

 .categoryContainer p { /**labels style for sectionOne's icons**/
  font-family: Questv1;
  font-size: 28px;
  color: #474745;
  position: absolute;
  top: 180px;}

.iconContainer{ /**container for each clothes icon**/
  width: 0%;
  padding: 2px;
  display: table-cell;
 text-align: center;
 cursor: pointer;
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

p {cursor: pointer;}
p:hover {color: #87c6bd;}

a {text-decoration: none;}

 #logo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 120px;
    height: auto; }

/**gender**/
#womanIcon{
   width: 225px;
    height: auto;
    position: absolute;
    left: 10px;
  }

#manIcon{
   width: 185px;
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

	#label1{left:120px;}
	#label2{left:370px;}
	#label3{left:610px;}

#bar{
  position: absolute;
  top: 550px;
  left: 0px;
  width: 1330px;
  height: auto;
}
/**overwrite some styles**/
#top{
  margin-top: 0px;
}
#Konesie{
width: 150px;
height: auto;
}
#Kbonnet{
width: 100px;
height: auto;
}

</style>


</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top-arrow.png" height="25" width="25"></button>
<div calss=mainPage>
	<div id="nav">
			 <ul id="menu">
					 <li><a href="home.html">الرئيسية</a></li>
					 <li class="divline"></li>
					 <li><a href="#">جِد مقاسي</a></li>
					 <li class="divline"></li>
					 <li><a href="care.html">العناية</a></li>
					 <li class="divline"></li>
					 <li><a href="about.html">عن راكز</a></li>
				</ul>
	 </div>
<div class=sectionOne id=sectionOne>
   <a href="home.html"><img src="images/logo.jpg" alt="Rakez Logo" id=logo></a>
   <div class= categoryContainer>
		 <a href="women.php"><img src="images/woman.jpg" alt="woman icon" id=womanIcon><p id=label1>نساء</p></a>
		 <a href="men.php"><img src="images/man.jpg" alt="man icon" id=manIcon><p id=label2>رجال</p></a>
		 <a href="#"><img src="images/child.jpg" alt="child icon" id=childIcon><p id=label3>أطفال</p></a>
   </div>
       <img src="images/bar.jpg" alt="bar" id=bar >
     </div>
  <div class=sectionTwo id=sectionTwo>
   <div class=BgContainer>
     <div class=iconsBackground id=top>
        <div class=iconContainer><img src="images/babyClothes.png" alt="baby clothes icon" id="KbabyClothes" onclick="smoothScroll(document.getElementById('t_babycloth'))"><p id=babyClothestxt onclick="smoothScroll(document.getElementById('t_babycloth'))">ملابس مواليد</p></div>
       <div class=iconContainer><img src="images/onesie.png" alt="onesie icon" id="Konesie" onclick="smoothScroll(document.getElementById('t_onesie'))"><p id=onesietxt onclick="smoothScroll(document.getElementById('t_onesie'))">ملابس أطفال <br>1-7 سنوات</p></div>
       <div class=iconContainer><img src="images/boy.png" alt="boy icon" id="Kboy" onclick="smoothScroll(document.getElementById('t_kboy'))"><p id=boytxt onclick="smoothScroll(document.getElementById('t_kboy'))">ملابس أولاد <br>أكبر من 8 سنوات</p></div>
       <div class=iconContainer><img src="images/girl.png" alt="girl icon" id="Kgirl"  onclick="smoothScroll(document.getElementById('t_kgirl'))"><p id=girltxt  onclick="smoothScroll(document.getElementById('t_kgirl'))">ملابس بنات<br>أكبر من 8 سنوات</p></div>
     </div>

      <div class=iconsBackground id=bottom>
       <div class=iconContainer><img src="images/shoes.png" alt="shoes icon" id="Kshoes"  onclick="smoothScroll(document.getElementById('t_kshoes'))"><p id=shoestxt  onclick="smoothScroll(document.getElementById('t_kshoes'))">أحذية أطفال</p></div>
       <div class=iconContainer><img src="images/bonnet.png" alt="bonnet icon" id="Kbonnet" onclick="smoothScroll(document.getElementById('t_kbeany'))"><p id=bonnettxt onclick="smoothScroll(document.getElementById('t_kbeany'))">قبعات المواليد</p></div>

      </div>
      </div> <!--end of BgContainer-->
     </div> <!--end of sectionTwo-->

<div class=sectionThree id=sectionThree>
         <!--insert schudels here-->
<!--top schudels -->

  <div class="tableContainer">
    <h3 id="t_babycloth">ملابس المواليد </h3>
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


  <div class="tableContainer">
   <h3 id="t_onesie"> ملابس الأطفال من 1-7 سنوات </h3>
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


  <div class="tableContainer">
    <h3 id="t_kboy"> الأولاد أكبر من 8 سنوات </h3>
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


  <div class="tableContainer">
    <h3 id="t_kgirl"> البنات أكثر من 8 سنوات </h3>
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

 <!--bottom schudels -->

  <div class="tableContainer">
   <h3 id="t_kshoes"> أحذية الأطفال </h3>
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


  <div class="tableContainer">
    <h3 id="t_kbeany">قبعات المواليد </h3>
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
