<?php if(!isset($_SESSION)) {session_start();}?>
<?php 
$rating_tableName     = $_SESSION['country'];
$user 				  = $_SESSION['username'];
$rating_unitwidth     = 15;
 $rating_dbname        = 'b11_14678213_channels';
$units=5;
function connect(){
$host="sql309.byethost11.com";
 $uname="b11_14678213";
 $pass="jpcxb0vn";
 $rating_dbname        = 'b11_14678213_channels';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


