<?php

const SITE_URL = "http://ux.darkostanimirovic.com/";
const SITE_ROOT = __DIR__;

$bodyClass = "page-landing";

if(array_key_exists('project', $_GET)) {
	$project = $_GET['project'];
	if(! in_array($project, array('citizenshipper', 'giftconnect', 'buzzit', 'fast', 'ourhouse', 'p28'))) {
		header("Location: " . SITE_URL);
		die();
	}

	$bodyClass = "page-project project-{$project}";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Darko Stanimirovic | UX designer with web development skills</title>
	<link rel="stylesheet" href="/vendors/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Rokkitt:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/style.css">
</head>
<body class="<?php echo $bodyClass; ?>">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PQ63TR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ63TR');</script>
<!-- End Google Tag Manager -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=406417912739587";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
	
	if(isset($project)) {
		require_once(SITE_ROOT . "/components/project-header.php");
		require_once(SITE_ROOT . "/projects/{$project}/content.php");
		require_once(SITE_ROOT . "/components/outro.php");
	}
	else {
		require_once(SITE_ROOT . "/components/landing.php");
		require_once(SITE_ROOT . "/components/outro.php");
	}

?>
</body>
</html>