<?php
session_start();

include 'config.php';
include 'function.php';

if (isset($_POST['login'])) {
	
	$username = mysql_real_escape_string($_POST['username']);
	$email	  = mysql_real_escape_string($_POST['email']);

	$sql  = $db->query("SELECT * FROM users WHERE username='$username' AND email='$email' ");
	$data = $sql->fetch_assoc();

	if ($username == $data['username'] && $email == $data['email']) {
		
		$_SESSION['uname'] = $username;
		redirect(0, "index.php");

	}else{
		
		redirect(3, "login.php");
	}

}