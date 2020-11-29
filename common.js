// Code to go to the top, Cridits goes to https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




//Table jc codes, credit: http://jsfiddle.net/rjSfP/
window.smoothScroll = function(target){
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
 }
 else{
   tcm.style.display ="none" ;
 }

  if(tinch.style.display =="none"){
  tinch.style.display = "block";
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
