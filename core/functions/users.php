<?php

function activate ($email, $email_code) {
	$email	= mysql_real_escape_string($email);
	$email_code	= mysql_real_escape_string($email_code);


	if	(mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '".$email."' AND `email_code` = '".$email_code."' AND `active` = 0"), 0) == 1)
{
	mysql_query("UPDATE `users` SET `active` = 1 WHERE `email` = '".$email."'");
return true;
}else{
echo $email.$email_code.'something gone wrong'. mysql_error();

	return false;
	
}
}
if (!mysql_select_db('b11_14678213_user')) {
    die('Could not select database: ' . mysql_error());
}

function register_user($register_data) {
array_walk($register_data, 'array_sanitize');
$register_data['password'] = md5($register_data['password']);
 '`' . implode('`, `', $register_data) . '`' ;
$fields = '`' . implode('`, `', array_keys($register_data)) . '`' ;
$data =  '\'' . implode('\', \'', $register_data) . '\'';



mysql_query("INSERT INTO users ($fields) VALUES ($data)");
email ($register_data['email'], 'Activate your account', "Hello " . $register_data['username'] . "\n\n You need to activate your account, so use the link below: \n\n
http://www.meteve.ml/register/activate.php?email="	. $register_data['email'] .	"&email_code=" . $register_data['email_code'] ." \n\n------------\n\n meteve.ml"
);
}


function logged_in () {
	return(isset($_SESSION['user_id'])) ? true : false;
	}

function user_exists($username) {
	$username = sanitize($username);


	
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true : false;
	

	
	
}


function email_exists($email) {
	if (isset($_POST['email'])){
	$email = $_POST['email'];}
	$email = sanitize($email);
	
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email'"), 0) == 1) ? true : false;
	

	
	
}

function user_active($username){
	$username = sanitize($username);
	//ako je O=O istina je ako ne nije istina
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username' AND `active` = 1 "), 0) == 1) ? true : false;
	

	}
	
	function user_id_from_username($username){
	$username = sanitize($username);
	//ako je O=O istina je ako ne nije istina
	return mysql_result(mysql_query("SELECT(`id`) FROM `users` WHERE `username` = '$username'"), 0, 'id');
	
	}
	
	function login ($username, $password) {
		$user_id = user_id_from_username($username);

		$username = sanitize($username);
		$password = md5 ($password);
		
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
	}
	
	//function username(){
	//return mysql_result(mysql_query("SELECT(`username`) FROM `users` WHERE `id` = '$id'"), 0, 'username');
	
	//}
	?>