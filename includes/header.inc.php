<!doctype html>
<html class="no-js">
<head>

<?php
// *** Mail Recipe ***
$mail_to="sandra@opoloo.de";
$mail_subject="[Wendel Kontaktanfrage]";
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Wendel Pool & Wellness | Wir bauen Ihnen in Maßarbeit Ihr Wunsch-Schwimmbad" />
<meta name="author" content="Torsten Wendel" />
<meta name="keywords" content="wendel, schwimmbad, wasser, natur, hotelbad, gartenbad, architekt, bau, wasserlandschaft, lebensraum" />

<title>Schwimmbadarchitekt Wendel | Pool & Wellness</title>

<!-- Embedding Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.png" type="image/png" />

<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
<link href="stylesheets/magnific-popup.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<body>

<!-- Begin Header -->
<div id="meta">
	<div class="container">
		<div class="row">
		  <div class="col span12">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="Logo Wendel Pool & Wellness" /></a>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php" <? echo ($active == 'index')?'class="active"':''; ?>>Start</a>//</li>
					<li><a href="konzeption.php" <? echo ($active == 'konzeption')?'class="active"':''; ?>>Konzeption</a>//</li>
					<li><a href="inspiration.php" <? echo ($active == 'inspiration')?'class="active"':''; ?>>Inspiration</a>//</li>
					<li><a href="kontakt.php" <? echo ($active == 'kontakt')?'class="active"':''; ?>>Kontakt</a></li>
				</ul>
			</div>
		  </div>
		</div>
	</div>
</div>
