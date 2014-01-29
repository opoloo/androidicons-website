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
  $('.btn-preview, .set-preview img').click(function() {
    $('.preview-box, .wrapper, header').fadeToggle();
    $('body').scrollTop(0);
  });

  // Glyphs
  $('.btn-all-glyphs').click(function() {
    $('.glyphs-box, .wrapper, header').fadeToggle();
    $('body').scrollTop(0);
  });

  // Smooth Anchor Scrolling
  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 65
    }, 500);
    return false;
  });

  $('.preview-box .buy-set').click(function() {
    window.location.href = "http://pul.ly/b/75286";
  });

  $('.glyphs-box .buy-set').click(function() {
    window.location.href = "#";
  });
});