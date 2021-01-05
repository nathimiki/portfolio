$(document).ready(function () {

	// $($('.hamburger').parent().attr('data-target')).on('hide.bs.collapse', function () {
	// 	$(this).parent().find('.hamburger').removeClass('hamburger--close');
	// });
	// $($('.hamburger').parent().attr('data-target')).on('show.bs.collapse', function () {
	// 	$(this).parent().find('.hamburger').addClass('hamburger--close');
	// });



	$(window).scroll(function(){
  		var scroll = $(window).scrollTop();
	  	if (scroll > 600) {
	    	$(".main-header").addClass("scrolled");
	  	}

	  	else{
		  	$(".main-header").removeClass("scrolled");  	
	  	}
	  });
	


    // $("#scrollTop").click(function(event) {
    //     event.preventDefault();
    //     $("html, body").animate({ scrollTop: 0 }, "slow");
    //     return false;
	// });
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
		  $('.scroll-top').fadeIn();
		} else {
		  $('.scroll-top').fadeOut();
		}
	  });
	
	  $('.scroll-top').click(function () {
		$("html, body").animate({
		  scrollTop: 0
		}, 400);
		  return false;
	  });
	
	
	
	
	$('.work1').hover(function() {
		$(".work1 .workBtn").toggleClass("show");
	});
	
	$('.work2').hover(function() {
		$(".work2 .workBtn").toggleClass("show");
	});
	
	$('.work3').hover(function() {
		$(".work3 .workBtn").toggleClass("show");
	});
	
	$('.work4').hover(function() {
		$(".work4 .workBtn").toggleClass("show");
	});
	
	$('.work5').hover(function() {
		$(".work5 .workBtn").toggleClass("show");
	});
	
	$('.work6').hover(function() {
		$(".work6 .workBtn").toggleClass("show");
	});

	
});
	
	
