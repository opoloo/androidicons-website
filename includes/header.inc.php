<!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="keywords" content="" />

<title>Wendel Pool & Wellness</title>

<!-- Embedding Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.png" type="image/png" />

<!-- include jQuery + carouFredSel plugin -->
<script type="text/javascript" language="javascript" src="scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" language="javascript" src="scripts/jquery.carouFredSel-6.2.0-packed.js"></script>

<!-- General Stylesheet -->
<link href="stylesheets/output.css" rel="stylesheet" type="text/css" />

<!-- fire plugin onDocumentReady -->
<script type="text/javascript" language="javascript">
$(function() {

	$("#slideheader").carouFredSel({
		items: {
			visible: 1,
			//width: 960
			
		},
		scroll: {
			items: 1,
			pauseOnHover: true
		},
		prev: {
			button: "#prev",
			key: "left"
		},
		next: {
			button: "#next",
			key: "right"
		},
		swipe: true
		
	});

});
</script>


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