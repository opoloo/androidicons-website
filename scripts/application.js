$(document).ready(function(){

	$('#totop a').on('click', function(e){
		e.preventDefault();
		$('html,body').animate({scrollTop: 0}, 1000);
        return false;
	});

  // Switch download arrow
  $(document).scroll(function() {
    if ($(document).scrollTop() > 500) {
      $('#get-arrow').html("&uarr;");
    } else {
      $('#get-arrow').html("&darr;");
    }
  });

  // Load slider
  var mySwiperDesktop = $('.swiper-container').swiper({
    //Your options here:
    mode:'horizontal',
    loop: true,
    pagination: ".slide_nav_desktop",
    createPagination: true,
    paginationClickable: true,
    mousewheelControl: true
  });
  var mySwiperMobile = $('.mobile .swiper-container').swiper({
    //Your options here:
    mode:'horizontal',
    loop: true,
    pagination: ".slide_nav_mobile",
    createPagination: true,
    paginationClickable: true,
    mousewheelControl: true
  });

  // Preview Set
  $('.btn-preview').click(function() {
    $('.preview-box, .wrapper, header').fadeToggle();
    $('body').scrollTop(0);
  });
});