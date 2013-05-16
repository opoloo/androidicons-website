<? $active = 'index' ?>
<? require_once('includes/header.inc.php'); ?>
<div id="header">
    <div id="slideheader">
        <ul class="slides" id="slider">
            <li class="slide s1">
                Aquatische Lebensräume
                <p>Maßgefertigte Wasserlandschaften aus einer Hand </p>
            </li>
            <li class="slide s2">
                Gartenbäder
                <p>Draußen. Zuhause.</p>
            </li>
            <li class="slide s3">
                Hallenbäder
                <p>Das Wohnzimmer, von dem Sie immer geträumt haben. Nur mit Wasser.</p>
            </li>
            <li class="slide s4">
                Wellness
                <p>Saunen, Thermen und Whirlpools. Individuell und vom Fachmann. </p>
            </li>
            <li class="slide s5">
                Hotelbäder
                <p>Für Ihre Gäste: nur das Beste. </p>
            </li>
        </ul>
    </div>
        <!-- <ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Zurück</a></li><li><a class="flex-next" href="#">Weiter</a></li></ul> -->
</div>
<!-- End Header -->
<!-- Begin Content -->
<div class="bg-hell">
    <div class="container">
        <div class="row">
            <div class="col span12">
                <h1><span>//</span> Professionelle Schwimmbad-Architektur</h1>
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
                <h1><span>//</span> Unsere Bäder</h1>
                <p class="intro">Wir lieben Schwimmbäder, egal ob im Garten, als Wasserwohnzimmer oder im Hotel. Und wir finden garantiert das Schwimmbad, das zu Ihnen passt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col span4">
                <h2>Gartenbäder</h2>
                <img src="images/gartenbad_th.jpg" alt="Bad 1" class="border" />
            </div>
            <div class="col span4">
                <h2>Hallenbäder</h2>
                <img src="images/hallenbad_th.jpg" alt="Bad 2" class="border" />
            </div>
            <div class="col span4">
                <h2>Hotelbäder</h2>
                <img src="images/hotelbad_th.jpg" alt="Bad 3" class="border" />
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
      nextText: "Weiter",       // String: Text for the "next" button
    });
});  
</script>
<? require_once('includes/footer.inc.php'); ?>
