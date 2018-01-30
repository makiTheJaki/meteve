<?php if(!isset($_SESSION)) {session_start();}?>
<?php
include "core/database/db.php";

$channel = $_SESSION['final'];

$sql_res=mysql_query("select id,data,country from data where data = '".$channel."'");
while($row=mysql_fetch_array($sql_res))
{
$country = $row['country'];


}
$sql_res2=mysql_query("select * from ".$country." where channel = '".$channel."' order by total_votes/ )");
?>