<?php
ob_start();
session_start();
?>
<div id="sis" style="padding-top:160px;">
<center>
<?php

include '../core/init.php';

if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	}
	if (empty($username) || empty($password) === true) {
		echo 'You need to enter username and password';
	} else if (user_exists($username) === false) {
	echo 'We cant find that username';
	} else if (user_active($username) === false) { 'You have not activated your account!';
	} else {
		
		
	
	
		$login = login($username, $password);
		if ($login === false) {
			echo  'That username/password combination is incorrect';
		} else {
	  
		$_SESSION['user_id'] = $login;
		$_SESSION['username'] = $username;
		header ('Location: ../index.php');
		exit();
		
		}
		}
		
		//print_r($errors)

?>
</br><a href="http://meteve.ml/register.php">Go back</a></center>