<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betta Newbie!</title>
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/betta.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/blog.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/font-awesome/css/font-awesome.css">
	<link rel="icon" type="image/png" href="<?= $base_dir; ?>/libs/img/icon.png">
</head>
<body>

	<div class="betta-container betta-padding-jumbo betta-blue betta-center">
		<h1><i class="fa fa-github"></i> Hai Betta Newbie...!</h1>
		<?php // Quotes Data
		$dq      = $db->query("SELECT * FROM quotes ORDER BY RAND()");
		$quotes  = $dq->fetch_assoc(); ?>
		<p class="typed"><?= $quotes['quote']; ?><span class="cursor">|</span></p>
	</div>
	<ul class="betta-navbar betta-light-grey betta-wide betta-padding-8 betta-card-2">
		<li>
		  <a href="<?= $base_dir; ?>" class="betta-margin-left betta-hover-none"><b>Do Stupid</b> Things</a>
		</li>
		<!-- Float links to the right. Hide them on small screens -->
		<li class="betta-right betta-hide-small">
		  <a href="<?= $base_dir; ?>list/projects" class="betta-left">Projects</a>
		  <a href="<?= $base_dir; ?>about/profile" class="betta-left">About</a>
		  <a href="<?= $base_dir; ?>profile/contact" class="betta-left betta-margin-right">Contact</a>
		</li>
	</ul>