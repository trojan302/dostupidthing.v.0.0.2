<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hai <?= $_SESSION['uname'] ?></title>
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/betta.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/blog.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/font-awesome/css/font-awesome.css">
	<link rel="icon" type="image/png" href="<?= $base_dir; ?>libs/img/icon.png">
	<style>
		.betta-group{
		  padding: 10px;
		  clear: both;
		}
		.betta-pined{
		  text-decoration: none;
		  position: fixed;
		  width: 20%;
		  left:1250px;
		  top:180px;
		  color:white;
		  padding: 10px;
		  border-top-left-radius: 5px;
		  border-bottom-left-radius: 5px;
		}
	</style>
</head>
<body>

	<ul class="betta-navbar betta-light-grey betta-wide betta-padding-8 betta-card-2">
		<li>
		  <a href="<?= $base_dir; ?>" class="betta-margin-left betta-hover-none"><b>Do Stupid</b> Things</a>
		</li>
		<!-- Float links to the right. Hide them on small screens -->
		<li class="betta-right betta-hide-small">
		  <a href="<?= $base_dir; ?>list/projects" class="betta-left">Projects</a>
		  <a href="<?= $base_dir; ?>about/profile" class="betta-left">About</a>
		  <a href="<?= $base_dir; ?>profile/contact" class="betta-left betta-margin-right">Contact</a>
		  <a href="<?= $base_dir; ?>logout/exit" class="betta-left betta-margin-right">Logout</a>
		</li>
	</ul>
	<a href="javascript:;" class="betta-margin betta-blue betta-hover-black betta-pined"><i class="fa fa-user"></i> Profile</a>
	<div class="betta-container betta-padding-large betta-blue betta-center">
		<h1><i class="fa fa-github"></i> Hai Betta Newbie...!</h1>
		<?php // Quotes Data
		$dq      = $db->query("SELECT * FROM quotes ORDER BY RAND()");
		$quotes  = $dq->fetch_assoc(); ?>
		<p class="typed"><?= $quotes['quote']; ?><span class="cursor">|</span></p>
	</div>