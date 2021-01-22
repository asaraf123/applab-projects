// menu jquery code
$(document).ready(function(){
  $('#menu-icon').on('click', function(){
    $('.applab-navbar').toggleClass('expand');
    return false;
  });
});

// tab
$(document).ready(function() {
    
    //alert('here');
	
  $('.applab-tabs a').click(function(){
  
     $('.applab-panel').hide();
     $('.applab-tabs a.active').removeClass('active');
     $(this).addClass('active');
     
     var panel = $(this).attr('href');
     $(panel).fadeIn(1000);
     
     return false;  // prevents link action
    
  });  // end click 

     $('.applab-tabs li:first a').click();
     
}); // end ready

// testo
$('.slider-activation').slick({
  slidesToShow: 1,
  slidesToScroll: 1
});

//
$('.accordion__header').click(function(e) {
	e.preventDefault();
	var currentIsActive = $(this).hasClass('is-active');
	$(this).parent('.accordion').find('> *').removeClass('is-active');
	if(currentIsActive != 1) {
		$(this).addClass('is-active');
		$(this).next('.accordion__body').addClass('is-active');
	}
});