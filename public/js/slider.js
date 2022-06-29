//SLIDER 2
var index2 = 0;
var i2 = 0;

var slider2 = document.querySelectorAll('.slider2');
var line2 = document.querySelectorAll('.line2');

auto2();

function show2(n){

  for(i2 = 0 ; i2 < slider2.length ; i2++){
    slider2[i2].style.display = "none";
  }

  for(i2 = 0 ; i2 < line2.length ; i2++){
   line2[i2].className = line2[i2].className.replace("active");
  }

  slider2[n-1].style.display = "block";
  line2[n-1].className += " active";

}

function auto2(){
  index2++;
  if(index2 > slider2.length){
    index2 = 1;
  }
  show2(index2);
}

function plusSlide2(n){
  index2 += n;

  if(index2 > slider2.length){
    index2 = 1;
  }

  if(index2 < 1){
    index2 = slider2.length;
  }
  show2(index2);
}

function currentSlide2(n){
  index2 = n;
  show2(index2);
}