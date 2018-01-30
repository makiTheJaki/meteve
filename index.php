<?php if(!isset($_SESSION)) {session_start();}?>
<script type="text/javascript">
<!--
if (screen.width <= 900) {
document.location = "browse.php";
}

</script>
<!DOCTYPE html>

<html lang="en">
<head>
<title>meteve | Home</title>

<meta charset="utf-8">
<meta name="Description" content="Watch TV for free,Watch TV on PC for free, Add new streams, Watch TV on android, Watch TV on iphone, Watch TV on ios">
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="rating.js"></script>

<link rel="stylesheet" href="../styles/rating.css" />
</head>
<body>
<div id="wrap">

<?php
	include "header.php";
	include "core/functions/time.php";
?>
  
  <div id="main">
  
   
	<?php
	
	if (isset($_POST['final'])){
	$_SESSION['final'] = $_POST['final']; 
	include 'look.php';
	}
	?>
	<div id="store">
	
   <table class="store">
		
		<h5>New Croatian streams</h5>
   <table class="store">
		<tr>
		<?php
	include "core/database/db.php";
	include 'core/database/rate_db.php'; 
	connect();

	$qt = mysql_query("SELECT * FROM croatia ORDER BY time DESC LIMIT 7");
	while($row=mysql_fetch_array($qt)) {
	$v=$row['total_votes'];
	$tv=$row['total_value'];
	$rat=$row['rez'];
	$time = $row['time'];
	$views =$row['views'];
	$user =$row['user'];
	$id =$row['id'];
	$channel = strtoupper($row['channel']);
	
echo'
	
	<td class="store" >
	<a class="store"href="play.php?co=croatia&id='.$id.'">
    <div style="height:100%;width:100%">
      
    
	<h3><b>'.$channel.' </b></h3><font color="#909090";>stream '.$id.' ('.$user.')</br>  '.time_elapsed_string($time).'</br>  '.$views.' views</br>
        
		';
                for($k=1;$k<6;$k++){
				if($rat+0.5>$k)$class="star_".$k."  ratings_stars2 ratings_vote2";
					else
					$class="star_".$k." ratings_stars2 ratings_blank2";
					echo '<div class="'.$class.'"></div>';
            } echo '('.$v.')<img width = 20px, src= "images/players/'.$row['player'].'.png">'; '
		  </font></div></a><td>
';}


	?>
		</tr></table>
		
		</div>
		<center><h2><b>Croatia</b></h2></center>
<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT data FROM data WHERE country = 'croatia' AND weight = 0");
	echo '<table class="st">		<tr>		';

while($row=mysql_fetch_array($q)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);


	
	
echo'
	
	<td class="st" >
	<a href ="play.php?co=croatia&ch='.$data_url.'"><div style="height:100%;width:100%"><font size="20"> '.$data.' </font></div></a><td>
';}


	?>
		</tr></table>
		
		



	<center><h2><b>BiH</b></h2></center>
<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT data FROM data WHERE country = 'bih' AND weight = 0");
	echo '<table class="st">		<tr>		';

while($row=mysql_fetch_array($q)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);


	
	
echo'
	
	<td class="st" >
	<a href ="play.php?co=bih&ch='.$data_url.'"><div style="height:100%;width:100%"><font size="20"> '.$data.' </font></div></a><td>
';}


	?>
		</tr></table>
		
		

	<center><h2><b>Serbia</b></h2></center>
<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT data FROM data WHERE country = 'serbia' AND weight = 0");
	echo '<table class="st">		<tr>		';

while($row=mysql_fetch_array($q)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);


	
	
echo'
	
	<td class="st" >
	<a href ="play.php?co=serbia&ch='.$data_url.'"><div style="height:100%;width:100%"><font size="20"> '.$data.' </font></div></a><td>
';}


	?>
		</tr></table>
		
		


   </div>
   


  
      
 <?php
  include "footer.php";
  ?>
</body></div>
</html>