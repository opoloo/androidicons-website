<? $active = 'kontakt' ?>
<? require_once('includes/header.inc.php'); ?>

<div id="header">

</div>
<!-- End Header -->
<!-- Begin Content -->
<div class="bg-hell">
    <div class="container">
        <div class="row">
            <div class="col span12">
                <h1>// Wo immer Sie sind,</h1>    
            </div>
        </div>
        <div class="row">
            <div class="col span4">
                <h2>Wir kommen zu Ihnen</h2>
                <p>Ein Hausbesuch bei Ihnen ist für uns selbstverständlich, denn er gehört zu unserem umfassenden Service. Uns ist es wichtig, eng mit unseren Kunden in Kontakt zu stehen.</p>
                <br/>
                <h3>In Mainz & Idar-Oberstein</h3>
                <p>Falls Sie in der Rhein-Main Region oder in der Pfalz wohnen, bietet sich ein Besuch in einer unserer Filialen an. Hier können Sie sich in aller Ruhe einen Überblick über unsere Produkte verschaffen und sich unverbindlich beraten lassen.
                </p><br/>
                <p>Wir freuen uns auf Sie.</p>
            </div>
            <div class="col span4">
                <h2>Schreiben Sie uns</h2>
                <?php
                        if(($send=="1") && (isset($err_text))) {
                            echo "<div class=\"errors\"><h4>Bitte korrigieren Sie folgende Angaben:</h4>";
                            echo "<ul>";
                            echo "$err_text</ul></div>";
                        }
                        if(($send!="1") || (isset($err_text))) {
                        ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post" name="mailform" id="mailform" class="mailform">
                        <p>
                            <label for="fromname">Vorname & Name</label>
                            <input class="validate[required] input" type="text" name="fromname" id="fromname"  value="<?= $from_name; ?>" />
                        </p>
                        <p>
                            <label for="fromtelefon">Telefonnummer</label>
                            <input class="validate[required] input" type="text" name="fromtelefon" id="fromtelefon"  value="<?= $from_telefon; ?>" />
                        </p>
                        <p>
                            <label for="frommail">E-Mailadresse</label>
                            <input class="validate[required] input" type="text" name="frommail" id="frommail"  value="<?= $from_mail; ?>" />
                        </p>
                        <p>
                            <label for="mailtext">Nachricht</label>
                            <textarea  rows="6" name="mailtext" id="mailtext"><?= $mail_text; ?></textarea>
                        </p>
                        <input type="hidden" value="1" name="s" />
                        <button class="submit" type="submit"><span>Senden</span></button>
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
            <div class="col span4">
                <h2>Kontaktadresse</h2>
                <p>Torsten Wendel<br/>
                (Geschäftsführer)<br/><br/>
                
                Fon: 06781 36009-0<br/>
                Fax: 06781 36009-20 <br/>
                Email: <script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%69%6e%66%6f%40%73%63%68%77%69%6d%6d%62%61%64%2d%77%65%6e%64%65%6c%2e%64%65%5c%22%3e%69%6e%66%6f%40%73%63%68%77%69%6d%6d%62%61%64%2d%77%65%6e%64%65%6c%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script>

                </p>
            </div>
        </div>
    </div>
</div>
<div class="bg-dunkel">
    <div class="container">
        <div class="row">
            <div class="col span12">
                <h1>// So finden Sie uns</h1>
            </div>
        </div>
        <div class="row">
            <div class="col span6">
                <h2>Anfahrt Idar-Oberstein</h2>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Wendel+Schwimmbadbau,+Wilhelmstra%C3%9Fe,+Idar-Oberstein&amp;aq=0&amp;oq=wendel+schwimm&amp;sll=51.175806,10.454119&amp;sspn=9.289357,20.808105&amp;t=h&amp;ie=UTF8&amp;hq=Wendel+Schwimmbadbau,&amp;hnear=Wilhelmstra%C3%9Fe,+Oberstein+55743+Idar-Oberstein,+Rheinland-Pfalz&amp;ll=49.702513,7.335062&amp;spn=0.018707,0.040641&amp;z=14&amp;iwloc=A&amp;cid=27701883225859051&amp;output=embed"></iframe><br /><small><a href="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=Wendel+Schwimmbadbau,+Wilhelmstra%C3%9Fe,+Idar-Oberstein&amp;aq=0&amp;oq=wendel+schwimm&amp;sll=51.175806,10.454119&amp;sspn=9.289357,20.808105&amp;t=h&amp;ie=UTF8&amp;hq=Wendel+Schwimmbadbau,&amp;hnear=Wilhelmstra%C3%9Fe,+Oberstein+55743+Idar-Oberstein,+Rheinland-Pfalz&amp;ll=49.702513,7.335062&amp;spn=0.018707,0.040641&amp;z=14&amp;iwloc=A&amp;cid=27701883225859051" style="text-align:left">Größere Kartenansicht</a></small>
            </div>
            <div class="col span6">
                <h2>Anfahrt Mainz</h2>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Am+Schleifweg+15,+Mainz&amp;aq=0&amp;oq=am+schleifweg+15&amp;sll=49.704167,7.335048&amp;sspn=0.018707,0.040641&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Am+Schleifweg+15,+55128+Mainz,+Rheinland-Pfalz&amp;z=14&amp;ll=49.96801,8.24074&amp;output=embed"></iframe><br /><small><a href="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=Am+Schleifweg+15,+Mainz&amp;aq=0&amp;oq=am+schleifweg+15&amp;sll=49.704167,7.335048&amp;sspn=0.018707,0.040641&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Am+Schleifweg+15,+55128+Mainz,+Rheinland-Pfalz&amp;z=14&amp;ll=49.96801,8.24074" style="text-align:left">Größere Kartenansicht</a></small>
            </div>
        </div>
	</div>
</div>
<!-- End Content -->
	
<? require_once('includes/footer.inc.php'); ?>
