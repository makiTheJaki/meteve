<?php
function email ($to, $subject, $body){


require_once 'lib/swift_required.php';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
$transport = Swift_SmtpTransport::newInstance('smtp.live.com', 587, "tls")
  ->setUsername('meteve@outlook.com')
  ->setPassword('golatificon@1992');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($subject)
  ->setFrom(array('meteve@outlook.com' => 'ME TEVE'))
  ->setTo(array($to))
  ->setBody($body);

$result = $mailer->send($message);


}


function array_sanitize(&$item) {
	$item = mysql_real_escape_string($item);
}

function sanitize($data) {
	return mysql_real_escape_string($data);
}
function output_errors($errors) {
return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>