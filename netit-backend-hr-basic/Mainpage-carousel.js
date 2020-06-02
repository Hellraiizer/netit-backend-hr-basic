var Slideindex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("FadeSlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  Slideindex++;
  if (Slideindex > x.length) {Slideindex = 1;}    
  x[Slideindex-1].style.display = "block";  
  setTimeout(carousel, 6000); 
}
