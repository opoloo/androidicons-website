<!doctype html>
<html class="no-js">
<?php
// *** Mail Recipe ***
$mail_to="info@a-maurer.de";
$mail_subject="[Website Kontaktanfrage]";
// *************************************

$from_name=$_POST['fromname'];
$from_mail=strtolower($_POST['frommail']);
$from_telefon=$_POST['fromtelefon'];
$mail_text=$_POST['mailtext'];
$send=$_POST['s'];

// Errorzuweisungen mailform
if(trim($from_name)=="" || trim($from_name)=="Ihr Name") $err_text.="<li>Bitte tragen Sie Ihren Namen ein.</li>";
if(trim($from_mail)=="" || strtolower($from_mail)=="Ihre E-Mailadresse") {
	$err_text.="<li>Bitte tragen Sie Ihre E-Mailadresse ein.</li>";
	#$from_mail="";
} else
	if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$",$from_mail))
		$err_text.="<li>Bitte tragen Sie eine g&uuml;ltige E-Mailadresse ein.</li>";
if(trim($mail_text)=="" || trim($mail_text)=="Ihre Nachricht") $err_text.="<li>Bitte tragen Sie eine Nachricht ein.</li>";

// *** Zu langen Text abschneiden ***
if(strlen($mail_text)>2500) {
	$mail_text=substr($mail_text,0,2500)."... (Text wurde gek&uuml;rzt!)";
}
$from_name=str_replace(chr(34),"''",$from_name);
$from_name=stripslashes($from_name);
$from_telefon=stripslashes($from_telefon);
$from_mail=stripslashes($from_mail);
$mail_subject=stripslashes($mail_subject);
$mail_text=stripslashes($mail_text);

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Als Rechtsanwältin für Eherecht und Familienrecht, finden Sie in mir eine kompetente Beraterin und Unterstützung in allen familienrechtlichen Angelegenheiten." />
<meta name="author" content="Antje Pulinckx-Maurer" />
<meta name="keywords" content="Antje Pulinckx-Maurer" />

<title>Rechtsanwältin Antje Pulinckx-Maurer</title>

<!-- Embedding Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.png" type="image/png" />

<!-- General Stylesheet -->
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />

<!-- Fallback Stylesheet -->
<link href="stylesheets/no-fontface.css" rel="stylesheet" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slides.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/smooth-scroll.js"></script>
<script type="text/javascript" src="scripts/modernizr-2.0.6.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script>
<!--
$(document).ready(function(){
	$('#start').waypoint(function(event, direction) { $('#nav li').removeClass('active');	if (direction === 'down') { $('#nav-start').addClass('active'); } else { $('#nav li').removeClass('active'); }}, { offset: "0px" });
	$('#leistungen').waypoint(function(event, direction) { $('#nav li').removeClass('active');	if (direction === 'down') { $('#nav-leistungen').addClass('active'); } else { $('#nav-start').addClass('active'); }}, { offset: 80 });
	$('#mediation-wrapper').waypoint(function(event, direction) { $('#nav li').removeClass('active');	if (direction === 'down') { $('#nav-mediation').addClass('active'); } else { $('#nav-leistungen').addClass('active'); }}, { offset: 80 });
	$('#vita-wrapper').waypoint(function(event, direction) { $('#nav li').removeClass('active'); if (direction === 'down') { $('#nav-vita').addClass('active'); } else { $('#nav-mediation').addClass('active'); }}, { offset: 80 });
	$('#kontakt').waypoint(function(event, direction) { $('#nav li').removeClass('active'); if (direction === 'down') { $('#nav-kontakt').addClass('active'); } else { $('#nav-vita').addClass('active'); }}, { offset: 80 });

	$("#nav a").smoothScroll({offset: -80, afterScroll: function() {
		$('#nav li').removeClass('active');
		$(this).parent().addClass('active');

	}});

	$("label").inFieldLabels();

	var parent_orig_height = $("#leistungen ul li").parent().height();
	var li_orig_height = 125;
	$("#leistungen ul li").click(function(e){e.preventDefault();});

	$("#leistungen ul li").click(function(e){
		var parent_el = $(this).parent();
		var parent_height = parent_el.height();
		$.smoothScroll({ scrollTarget: '#leistungen' });
		if ($(this).hasClass('current')) {
			$(this).css('position', 'static');
			$(this).removeClass('current');
			$(this).children('p:first').show(200);
			$(this).height(li_orig_height);
			parent_el.height(parent_orig_height);
		} else {
			var el_offset = $(this).position();
			var anim_dur = 1000;
			$(this).children('p:first').hide(200);
			$(this).css({'position': 'absolute', 'top': el_offset.top, 'left': el_offset.left});

			$(this).animate( {top: 0, left: 0}, {duration: 200, queue: true } );

			$(this).addClass('current', 399, function() {
				if ( $(this).height() > parent_orig_height ) {
					parent_el.height($(this).height() + 100);
				} else {
					$(this).height(parent_orig_height);
				}
			});
		}
	});

	$("#leistungen ul li.current .close").click(function(e){
		console.log("clock");
		$(this).parent().trigger('click');
	});

});
-->
</script>
</head>


<body>
<a id="start" name="start"></a>
<!-- Begin Header -->
<div id="meta">
	<div class="wrapper">
		<div id="logo">
			<a href="#nav-start"><img src="images/logo.png" alt="Logo Rechtsanwältin Antje Pulinckx-Maurer" /></a>
		</div>
		<div id="nav">
			<ul>
				<li id="nav-start"><a href="index.php#start">Start</a></li>
				<li id="nav-leistungen"><a href="index.php#leistungen">Leistungen</a></li>
				<li id="nav-mediation"><a href="index.php#mediation-wrapper">Mediation</a></li>
				<li id="nav-vita"><a href="index.php#vita-wrapper">Vita</a></li>
				<li id="nav-kontakt"><a href="index.php#kontakt">Kontakt</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header">
	<div class="wrapper">
		<div id="intro">
		<span class="teaser">Fairness, Fachkenntnis & Engagement.</span>
		<p>Als Rechtsanwältin für Eherecht und Familienrecht, finden Sie in mir eine kompetente Beraterin und Unterstützung in allen familienrechtlichen Angelegenheiten.
		Wenn die Liebe stolpert, sollten Sie miteinander streiten – nicht gegeneinander. Ich helfe Ihnen dabei.</p>
		</div>
	</div>
</div>
<!-- End Header -->


<!-- Begin Content -->

<div id="content" class="impressum">
	<div id="headline"><h1><span>Impressum</span></h1></div>
	<p>
	<strong>Antje Pulinckx-Maurer</strong><br/>
	Markt 31<br/>
	55116 Mainz </p>
	<br/>
	<strong>Telefon</strong> 06131 221112 <br/>
	<strong>Fax</strong> 06131 221459<br/>
	<br/>
	<p><strong>E-Mail:</strong> <script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%69%6e%66%6f%40%61%2d%6d%61%75%72%65%72%2e%64%65%5c%22%3e%69%6e%66%6f%40%61%2d%6d%61%75%72%65%72%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script><br/>
	<strong>Internet:</strong> www.a-maurer.de</p>
	<br/>
	Verantwortlich f&uuml;r den Inhalt: Antje Pulinckx-Maurer
	<p>
	Umsatzsteuer-Identifikationsnummer gem&auml;&szlig; &sect; 27 a Umsatzsteuergesetz: DE193671970</p>
	<br/><br/>
  	
  	
	<h2>Design & Code</h2>
	<p>Opoloo GbR</p>
	<p><a href="http://www.opoloo.de" class="link">www.opoloo.de</a></p>

	<div id="headline"><h1><span>Rechtliche Hinweise</span></h1></div>
	<p>Links von anderen Internet-Angeboten auf diese Homepage oder ihre Unterseiten sind ohne weitere Informationen oder Anfragen erlaubt, sofern sie das Anliegen dieser Homepage unterst&uuml;tzen und sie oder eine ihrer Unterseiten im gesamten bisherigen oder einem neuen Browserfenster zeigen. Aufrufe in einem Frame-Teilfenster, die so die verlinkte Seite dieser Website als Teil der fremden Internet-Site erscheinen lassen, sind nicht statthaft.</p>
	<br/><br/>
	<h2>Haftungsausschluss</h2>
	<strong>Links</strong>
	<p>Links, die von dieser Homepage zu anderen Internet-Seiten f&uuml;hren, sind eine Gef&auml;lligkeit gegen&uuml;ber dem Internet-Nutzer. Trotz sorgf&auml;ltiger inhaltlicher Kontrolle &uuml;bernehmen wir keine Haftung f&uuml;r die Inhalte externer Links. F&uuml;r den Inhalt der verlinkten Seiten sind ausschlie&szlig;lich deren Betreiber verantwortlich.</p>
	<br/>
	<strong>Inhalte</strong>
	<p>Die Inhalte unserer Seiten wurden mit gr&ouml;&szlig;ter Sorgfalt erstellt. F&uuml;r die Richtigkeit, Vollst&auml;ndigkeit und Aktualit&auml;t der Inhalte k&ouml;nnen wir jedoch keine Gew&auml;hr &uuml;bernehmen. Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
	<br/><br/>
	<h2>Datenschutz</h2>	
	<p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten m&ouml;glich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit m&ouml;glich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdr&uuml;ckliche Zustimmung nicht an Dritte weitergegeben.</p>
	<br/>
	<p>Wir weisen darauf hin, dass die Daten&uuml;bertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen kann. Ein l&uuml;ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht m&ouml;glich.</p>
	<br/>
	<p>Der Nutzung von im Rahmen der Impressumspflicht ver&ouml;ffentlichten Kontaktdaten durch Dritte zur &Uuml;bersendung von nicht ausdr&uuml;cklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdr&uuml;cklich widersprochen. Die Betreiber der Seiten behalten sich ausdr&uuml;cklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>
	<br/>
	<p>Jeder Zugriff auf unsere Homepage und jeder Abruf einer auf der Homepage hinterlegten Datei werden protokolliert (Serverlog). Die Speicherung dient internen systembezogenen und statistischen Zwecken. Protokolliert werden: Name der abgerufenen Datei, Datum und Uhrzeit des Abrufs, &uuml;bertragene Datenmenge, Meldung &uuml;ber erfolgreichen Abruf, Webbrowser und Referer. Zus&auml;tzlich werden die IP Adressen der anfragenden Rechner protokolliert. Bitte haben Sie Verst&auml;ndnis, dass Serverlogdaten f&uuml;r Sicherheit und Schutz dieser Webpr&auml;senz unbedingt erforderlich sind.</p>
	<br/>
	<p>Weitergehende personenbezogene Daten werden nur erfasst, wenn Sie diese Angaben freiwillig, etwa im Rahmen einer Anfrage oder Registrierung, machen.	
	<br/><br/>
	<a href="index.php" class="link">Zurück zur Startseite</a>
</div>


<a id="nav-kontakt" name="nav-kontakt"></a>
<div id="footer">
	<div class="wrapper">
		<div class="three-cols margin-3cols">
			<h3>Kontaktadresse</h3>
			<p>
				Kanzlei Antje Pulinckx-Maurer<br/>
				Markt 31<br/>
				55116 Mainz
			</p>
			<hr/>
			<span class="uppercase">Tel</span>
			06131 221112<br/>
			
			<span class="uppercase">Fax</span>
			06131 221459<br/>
			
			<span class="uppercase">E-Mail</span>
			<script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%69%6e%66%6f%40%61%2d%6d%61%75%72%65%72%2e%64%65%5c%22%3e%69%6e%66%6f%40%61%2d%6d%61%75%72%65%72%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script>

		</div>
		<div class="three-cols margin-3cols">
			<h3>Schreiben Sie mir</h3>
			<?php
				if(($send=="1") && (isset($err_text))) {
					echo "<div class=\"errors\"><h4>Bitte korrigieren Sie folgende Angaben:</h4>";
					echo "<ul>";
					echo "$err_text</ul></div>";
				}
				if(($send!="1") || (isset($err_text))) {
				?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post" name="mailform" id="mailform" class="mailform">
					<p><label for="fromname">Ihr Name</label>
					<input class="validate[required] field" type="text" name="fromname" id="fromname" value="<?= $from_name; ?>"  /></p>
					
					<p><label for="fromtelefon">Ihre Telefonnummer</label>
					<input class="validate[required] field" name="fromtelefon" id="fromtelefon"  value="<?= $from_telefon; ?>" type="text"  /></p>
					
					<p><label for="frommail">Ihre E-Mailadresse</label>
					<input class="validate[required] field"name="frommail" id="frommail"  value="<?= $from_mail; ?>" type="text"  /></p>
					
					<p><label for="mailtext">Ihre Nachricht</label>
					<textarea class="validate[required,maxSize[2500]]" name="mailtext" id="mailtext"><?= $mail_text; ?></textarea></p>
					<input type="hidden" value="1" name="s" />
					<input type="submit" class="submit" value="Absenden" />
				</form>
				<?php
				} else {
					$header="From: $from_name <$from_mail>\n";
					$header.="Reply-To: $from_mail\n";
					$header.="X-Mailer: PHP-FormMailer\n";
					$header.="Content-Type: text/plain; charset=UTF-8";
					$mail_date=gmdate("D, d M Y H:i:s")." +0000";
					$send=0;
					if(@mail($mail_to,$mail_subject,$mail_text,$header))
					{
						echo "<p><b>Ihre E-Mail wurde erfolgreich versendet. Vielen Dank.</b></p>";
						echo "<p><a href=\"".$_SERVER['PHP_SELF']."\">Zur&uuml;ck zur Startseite</a></p>";
					}else{
						echo "<p><b>Beim Versenden der E-Mail ist ein Fehler aufgetreten!</b></p>";
						echo "<p><a href=\"".$_SERVER['PHP_SELF']."?from_name=$from_name&from_mail=$from_mail&from_telefon=$from_telefon&mail_subject=$mail_subject&mail_text=";
						echo urlencode($mail_text)."\">Zur&uuml;ck zur Seite</a></p>";
					}
				}
				?>
		</div>
		<div class="three-cols font-small">
			<h3>&nbsp;</h3>
			<p>© <? echo date("Y"); ?> Rechtsanwältin Antje Pulinckx-Maurer</p><a href="impressum.php">Impressum</a>
			<hr/>
		</div>
		
	</div>
</div>
<div id="totop">
	<a href="#start">Zum Seitenanfang</a>
</div>

</body>
</html>