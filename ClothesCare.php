<!DOCTYPE html>
<html>
<head>
	<title>Rakez - Clothes Care</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
<script src="common.js"></script>
  <link rel="stylesheet" type="text/css" href="cmnStyle.css">
  <link rel="stylesheet" type="text/css" href="tableStyle.css">

  <style>

.sectionOne {
  height: 600px;
    position: relative;
}
.sectionTwo {
  height: auto;
    position: relative;
}

#label{
  margin-top: 30px;
  margin-bottom: 20px;
  float: right;
}
 #logo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 120px;
    height: auto;
 }
.Quotescontainer{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.labelBg{
  position: relative;
  content: "";
  clear: both;
   margin-left: auto;
    margin-right: auto;
   margin-top: 20px;
  border-radius: 80px;
  background: #f0f0e8;
  padding: 20px;
  width: 900px;
  height: 220px;

}
.sectionTwo p {
   font-family: Questv1;
     font-size: 25px;
     text-align: center;
     margin: 0px;
     color: #474745;
}
.imgContainer{
   width: 0%;
  padding: 2px;
  display: table-cell;
  border-width: 30px;
}
.txtContainer{
   width: 0%;
  padding: 2px;
  display: table-cell;
 text-align: center;
 vertical-align: middle;
}
.sec1Container{
    margin-top: -10px;

}
#sec{
  display: table;
  margin-left: auto;
  margin-right: auto;
}
.imgContainer img{
  width: 70px;
  height: auto;
}
#Quote1{
     font-family: Questv1;
     font-size: 40px;
     text-align: center;
     margin: 0px;
     color: #474745;}
#Quote2{
     font-family: Questv1;
     font-size: 30px;
     text-align: center;
     color: #474745;
     margin: 15px 0px 0px  auto;
}

#label-4Bg{
  margin-bottom: 20px;
}
</style>


</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top-arrow.png" alt="top-arrow" height="25" width="25"></button>
<div>
  <div id="nav">
       <ul id="menu">
           <li><a href="home.html">الرئيسية</a></li>
           <li class="divline"></li>
           <li><a href="women.php">جد مقاسي</a></li>
           <li class="divline"></li>
           <li><a href="#">العناية بالملابس</a></li>
           <li class="divline"></li>
           <li><a href="about.html">عن راكز</a></li>
        </ul>
   </div>
 <div class=sectionOne>
   <img src="images/logo.jpg" alt="Rakez Logo" id=logo >
  <div class=Quotescontainer>
    <p id=Quote1>لقيت لبس راكز عليك؟</p>
 <p id=Quote2>التزامك بإرشادات العناية يحفظ لك القطعة <br> لأطول وقت</p>
   </div>
     </div>
  <div class=sectionTwo>
<div class=bleachlbl>
      <img src="images/label1.png" alt="label" id=label>
    <div class=labelBg id=label-1Bg>
       <div class= sec1Container id=sec>
          <div class=imgContainer><img src="images/bleach.png" alt="bleachIcon" ></div>
         <div class=txtContainer> <p>استخدم المبيض ــــــ</p></div> </div>
      <div class= sec2Container id=sec> <div class=imgContainer><img src="images/non-chlorine.png" alt="chlorineIcon"></div>
      <div class=txtContainer><p>لا تستخدم كلور التبييض ــــــ</p></div> </div>
       <div class= sec3Container id=sec> <div class=imgContainer><img src="images/no-bleaching.png" alt="bleachingIcon"></div>
        <div class=txtContainer><p>لا تستخدم مبيض ــــــ</p></div>
    </div>
</div>
</div>
<div class=washlbl>
 <img src="images/label2.png" alt="label" id=label>
        <div class=labelBg id=label-2Bg>
 <div class= sec1Container id=sec>
          <div class=imgContainer><img src="images/hand-wash.png" ></div>
         <div class=txtContainer> <p>غسيل يدوي ــــــ</p></div> </div>
      <div class= sec2Container id=sec> <div class=imgContainer><img src="images/machine-wash.png" alt="washIcon"></div>
      <div class=txtContainer><p>غسيل آلي ــــــ</p></div> </div>
       <div class= sec3Container id=sec> <div class=imgContainer><img src="images/do-not-wash.png" alt="noWashIcon"></div>
        <div class=txtContainer><p>لا تغسل ــــــ</p></div>


        </div></div>

<div class=ironlbl>
 <img src="images/label3.png" alt="label" id=label>
        <div class=labelBg id=label-3Bg>
 <div class= sec1Container id=sec>
          <div class=imgContainer><img src="images/iron.png" alt="ironIcon"></div>
         <div class=txtContainer> <p>كوي ــــــ</p></div> </div>
      <div class= sec2Container id=sec> <div class=imgContainer><img src="images/iron2.png" alt="lowheat"></div>
      <div class=txtContainer><p>كوي بدرجة حرارة متوسطة ــــــ</p></div> </div>
       <div class= sec3Container id=sec> <div class=imgContainer><img src="images/do-not-iron.png" alt="noIronIcon"></div>
        <div class=txtContainer><p>لا تكوي ــــــ</p></div>
        </div>
			</div>
		</div>

  <div class=drylbl>
 <img src="images/label4.png" alt="label" id=label>
        <div class=labelBg id=label-4Bg>

          <div class= sec1Container id=sec>
          <div class=imgContainer><img src="images/drying1.png" alt="dryingIcon"></div>
         <div class=txtContainer> <p>التجفيف على الحبل ــــــ</p></div> </div>
      <div class= sec2Container id=sec> <div class=imgContainer><img src="images/drying.png" alt="dryInShadowIcon"></div>
      <div class=txtContainer><p>التجفيف في الظل ــــــ</p></div> </div>
       <div class= sec3Container id=sec> <div class=imgContainer><img src="images/do-not-dry.png" alt="noDryingIcon"></div>
        <div class=txtContainer><p>لا تجفف ــــــ</p></div>
        </div></div>
   </div>
 </div>
</div>

    <div class=sectionFour>
         <!--footer-->
       <p id=footer>   © كل الحقوق محفوظة , 2020 </p>
           </div>
<!--all icons credit goes to https://www.flaticon.com/ -->
 </div>
</body>
</html>
