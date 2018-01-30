<?php if(!isset($_SESSION)) {session_start();}?>
<?php 
$rating_tableName     = $_SESSION['country'];
$user 				  = $_SESSION['username'];
$rating_unitwidth     = 15;
$rating_dbname        = 'plavo_channels';
$units=5;
function connect(){
	$host="localhost";
 $uname="plavo_user";
 $pass="user";
 $rating_dbname        = 'plavo_channels';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


