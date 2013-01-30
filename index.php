<!doctype html>
<html class="no-js">
<?php
// *** Mail Recipe ***
$mail_to="sandra@opoloo.de";
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
<meta name="description" content="Bölli Liegenschaftsverwaltung - Wir verwalten Ihre Immobilien." />
<meta name="author" content="Michael Bölli" />

<title>Rechtsanwältin Antje Pulinckx-Maurer</title>

<!-- Embedding Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.png" type="image/png" />

<!-- General Stylesheet -->
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />

<!-- Fallback Stylesheet -->
<link href="stylesheets/no-fontface.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.6.1.min.js"></script>
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
	$('#leistungen').waypoint(function(event, direction) { $('#nav li').removeClass('active');	if (direction === 'down') { $('#nav-leistungen').addClass('active'); } else { $('#nav-start').addClass('active'); }}, { offset: 120 });
	$('#mediation').waypoint(function(event, direction) { $('#nav li').removeClass('active');	if (direction === 'down') { $('#nav-mediation').addClass('active'); } else { $('#nav-leistungen').addClass('active'); }}, { offset: 120 });
	$('#vita').waypoint(function(event, direction) { $('#nav li').removeClass('active'); if (direction === 'down') { $('#nav-vita').addClass('active'); } else { $('#nav-mediation').addClass('active'); }}, { offset: 120 });
	$('#kontakt').waypoint(function(event, direction) { $('#nav li').removeClass('active'); if (direction === 'down') { $('#nav-kontakt').addClass('active'); } else { $('#nav-vita').addClass('active'); }}, { offset: 120 });

	$("#nav a").smoothScroll({offset: -70, afterScroll: function() {
		$('#nav li').removeClass('active');
		$(this).parent().addClass('active');

	}});

});
-->
</script>

<script type="text/javascript">
<!--
$(document).ready(function(){
  $("label").inFieldLabels();
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
				<li><a href="#nav-start">Start</a></li>
				<li><a href="#nav-leistungen">Leistungen</a></li>
				<li><a href="#nav-mediation">Mediation</a></li>
				<li><a href="#nav-vita">Vita</a></li>
				<li><a href="#nav-kontakt">Kontakt</a></li>
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
<div id="content">
	<a id="nav-leistungen" name="nav-leistungen"></a>
	<div id="leistungen">
		<div class="headline"><h1><span>Leistungen</span></h1></div>
		<ul>
			<li class="l1">
				<h2>Ehescheidung</h2>
				<p>Sie möchten sich scheiden lassen. Das ist Ihr gutes Recht. Es gilt jedoch, einigen Punkten Beachtung zu schenken. <a href="">Erfahren Sie mehr</a></p>
			</li>
			<li class="l2">
				<h2>Ehevertrag</h2>
				<p>Der individuelle Ehevertrag ist die maßgeschneiderte Lösung für den Fall einer Trennung. <a href="">Erfahren Sie mehr</a></p>
			</li>
			<li class="l3">
				<h2>Unterhalt</h2>
				<p>Die Regelung des Unterhaltes ist oft das Wichtigste. Unter einer Trennung sollten auch Ihre Kinder nicht zu leiden haben. <a href="">Erfahren Sie mehr</a></p>
			</li>
			<li class="l4">
				<h2>Zugewinn</h2>
				<p>Zu gerechten Teilen teilen. Doch was ist gerecht? Ein Anwalt kann Ihnen helfen, eine für beide Seiten akzeptable Lösung zu finden. <a href="">Erfahren Sie mehr</a></p>
			</li>
			<li class="l5">
				<h2>Testament</h2>
				<p>Sie entscheiden, was mit Ihrem Vermögen geschieht. Das deutsche Erbrecht ist eine komplexe Materie. <a href="">Erfahren Sie mehr</a></p>
			</li>
			<li class="l6">
				<h2>Rentenausgleich</h2>
				<p>Wahren Sie Ihre Rentenansprüche. Ein Scheidungsantrag hat zwingend Einfluss auf Ihre Altersversorgung. <a href="">Erfahren Sie mehr</a></p>
			</li>
		</ul>
	</div>
	<a id="nav-mediation" name="nav-mediation"></a>
	<div class="headline"><h1><span>Mediation</span></h1></div>
	<div id="mediation">
		<div>
			<div class="two-cols margin-2cols">
				<h2>Mediation</h2>
				<p>Mediation ist ein professionelles, vertrauliches und strukturiertes Verfahren, bei dem die Konfliktparteien mit Hilfe einer dritten, unparteiischen Person – dem Mediator – zu einer eigenverantwortlichen und einvernehmlichen Lösung und damit zur Beilegung des Konfliktes gelangen. Die Mediation kann ein verhältnismäßig einfaches, dafür aber umso erfolgreicheres Mittel zur Einigung darstellen.</p>
			</div>
			<div class="two-cols">
				<h2>Zielgruppen & Arbeitsgebiete</h2>
				<p>Das Mediationsverfahren eignet sich für Personen und Parteien, die festgefahrene Konflikte mit Hilfe einer dritten Person lösen und nicht den Gerichtsweg einschlagen möchten. Als Mediatorin und Expertin für Ehe- und Familienrecht finden Sie in mir eine unabhängige, sachliche und kompetente Beraterin hinsichtlich jeglicher Fragen in diesen komplexen und hochemotionalen Bereichen.</p>
			</div>
		</div>
		<div>
			<div class="two-cols margin-2cols">
				<h2>Voraussetzungen</h2>
				<p>Voraussetzung für eine erfolgreiche Mediation ist, dass die Streitenden bereit sind, sich an einen Tisch zu setzen. Mit Hilfe der Mediatorin, die unabhängig und allparteilich ist, haben Sie die Möglichkeit, sich außergerichtlich, angeleitet und strukturiert im Beisein eines Vermittlers zu unterreden, um die jeweils andere Sichtweise wahrzunehmen und sich konstruktiv zu einigen.</p>
			</div>
			<div class="two-cols">
				<h2>Ziele</h2>
				<p>Bei einer Mediation sollen im Sinne der Fairness Modelle und Absprachen entwickelt werden, die schneller, flexibler und meistens auch kostengünstiger sein können, als langwierige Gerichtsverfahren. Das Bemühen um eine für alle Seiten akzeptable Lösung des Konflikts steht dabei stets im Vordergrund. Ich setze mich explizit dafür ein, dass alle Parteien berücksichtigt werden.</p>
			</div>
		</div>
	</div>
	<a id="nav-vita" name="nav-vita"></a>
	<div class="headline"><h1><span>Vita</span></h1></div>
	<div id="vita">	
		<div class="two-cols margin-2cols">
			<h2>Schwerpunkte</h2>
				<p>Gern berate ich Sie ehrlich, umfassend und kompetent zu jeglichen Fragen und Anliegen, die das Familien- und Eherecht betreffen. Auf folgenden Gebieten liegt der Schwerpunkt meiner Arbeit und meine besondere Expertise.</p>
			    <ul>
				    <li>Eheverträge</li>
				    <li>Ehescheidung</li>
				    <li> Vermögensauseinandersetzung</li>
				    <li> Testamente </li>
				    <li> Mediation</li>
				</ul>
			</div>
			<div class="two-cols">
				<h2>Karriere</h2>
				<p>Seit einigen Jahren habe ich mich auf die Vertretung familienrechtlicher Angelegenheiten spezialisiert. Mit der Zertifizierung zur Mediatorin kann ich Ihnen einen umfassenden Service anbieten, der individuell auf Ihre Bedürfnisse zugeschnitten ist.</p>
			    <ul>
				    <li>Studium der Rechtswissenschaft</li>
				    <li>1989 Auslandstätigkeit in Amerikanischer Familienrechtskanzlei</li>
				    <li> 1991 Zulassung zur Rechtswissenschaft</li>
				    <li> 2009 Fachanwältin für Familienrecht </li>
				    <li> 2012 Mediatorin</li>
				    <li> Mitgliedschaft in der ARGE-Familienrecht des DAV</li>
				    <li> Mitgliedschaft im Rheinhessischen Anwaltsverein</li>
				</ul>
			</div>	
	</div>
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
					<input class="validate[required] field" name="frommail" id="frommail"  value="<?= $from_mail; ?>" type="text"  /></p>
					
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
