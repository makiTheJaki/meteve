<?php
require_once 'lib/swift_required.php';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
$transport = Swift_SmtpTransport::newInstance('smtp.live.com', 587, "tls")
  ->setUsername('meteve@outlook.com')
  ->setPassword('golatificon@1992');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Pismo')
  ->setFrom(array('meteve@outlook.com' => 'ME TEVE'))
  ->setTo(array('marko.jakovljevic92@gmail.com'))
  ->setBody('hey sta ima');

$result = $mailer->send($message);
?>