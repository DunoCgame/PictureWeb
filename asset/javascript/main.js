// //SlideShow
var slideIndex = 0;
showSlides();

function showSlides() {
	
	
	 var i;
	 var slides = document.getElementsByClassName("mySlides");
	
	if(slides){
		
	  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
	  }
	  slideIndex++;
	  
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 4000); // Change image every 2 seconds

	
	}

}



// //SlideShow2 
var sIndex = 1;
showSlidesService(sIndex);

// Next/previous controls
function plusSlides(n){
  showSlidesService(sIndex += n);
}

function showSlidesService(n) {
  var i;
  var slidesService = document.getElementsByClassName("SlideArticleService");
  
if(slidesService){  
  if (n > slidesService.length) {sIndex = 1}
  if (n < 1) {sIndex = slidesService.length}
  
  for (i = 0; i < slidesService.length; i++) {
      slidesService[i].style.display = "none";
  }

  slidesService[sIndex-1].style.display = "block";
}

}

//Boton ir hacia arriba
$(document).ready(function(){ //Hacia arriba
	irArriba();
});

function irArriba(){
  
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}

//navbar
function openNav(){
  document.getElementById("NavarCollapse").style.width = "250px";
}

function closeNav(){
  document.getElementById("NavarCollapse").style.width = "0";
}

var Menu = document.getElementById("menulist");
var item = Menu.getElementsByClassName("link");
		
		if( screen.width>1024 ){
				for(var i = 0; i < item.length; i++){
					  item[i].addEventListener("click", function(){
							closeNav();
					  });
					  }
			}
			
			
