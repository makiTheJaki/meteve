<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>meteve | Play</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/rating.js"></script>
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<script src="jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="rating.css" />
<script type="text/javascript" src="rating.js"></script>



</head>
<body>
<!---<div id="back">
<span style="font-size: 14px;">Dajte ocjenu prijenosa</br> jer prijenos </br>sa najvecom ocjenom se </br>prikazuje prvi</span>
    </div>
    !-->
<div id="wrap">

<?php
	require 'core/init.php';
	include "header.php";
?>

<div id="main">

<?php
if(isset($_GET['co'], $_GET['id'])) {
	$country = $_GET['co'];
	$_SESSION['country']  = $country;
	$id = $_GET['id'];
	
	include "core/database/db.php";
	$result = mysql_query("SELECT * FROM ".$country." WHERE id = ".$id."") or die( mysql_error());
	while($row = mysql_fetch_array($result) )
  {
    $id = $row['id'];
	$_SESSION['id'] = $id;
    $user1 = strtolower($row['user']);
	$url1 = $row['url'];
	$channel = $row['channel'];
	$views2 = $row['views'];
	$player1 = $row['player'];
	$channel1 = strtoupper($channel);
	$time1 = date('d.m.y', strtotime($row['time']));
	
	}
	
}
	
if(isset($_GET['co'], $_GET['ch'])) {
	$country = $_GET['co'];
	$_SESSION['country']   = $country;
	$channel = $_GET['ch'];
	
	include "core/database/db.php";
	$result = mysql_query("SELECT * FROM ".$country." WHERE channel = '".$channel."'  ORDER BY rez desc LIMIT 1") or die( mysql_error());
	
	while($row = mysql_fetch_array($result) )
  {
	$id	= $row['id'];
	$_SESSION['id'] = $id;
    $user1 = strtolower($row['user']);
	$url1 = $row['url'];
	$channel = $row['channel'];
	$views2 = $row['views'];
	$player1 = $row['player'];
	$channel1 = strtoupper($channel);
	$time1 = date('d.m.y', strtotime($row['time']));
  }

	
	
	
} 

if(isset ($_GET['ch'])) {
	$channel = $_GET['ch'];
	
	include "core/database/db.php";
	// baza data
	$result = mysql_query("SELECT country FROM data WHERE data = '".$channel."'") or die( mysql_error());
	
	while($row = mysql_fetch_array($result) )
  {
	$country = $row['country'];
	}
	$result = mysql_query("SELECT * FROM ".$country." WHERE channel = '".$channel."' AND rez = (select max(rez) from ".$country.") ORDER BY total_votes desc LIMIT 1") or die( mysql_error());
	
	while($row = mysql_fetch_array($result) )
  {
	$id	= $row['id'];
	$_SESSION['id'] = $id;
    $user1 = strtolower($row['user']);
	$url1 = $row['url'];
	$channel = $row['channel'];
	$views2 = $row['views'];
	$player1 = $row['player'];
	$channel1 = strtoupper($channel);
	$time1 = date('d.m.y', strtotime($row['time']));
	
  }
  

	
	
	
}


    $query1 = mysql_query("UPDATE ".$country." SET views = views+1 WHERE id = '".$id."' ");
    

?>
<div id='right'>
	<?php 
	include "remote.php";
	?>
	
	
	</div>

	<div id="left">
	<div id="player_mob">
	<?php
	include "players_mob.php"; 
?>
	</div>
	<div id="player">
	<?php
	include "players.php"; 
?>
	</div>
	
   
	<div id="under">
	<div id="underl">
	<h4><?php echo $channel1; ?></h4><font color="#909090";>stream <?php echo $id; ?> (</font><a href="/user.php?user=<?php echo $user1; ?>"><?php echo $user1; ?></a><font color="#909090";>)</font></br> <font color="#909090";> <?php echo $time1; ?> <span>|</span> <?php echo $views2; ?> views</font></br><?php 
		//echo "<b><font color='red'>Dajte svoju ocjenu stream-a, </br>jer stream sa najvecom ocjenom prikazuje se</br> prvi kada kliknete na kanal </b></font>";
	include "rating.php";

	?>
	</div>
	<div id="streams">
	<?php
	//echo "<b><font color='red'>Ako prijenos ne radi dajte losu ocjenu i
//</br>	odaberite druge prijenose:</font></b></br>";
	
	include "stream.php";
	?>
	</div>
	
	
	</div>
	
	</div>
</div>
<?php
	include "footer.php";
?>
</div>

</body>
</html>