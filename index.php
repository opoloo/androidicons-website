<? $active = 'index' ?>
<? require_once('includes/header.inc.php'); ?>
<div id="header">
    <div id="slideheader">
        <ul class="slides">
            <li class="slide s1">
                Aquatische Lebensräume
                <p>Maßgefertigte Wasserlandschaften aus einer Hand</p>
            </li>
            <li class="slide s2">
                Aquatische Lebensräume 2
                <p>Maßgefertigte Wasserlandschaften aus einer Hand</p>
            </li>
            <li class="slide s3">
                Aquatische Lebensräume 3
                <p>Maßgefertigte Wasserlandschaften aus einer Hand</p>
            </li>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Begin Content -->
<div class="bg-hell">
    <div class="container">
        <div class="row">
            <div class="col span12">
                <h1>// Ihr Schwimmbadarchitekt</h1>
            </div>
        </div>
        <div class="row">
            <div class="col span7">
                <p class="teaser">Wir bauen Ihnen in Maßarbeit Ihr Wunsch-Schwimmbad.</p>
                <p>Das sind bei uns nicht einfach nur Wasserbecken, sondern aquatische Wohnlandschaften, die wir mit Ihnen zusammen planen, konzipieren, designen und umsetzen.</p><br/>
                <p>Mit hochentwickelter, effizienter, zukunftsweisender Technologie – umweltfreundlich und hygienisch. Wir betreuen und warten die Schwimmbäder von mehr als 6000 privaten und Hotelkunden.	</p>
                <a href="konzeption.php" class="button-orange">Was können wir für Sie tun?</a>
            </div>
            <div class="col span5">
                <img src="images/illu.png" alt="Illu" />
            </div>
        </div>
    </div>
</div>
<div class="bg-dunkel">
    <div class="container">
        <div class="row">
            <div class="col span12">
                <h1>// Unsere Bäder</h1>
                <p class="intro">Wir lieben Schwimmbäder, egal ob im Garten, als Wasserwohnzimmer oder im Hotel. Und wir finden garantiert das Schwimmbad, das zu Ihnen passt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col span4">
                <h2>Gartenbäder</h2>
                <img src="images/bad_1.jpg" alt="Bad 1" class="border" />
            </div>
            <div class="col span4">
                <h2>Hallenbäder</h2>
                <img src="images/bad_1.jpg" alt="Bad 2" class="border" />
            </div>
            <div class="col span4">
                <h2>Hotelbäder</h2>
                <img src="images/bad_1.jpg" alt="Bad 3" class="border" />
            </div>
        </div>
        <div class="row">
            <div class="col span12">
                <a href="inspiration.php" class="button-orange">Lassen Sie sich inspirieren</a>
            </div>
        </div>
	</div>
</div>
<!-- End Content -->

<script>
$(window).load(function(){

    // $("#slideheader").carouFredSel({
    //     width: "100%",
    //     items: {
    //         visible: 1,
    //         width: "100%"
    //     },
    //     scroll: {
    //         items: 1,
    //         fx: "crossfade",
    //         duration: 500,
    //         pauseOnHover: true
    //     },
    //     next: {
    //         button: "#next",
    //         key: "right"
    //     },
    //     prev: {
    //         button: "#prev",
    //         key: "left"
    //     },
    //     pagination: "#pagination",
    // });

    
    $('#slideheader').flexslider({
        animation: "fade",
        easing: "swing",
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        // Primary Controls
        controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item
 
        // Secondary Navigation
        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
 
    });

})
    
</script>
<? require_once('includes/footer.inc.php'); ?>
