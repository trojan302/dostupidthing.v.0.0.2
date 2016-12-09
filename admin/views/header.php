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

<!-- Sidenav/menu -->
<nav class="betta-animate-left betta-sidenav betta-red betta-collapse betta-top betta-large betta-padding" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
<a href="javascript:void(0)" onclick="betta_close()" class="betta-padding-xlarge betta-hide-large betta-display-topleft betta-hover-white" style="width:100%">Close Menu</a>
<div class="betta-container">
<h3 class="betta-padding-64"><b>Admin<br>Dashboard</b></h3>
</div>
<a href="#" onclick="betta_close()" class="betta-padding betta-hover-white">Home</a> 
<a href="#Trafic" onclick="betta_close()" class="betta-padding betta-hover-white">Trafic</a> 
<a href="#Project" onclick="betta_close()" class="betta-padding betta-hover-white">Project</a> 
<a href="#Profile" onclick="betta_close()" class="betta-padding betta-hover-white">Profile</a> 
<a href="#Contact" onclick="betta_close()" class="betta-padding betta-hover-white">Contact</a> 
<a href="#Tag" onclick="betta_close()" class="betta-padding betta-hover-white">Tag</a>
</nav>

<!-- Top menu on small screens -->
<header class="betta-container betta-top betta-hide-large betta-red betta-xlarge betta-padding">
<a href="javascript:void(0)" class="betta-btn betta-red betta-border betta-border-white betta-margin-right" onclick="betta_open()">&#9776;</a>
<span>Admin Dashboard</span>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="betta-overlay betta-hide-large" onclick="betta_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="betta-main betta-animate-top" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="betta-container" style="margin-top:80px" id="Trafic">
    <h1 class="betta-jumbo"><b><i class="fa fa-link"></i> Do Stupid Thing</b></h1>
    <h1 class="betta-xxxlarge betta-text-red"><b>Trafic <i class="fa fa-area-chart"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
  </div>