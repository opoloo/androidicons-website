$(document).ready(function(){

	$('#totop a').on('click', function(e){
		e.preventDefault();
		$('html,body').animate({scrollTop: 0}, 1000);
        return false;
	});

  // Switch download arrow
  $(document).scroll(function() {
    if ($(document).scrollTop() > 650) {
      $('#get-arrow').html("&uarr;");
    } else {
      $('#get-arrow').html("&darr;");
    }
  });

  // Load slider
  var mySwiper = $('.swiper-container').swiper({
    //Your options here:
    mode:'horizontal',
    loop: true,
    mousewheelControl: true
  });

  // Preview Set
  $('.btn-preview').click(function() {
    $('.preview-box, .wrapper').fadeToggle();
    $('body').scrollTop(0);
  });
});