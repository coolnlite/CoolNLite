//SLIDER 1
var index = 0;
var i = 0;

var slider = $('.slider');
var line = $('.line');

auto();

function show(n){

  for(i = 0 ; i < slider.length ; i++){
    slider[i].style.display = "none";
  }

  for(i = 0 ; i < line.length ; i++){
   line[i].className = line[i].className.replace("active");
  }

  slider[n-1].style.display = "block";
  line[n-1].className += " active";

}

function auto(){
  index++;
  if(index > slider.length){
    index = 1;
  }
  show(index);
  setTimeout(auto,7000);
}

function plusSlide(n){
  index += n;

  if(index > slider.length){
    index = 1;
  }

  if(index < 1){
    index = slider.length;
  }
  show(index);
}

function currentSlide(n){
  index = n;
  show(index);
}

//SLIDER 2
var index2 = 0;
var i2 = 0;

var slider2 = $('.slider2');
var line2 = $('.line2');

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