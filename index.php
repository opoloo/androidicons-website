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
			//$(this).children('p:first').show(200);
			$(this).children('p:first a').show(200);
			$(this).height(li_orig_height);
			parent_el.height(parent_orig_height);
		} else {
			var el_offset = $(this).position();
			var anim_dur = 1000;
			//$(this).children('p:first').hide(200);
			$(this).children('p:first a').hide(200);
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
				<li id="nav-start"><a href="#start">Start</a></li>
				<li id="nav-leistungen"><a href="#leistungen">Leistungen</a></li>
				<li id="nav-mediation"><a href="#mediation-wrapper">Mediation</a></li>
				<li id="nav-vita"><a href="#vita-wrapper">Vita</a></li>
				<li id="nav-kontakt"><a href="#kontakt">Kontakt</a></li>
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
	<div id="leistungen">
		<div class="headline"><h1><span>Leistungen</span></h1></div>
		<ul>
			<li class="l1">
				<h2>Ehescheidung</h2>
				<p>Sie möchten sich scheiden lassen. Das ist Ihr gutes Recht. Es gilt jedoch, einigen Punkten Beachtung zu schenken. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Berücksichtigen Sie die gesetzlichen Vorgaben für eine Ehescheidung. Es gilt, eine ganze Reihe von Voraussetzungen zu erfüllen.</p>

					<h3>Voraussetzungen einer Ehescheidung</h3>
					<p>Nach deutschem Recht wird eine Ehe geschieden, wenn sie zerrüttet ist. Das heißt, wenn die Lebensgemeinschaft der Ehepartner nicht mehr besteht und auch nicht erwartet werden kann, dass die Partner die Ehe wiederherstellen.</p>

					<h3>Wie lange dauert die Trennungszeit?</h3>
					<p>Wollen beide Ehepartner geschieden werden, so gilt die Ehe nach einem Jahr Getrenntleben als zerrüttet. Will jedoch ein Ehepartner an der Ehe festhalten, so verlängert sich die Trennungszeit auf drei Jahre. Nach Ablauf von drei Jahren wird dann die Ehe geschieden, auch wenn ein Partner die Ehe fortsetzen möchte.</p>

					<h3>Wie kann die Trennungszeit nachgewiesen werden?</h3>
					<p>Nach dem Gesetz leben die Ehepartner dann getrennt, wenn zwischen ihnen keine häusliche Gemeinschaft mehr besteht. In der Regel erfolgt dies durch den Auszug eines Ehepartners aus der Ehewohnung. Eine häusliche Gemeinschaft besteht jedoch auch dann nicht mehr, wenn die Scheidungswilligen innerhalb der ehelichen Wohnung getrennt leben. Dann ist jedoch eine strikte räumliche Trennung Voraussetzung und sämtliche Versorgungsleistungen für den anderen müssen eingestellt werden.</p>

					<h3>Gibt es Besonderheiten bei der Ehescheidung von Ausländern?</h3>
					<p>Auch wenn kein Ehepartner die deutsche Staatsangehörigkeit besitzt, sind die deutschen Gerichte örtlich zuständig und wenden für die Ehescheidung deutsches Recht an, wenn die Ehepartner in Deutschland leben.</p>

					<h3>Braucht man zur Scheidung immer einen Anwalt?</h3>
					<p>Vor den deutschen Familiengerichten herrscht Anwaltszwang. Nur wenn die Ehe einvernehmlich geschieden werden soll, kann sich nur ein Ehepartner anwaltlich vertreten lassen und der andere kann dem Antrag zustimmen. Nicht-Vertretene dürfen jedoch keine eigenen Anträge vor Gericht stellen.</p>
				</div>
			</li>
			<li class="l2">
				<h2>Ehevertrag</h2>
				<p>Der individuelle Ehevertrag ist die maßgeschneiderte Lösung für den Fall einer Trennung. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Der Abschluss eines Ehevertrags ermöglicht es grundsätzlich, andere Regelungen als die gesetzliche Norm zwischen Ihnen und Ihrem Ehegatten zu vereinbaren, solange nicht einer von Ihnen offensichtlich benachteiligt wird. Sie können sowohl Gütertrennung, Zugewinngemeinschaft als auch Unterhaltsregelungen oder den Rentenausgleich vereinbaren. Ein Ehevertrag wird explizit empfohlen, falls ein Elternteil seine Berufstätigkeit wegen der Erziehung der gemeinsamen Kinder einschränkt oder zeitweise aussetzt.</p>
				</div>
			</li>
			<li class="l3">
				<h2>Unterhalt</h2>
				<p>Die Regelung des Unterhaltes ist oft das Wichtigste. Unter einer Trennung sollten auch Ihre Kinder nicht zu leiden haben. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Wenn die Ehepartner oder die nichtehelichen Eltern auseinander gehen, ist ab dem Zeitpunkt der Trennung der Parteien die Frage des Unterhaltes zu klären.</p>

					<p>Es wird zwischen verschiedenen Unterhaltsarten unterschieden: Zum Kindesunterhalt gilt, dass zunächst derjenige, bei dem die gemeinsamen Kinder nicht dauerhaft leben, an den betreuenden Elternteil Kindesunterhalt zahlen muss. Für das erste Jahr der Trennung kann der bedürftige Ehepartner von dem anderen Trennungsunterhalt verlangen, sofern dieser leistungsfähig ist. Auch Eltern können mit Unterhaltsansprüchen an ihre Kinder herantreten.</p>

					<h3>I. Kindesunterhalt</h3>
					<p>Als ranghöchster Unterhaltsberechtigter ist zunächst der Unterhalt für die gemeinsamen minderjährigen Kinder zu berücksichtigen. Derjenige, bei dem die gemeinsamen Kinder nicht dauerhaft leben, muss an den betreuenden Elternteil Kindesunterhalt zahlen.</p>

					<p>Dieser richtet sich nach dem Einkommen des barunterhaltspflichtigen Elternteils. Erst wenn die Kinder volljährig werden, sind beide Elternteile ihrem Einkommen entsprechend zum Unterhalt verpflichtet.</p>

					<p>Das Einkommen des Pflichtigen errechnet sich aus 1/12 seines Jahresnettoeinkommens, wobei aber auch ehebedingte Verbindlichkeiten berücksichtigt werden, jedoch sind nicht alle Verbindlichkeiten des Unterhaltspflichtigen abzugsfähig.</p>

					<p>Der Kindesunterhalt errechnet sich anhand der Düsseldorfer Tabelle. Hierbei ist jedoch noch das hälftige staatliche Kindergeld in Abzug zu bringen.</p>

					<h3>II. Ehegattenunterhalt</h3>
					<p>Für das erste Jahr der Trennung kann der bedürftige Ehepartner von dem anderen Trennungsunterhalt verlangen, sofern dieser leistungsfähig ist.</p>

					<p>Auch der nichteheliche Lebenspartner, der ein gemeinsames Kind betreut, hat grundsätzlich während der ersten drei Lebensjahre des gemeinsamen Kindes Anspruch auf Betreuungsunterhalt, sofern er bedürftig und der andere leistungsfähig ist. Sobald die Kinder alt genug sind und nicht mehr der Rund-um-die-Uhr-Betreuung bedürfen, kann der Mutter zugemutet werden, wieder eine Erwerbstätigkeit auszuüben.</p>

					<p>Sollten die Ehepartner mit dieser Regelung nicht einverstanden sein, so empfiehlt sich der Abschluss eines Ehevertrages, der diese Nachteile berücksichtigt und andere Möglichkeiten, wie z.B. die Einführung eines Alterphasenmodells vorsieht.</p>

					<p>Auch der Unterhaltsanspruch wegen Alters, Krankheit und der Aufstockungsunterhalt ist nach der neuen Unterhaltsreform zu begrenzen und darf derzeit nicht länger als 1/3 bis 1/4 der Ehezeit betragen.</p>

					<p>Nur noch in ganz seltenen Ausnahmefällen erkennt das Gericht einen unbegrenzten Unterhaltsanspruch aus Vertrauensschutz, oder bei ehebedingtem Nachteil an.</p>

					<h3>III. Elternunterhalt</h3>
					<p>Auch Eltern können mit Unterhaltsansprüchen an ihre Kinder herantreten. Dies geschieht häufig dann, wenn betagte Eltern zum Pflegefall werden und die Rente nicht ausreicht, um die Heimpflegekosten zu decken. Voraussetzung ist jedoch, dass die Kinder leistungsfähig sind, insbesondere wenn noch im Rang vorgehende Unterhaltspflichtige vorhanden sind.</p>

				</div>
			</li>
			<li class="l4">
				<h2>Zugewinn</h2>
				<p>Zu gerechten Teilen teilen. Doch was ist gerecht? Ein Anwalt kann Ihnen helfen, eine für beide Seiten akzeptable Lösung zu finden. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Wenn es zur Verteilung des gemeinsamen Vermögens kommt, ist der gesetzliche Normalfall in Deutschland die Zugewinngemeinschaft (falls Sie mit Ihrem Ehepartner keine anderweitige notarielle Regelung getroffen haben). Nach Scheitern der Ehe wird das während der Ehe hinzugekommene Vermögen zwischen den Eheleuten hälftig aufgeteilt. Übersteigt der Zugewinn eines Ehepartners den Zugewinn des anderen, so steht dem anderen die Hälfte des Überschusses als Ausgleichsforderung zu. Schenkungen oder Erbschaften während der Ehe werden differenziert behandelt. Wenn Sie sich in diesen Fragen uneinig sind, wird ausdrücklich empfohlen, einen Anwalt hinzuzuziehen.</p>
				</div>
			</li>
			<li class="l5">
				<h2>Testament</h2>
				<p>Sie entscheiden, was mit Ihrem Vermögen geschieht. Das deutsche Erbrecht ist eine komplexe Materie. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Es enthält einige Fallstricke, die Sie durch Einrichtung eines Testamentes verhindern können. Durch geschickte Regelungen vermeiden Sie Streit in der nächsten Generation oder sichern den Bestand von Familienvermögen.</p>
				</div>
			</li>
			<li class="l6">
				<h2>Rentenausgleich</h2>
				<p>Wahren Sie Ihre Rentenansprüche. Ein Scheidungsantrag hat zwingend Einfluss auf Ihre Altersversorgung. <a href="#">Erfahren Sie mehr</a></p>
				<div class="extended_content">
					<p>Wie beim Zugewinnausgleich sollen hierbei die während der Ehe erwirtschafteten Rentenansprüche aufgeteilt werden. Damit auch der Ehepartner, der während der Ehe durch bsp. Kindererziehung nur wenig Rentenansprüche erworben hat, im Alter versorgt ist, hat der Gesetzgeber veranlasst, dass alle während der Ehezeit erwirtschafteten Rentenanwartschaften, sei es aus einer gesetzlichen, einer betrieblichen oder aber einer privaten Rentenversicherung, zur Hälfte auf den anderen Ehegatten übertragen werden müssen.</p>
				</div>
			</li>
		</ul>
	</div>
	<div id="mediation-wrapper">
		<div class="headline"><h1><span>Mediation</span></h1></div>
		<div id="mediation">
			<div>
				<div class="two-cols margin-2cols">
					<h2 class="ic_1">Mediation</h2>
					<p>Mediation ist ein professionelles, vertrauliches und strukturiertes Verfahren, bei dem die Konfliktparteien mit Hilfe einer dritten, unparteiischen Person – dem Mediator – zu einer eigenverantwortlichen und einvernehmlichen Lösung und damit zur Beilegung des Konfliktes gelangen. Die Mediation kann ein verhältnismäßig einfaches, dafür aber umso erfolgreicheres Mittel zur Einigung darstellen.</p>
				</div>
				<div class="two-cols">
					<h2 class="ic_2">Zielgruppen & Arbeitsgebiete</h2>
					<p>Das Mediationsverfahren eignet sich für Personen und Parteien, die festgefahrene Konflikte mit Hilfe einer dritten Person lösen und nicht den Gerichtsweg einschlagen möchten. Als Mediatorin und Expertin für Ehe- und Familienrecht finden Sie in mir eine unabhängige, sachliche und kompetente Beraterin hinsichtlich jeglicher Fragen in diesen komplexen und hochemotionalen Bereichen.</p>
				</div>
			</div>
			<div>
				<div class="two-cols margin-2cols">
					<h2 class="ic_3">Voraussetzungen</h2>
					<p>Voraussetzung für eine erfolgreiche Mediation ist, dass die Streitenden bereit sind, sich an einen Tisch zu setzen. Mit Hilfe der Mediatorin, die unabhängig und allparteilich ist, haben Sie die Möglichkeit, sich außergerichtlich, angeleitet und strukturiert im Beisein eines Vermittlers zu unterreden, um die jeweils andere Sichtweise wahrzunehmen und sich konstruktiv zu einigen.</p>
				</div>
				<div class="two-cols">
					<h2 class="ic_4">Ziele</h2>
					<p>Bei einer Mediation sollen im Sinne der Fairness Modelle und Absprachen entwickelt werden, die schneller, flexibler und meistens auch kostengünstiger sein können, als langwierige Gerichtsverfahren. Das Bemühen um eine für alle Seiten akzeptable Lösung des Konflikts steht dabei stets im Vordergrund. Ich setze mich explizit dafür ein, dass alle Parteien berücksichtigt werden.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="vita-wrapper">	
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
</div>

<div id="footer">
	<div class="wrapper" id="kontakt">
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
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>#kontakt" method="post" name="mailform" id="mailform" class="mailform">
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
