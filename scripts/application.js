$(document).ready(function(){

    $("#slider").responsiveSlides({
      auto: true,             // Boolean: Animate automatically, true or false
      speed: 1500,            // Integer: Speed of the transition, in milliseconds
      timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
      pager: true,           // Boolean: Show pager, true or false
      nav: true,             // Boolean: Show navigation, true or false
      random: false,          // Boolean: Randomize the order of the slides, true or false
      pause: true,           // Boolean: Pause on hover, true or false
      pauseControls: true,    // Boolean: Pause when hovering controls, true or false
      prevText: "Zurück",   // String: Text for the "previous" button
      nextText: "Weiter"       // String: Text for the "next" button
    });

	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tClose: 'Schlie&szlig;en',
		tLoading: 'Lade Bild #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
   			tPrev: 'Vorheriges (Linke Pfeiltaste)',
   			tNext: 'N&auml;chstes (Rechte Pfeiltaste)',
   			tCounter: '%curr% / %total%',
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">Das Bild #%curr%</a> konnte nicht geladen werden.',
			titleSrc: function(item) {
				title = item.el.attr('title');
				if (title == 'undefined') title = "";
				return  title;
			}
		}
	});

	$('#totop a').on('click', function(e){
		e.preventDefault();
		$('html,body').animate({scrollTop: 0}, 1000);
        return false;
	});

});