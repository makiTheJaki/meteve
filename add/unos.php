<?php
if(!isset($_SESSION)) {session_start();}


if (ini_get('register_globals'))
{
    foreach ($_SESSION as $key=>$value)
    {
        if (isset($GLOBALS[$key]))
            unset($GLOBALS[$key]);
    }
}


if (isset($_POST['country'])) {

include "../core/database/db.php";
$q = mysql_query("SELECT country, data FROM data WHERE id = '".$_POST['channel']."' ") ; 

while($row=mysql_fetch_array($q)) {
$country = $row['country'];
$channel = $row['data'];
}
$player = $_SESSION['player'];
$prijenos = $_SESSION['prijenos'];
$user = $_SESSION['username'];
$country = strtolower($country);
$channel = strtolower($channel);

$qp = mysql_query("SELECT id, url, player FROM ".$country." WHERE url = '".$prijenos."' AND player = '".$player."' AND channel = '".$channel."' ") ;
while ($row=mysql_fetch_array($qp)){
$id=$row['id'];

$prijenos2 = $row['url'];
}
if ($prijenos2 === $prijenos) 
{
echo "<center>Sorry, stream is already added</br> Click <a href='http://meteve.ml/play.php?co=".$country."&id=".$id."'>here </a>to see it.</br>Or go <a href='http://meteve.ml/add.php#'>back</a>.</center>";
}
else {

 mysql_query("INSERT INTO ".$country."(channel, url, user, player, time, total_value, rez, total_votes) VALUES('".$channel."', '".$prijenos."', '".$user."', '".$player."', CURRENT_TIMESTAMP(), 3,3,1 ) ") 
or die(mysql_error()); 

$qf = mysql_query("SELECT id FROM ".$country." WHERE url = '".$prijenos."' AND player = '".$player."' AND channel = '".$channel."' ") ;
while ($row=mysql_fetch_array($qf)){
$id=$row['id'];
}
 echo "<center>Stream added!</br> Click <a href='http://meteve.ml/play.php?co=".$country."&id=".$id."'>here </a>to see it.</br>Or go <a href='http://meteve.ml/add.php#'>back</a>.</center>";
 
}
}
else echo "error";
?>


