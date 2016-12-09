<?php

if (isset($_POST['contact_us'])) {

	$notif = '';
	
	// $notif = 'Oke...';
	$uname 		= $_POST['uname'];
	$email 		= $_POST['email'];
	$messages 	= $_POST['messages'];

	$sql = $db->query("INSERT INTO contact_us VALUES ('','$uname','$email','$messages') ");

	if ($sql) {
	
		$notif = 'Oke...';
		
	}

}