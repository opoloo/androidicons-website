$(document).ready(function(){

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