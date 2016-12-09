<?php
include "config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/betta.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/css/blog.css">
	<link rel="stylesheet" href="<?= $base_dir; ?>libs/font-awesome/css/font-awesome.css">
	<link rel="icon" type="image/png" href="<?= $base_dir; ?>libs/img/icon.png">
	<style>
		.betta-bg1{
		  background-image: url(libs/img/one_step_at_a_time.jpg);
		  background-size: cover;
		  color: white;
		}
	</style>
</head>
<body class="betta-bg1">

	<div class="betta-display-container">
		<form action="<?= $base_dir; ?>config/login_act.php" method="POST">
		<div class="betta-display-middle betta-border betta-padding-large betta-round" style="margin-top: 250px;width: 50%;">
			<h2>Login Member</h2>
			<hr>
			<div class="betta-group">
				<i class="fa fa-user fa-1x betta-left betta-blue" style="border-top-left-radius:6px;border-bottom-left-radius:5px;margin-right: 0px;padding:10px;"></i>
				<input type="text" name="username" class="betta-left" placeholder="Enter Username" style="border-top-right-radius:6px;border-bottom-right-radius:5px;border: 1px solid grey;width: 90%;padding: 5px;" required>
			</div>
			<br>
			<div class="betta-group">
				<i class="fa fa-lock fa-1x betta-left betta-blue" style="border-top-left-radius:6px;border-bottom-left-radius:5px;margin-right: 0px;padding:10px;"></i>
				<input type="password" name="email" class="betta-left" placeholder="Enter Password" style="border-top-right-radius:6px;border-bottom-right-radius:5px;border: 1px solid grey;width: 90%;padding: 5px;" required>
			</div>
			<br><br>
			<input type="submit" name="login" class="betta-btn betta-round betta-blue" value="Logged In.">
			&nbsp;&nbsp;&nbsp;
			<a href="register.php" style="text-decoration: none;">Create Account ?</a>
		</div>
		</form>

	</div>
	
</body>
</html>