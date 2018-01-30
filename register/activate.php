<?php

include '../core/init.php';
if(isset($_GET['success']) === true && empty($_GET['success']) === true){
	echo 'tnx we activated your acc, click <a href="../register.php">here to login';

}
else if(isset($_GET['email'], $_GET['email_code']) === true) {
$email		=	trim($_GET['email']);
$email_code	=	trim($_GET['email_code']);

	if (email_exists($email) === false){
	$errors[] = 'Oops, something went wrong, we couldnt find that email!';
		}
	else if (activate($email, $email_code) === false) {
	$errors[] = 'We had problems activating your account';
}
if (empty($errors) === false){
echo "Error" . output_errors($errors);

}
else {
echo "uspjeh";
header ('Location: activate.php?success');
exit();
}

}

else  {
//header ('Location: index.php');
exit();
}


?>