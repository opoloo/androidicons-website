<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php 
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.strato.de";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "fw@frankwilcke.de";  // SMTP username
$mail->Password = "tetyana"; // SMTP password

$mail->From = "fw@frankwilcke.de";
$mail->FromName = "Frank Wilcke";
$mail->AddAddress("fw@frankwilcke.de", "Frank Wilcke");
$mail->AddReplyTo("fw@frankwilcke.de", "Anwort - Information");

$mail->CharSet  =  "utf-8"; 
$mail->WordWrap = 50;                                 // set word wrap to 50 characters

$mail->Subject = "Blog-Abbo";
$mail->Body	=	"Diese Daten wurden im Formular erfasst: \n\n";
	
	foreach ( $_POST as $feldname => $wert )
	{
		//echo  $feldname . " $wert . "<br>\n";
		
		// Anhängen des momentanen Feldes an den Email-Text
		$mail->Body 	.= $feldname . ": " . $wert . "\n";
	}
	


if(!$mail->Send())
{
   echo "Mail konnte nicht versendet werden. Bitte versuchen Sie es noch einmal.<p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "<meta http-equiv=\"refresh\" content=\"1; URL=http://www.a-maurer.com/danke.html\">";

?>

