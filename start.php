<?php
	$BASE_URL = $_ENV['BASE_URL'];
	$JSON_BASE_URL = json_encode($BASE_URL);
	$SITE_NAME = "dudology";
	$DESCRIPTION = "Computes odds of bids for the game Dudo.";
?><!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<style>
			@-ms-viewport{
				width: device-width;
			}
		</style>
		<link rel="icon" href="<?= $BASE_URL; ?>/favicon.png">
		<link rel="canonical" href="<?= $BASE_URL; ?>/index.html" />
		<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Monofamily=Rubik:wght@400;600&display=swap" rel="stylesheet">
		<!-- END Fonts -->

		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8727379060041743" crossorigin="anonymous"></script>

		<!-- Metadata -->
			<!-- Standard -->
			<title><?= $SITE_NAME ?></title>
			<meta name="description" content="<?= $DESCRIPTION; ?>" />		
		
			<!-- END Standard -->
			<!-- OpenGraph -->
			<meta property="og:title" content="<?= $SITE_NAME ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="<?= $BASE_URL; ?>/" />
			<meta property="og:image" content="<?= $BASE_URL; ?>/opengraph.png" />
			<meta property="og:description" content="<?= $DESCRIPTION; ?>" />
			<meta property="og:locale" content="en_US" />
			
			<!-- END OpenGraph -->
			<!-- TwitterCard -->
		
			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:site" content="@dmcblue">
			<meta name="twitter:creator" content="@dmcblue">
			<meta name="twitter:title" content="dmcblue">
			<meta name="twitter:description" content="<?= $DESCRIPTION; ?>">
			<meta name="twitter:image" content="<?= $BASE_URL; ?>/opengraph.png">
			<!-- END TwitterCard -->
			<!-- Json LD -->
			<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"<?= $JSON_BASE_URL; ?>","url":"<?= $JSON_BASE_URL; ?>","name":"<?= $SITE_NAME ?>","publisher":{"@id":"http:\/\/www.dmcblue.com"}},{"@type":"ImageObject","@id":"<?= $JSON_BASE_URL; ?>\/opengraph.png","url":"<?= $JSON_BASE_URL; ?>\/opengraph.png","width":1273,"height":775},{"@type":"WebPage","@id":"<?= $JSON_BASE_URL; ?>\/","url":"<?= $JSON_BASE_URL; ?>\/","inLanguage":"en-US","name":"dmcblue","isPartOf":{"@id":"<?= $JSON_BASE_URL; ?>"},"primaryImageOfPage":{"@id":"<?= $JSON_BASE_URL; ?>\/opengraph.png"},"datePublished":null,"dateModified":null},{"@type":"Article","@id":"<?= $JSON_BASE_URL; ?>\/","isPartOf":{"@id":"<?= $JSON_BASE_URL; ?>\/"},"author":{"@id":"http:\/\/www.dmcblue.com"},"headline":"dmcblue","datePublished":null,"dateModified":null,"commentCount":0,"mainEntityOfPage":{"@id":"<?= $JSON_BASE_URL; ?>\/"},"publisher":{"@id":"http:\/\/www.dmcblue.com"},"image":{"@id":"<?= $JSON_BASE_URL; ?>\/opengraph.png"},"keywords":"","articleSection":""},{"@type":["Person"],"@id":"http:\/\/www.dmcblue.com","name":"dmcblue","image":{"@type":"ImageObject","@id":"\/opengraph.png","url":"\/opengraph.png","caption":"dmcblue"},"sameAs":[]}]}</script>
			<!-- END Json LD -->
		<!-- END Metadata -->

		<style>
			<?php echo file_get_contents("styles.css"); ?>
		</style>
	</head>
	<body>
		<header class="page-row">
			<h1>
				<a href="index.html"><?= $SITE_NAME ?></a>

				<a href="about.html" class="about">?</a>
			</h1>
		</header>
		<section class="page-row page-row-expanded">
