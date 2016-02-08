<?php

const SITE_URL = "http://darkoux.com/";
const SITE_ROOT = __DIR__;
$projects = array(
	'keepy',
	'citizenshipper', 
	'giftconnect', 
	'buzzit', 
	'fast', 
	'ourhouse', 
	'p28', 
	'soundmap'
);

$bodyClass = "page-landing";

if(array_key_exists('project', $_GET)) {
	$project = $_GET['project'];
	if(! in_array($project, $projects)) {
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