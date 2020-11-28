<!DOCTYPE html>
<html>
<head>
	<title>Rakez</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <link rel="mainStyle" href="mainStyle.css">
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
#label1{left:70px;}  
#label2{left:320px;}  
#label3{left:565px;}  


#bar{
  position: absolute;
  top: 550px;
  left: 0px;
  width: 1330px;
  height: auto;
}
/**overwrite some styles**/
#Wring{
  width: 70px;
  height: auto;
}
#top{
  margin-top: 0px;
}
#pregnantCon{
 border-left: #383836 dashed 3px;
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
       <div class=iconContainer><img src="images/abaya.png" alt="abaya icon" id="Wabaya"><p id=abayatxt>عباءة</p></div>
       <div class=iconContainer><img src="images/shirt.png" alt="shirt icon" id="Wshirt"><p id=shirttxt>ملابس علوية</p></div>
       <div class=iconContainer><img src="images/dress.png" alt="dress icon" id="Wdress"><p id=dresstxt>فساتين</p></div>
       <div class=iconContainer><img src="images/slit-skirt.png" alt="skirt icon" id="Wskirt"><p id=skirttxt>تنانير</p></div>
       <div class=iconContainer><img src="images/pants.png" alt="pants icon" id="Wpanst"><p id=pantstxt>بناطيل</p></div>
     </div>
     <div class=iconsBackground id=middle>
       <div class=iconContainer><img src="images/tights.png" alt="tights icon" id="Wtights"><p id=tighttxt>جوارب طويلة</p></div>
       <div class=iconContainer><img src="images/brassiere.png" alt="brassiere icon" id="Wbra"><p id=bratxt>ملابس داخلية علوية</p></div>
       <div class=iconContainer><img src="images/underwear.png" alt="underwear icon" id="Wunderwear"><p id=underweartxt>ملابس داخلية سفلية</p></div>
     </div>
      <div class=iconsBackground id=bottom>
       <div class=iconContainer><img src="images/ring.png" alt="ring icon" id="Wring"><p id=ringtxt>خاتم</p></div>
       <div class=iconContainer><img src="images/heels.png" alt="heels icon" id="Wheels"><p id=heelstxt>أحذية</p></div>        
       <div class=iconContainer><img src="images/belt.png" alt="belt icon" id="Wbelt"><p id=belttxt>أحزمة</p></div>  
       <div class=iconContainer id=pregnantCon><img src="images/pregnant.png" alt="pregnancy clothes icon" id="Wpregnant"><p id=pregnanttxt>قياسات حوامل</p></div>
      
        
      </div>
      </div> <!--end of BgContainer-->
     </div> <!--end of sectionTwo-->

<div class=sectionThree id=sectionThree> 
         <!--insert schudels here-->
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
</script>
</body>
</html>