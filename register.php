<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>meteve</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<?php
include 'core/init.php';

?>
</head>
<body>
<div id="wrap">
<?php
	include "header.php";
	?>
	
	<?php
	
	if (empty($_POST) === false) {
	$required_fields = array('username','password','password_again','email');
	foreach($_POST as $key=>$value){
		if (empty($value) && in_array($key, $required_fields) === true){
		$errors[] = 'Fields marked are required!';
		break 1;
		}
	}
	if (empty($errors) === true) {
	if (user_exists($_POST['username']) === true) { 
		$errors[] = 'Sorry, the username '.$_POST['username'].' is already taken';
	
	}
	if (preg_match("/\\s/", $_POST['username']) == true) {
		$errors[] = 'Your username must not have any spaces';
	}
	if (strlen($_POST['password']) < 6) {
		$errors[] = 'Your password must be at least 6 characters';
	}
	if ($_POST['password'] !== $_POST['password_again']) {
		$errors[] = 'Your passwords do not match';
	
	}
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
		$errors[] = 'A valid email adress is required';
	}
	if (email_exists ($_POST['email'] === true)) {
		$errors[] = 'Sorry, the email \'' .$_POST['email']. '\' is already in use';
	}
	}
	}
	
?>

<div id="main" class="frontpage">


<?php
if (isset($_GET['success'])){
	echo 'You\ve been registered successfully!';
}
else {
if (empty($_POST) === false && empty($errors) === true) {
$register_data = array (
 'username'		=> $_POST['username'],
 'password' 	=> $_POST['password'],
 'email' 		=> $_POST['email'],
 'email_code'	=> md5 ($_POST['username'] + microtime())
 )
;

register_user($register_data);
echo 'You\ve been registered successfully! Please check your email, inbox or spam folder to activate your account.';
exit();

} else if (empty($errors) === false) {
echo output_errors($errors);
}
}
?>

<div id="register">
	<h2>Register</h2>
<form action="" method="post">
	<ul>
	<li>
		Username*: <br>
		<input type="text" name="username">
	</li>
	<li>
	Password*: <br>
		<input type="password" name="password">
	</li>
	<li>
	Password again*: <br>
		<input type="password" name="password_again">
	</li>
	<li>
	E-mail*:<br>
	<input type="text" name="email">
	</li>
	<li>
	From what country you want to watch channels:<br>
	<input type="text" name="home">
	</li>
	<li>
	<input type="submit" value="Register">
	</li>
	</ul>
</form>
</div>

<?php
include "includes/widgets/login.php";

?>

</div>
 <?php
  include "footer.php";
  ?>
</div>

</body>
</html>