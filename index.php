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

require_once('views/header.php');

if(isset($project)) {
	require_once(SITE_ROOT . "/views/project-header.php");
	require_once(SITE_ROOT . "/projects/{$project}/content.php");
	require_once(SITE_ROOT . "/views/outro.php");
}
else {
	require_once(SITE_ROOT . "/views/landing.php");
	require_once(SITE_ROOT . "/views/outro.php");
}

require_once('views/footer.php');