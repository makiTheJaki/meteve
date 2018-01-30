<?php if(!isset($_SESSION)) {session_start();}?>
<?php
include('../core/database/db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select id,data,weight from data where weight = 0 and data like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$channel=$row['data'];

$b_channel='<strong>'.$q.'</strong>';

$final_channel = str_ireplace($q, $b_channel, $channel);
$_SEASON['channel'] = $final_channel;
?>
<div class="show" align="left">
<span class="name"><?php echo $final_channel; ?></span><br/>
</div>
<?php
}
}
?>
