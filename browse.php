<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>meteve | Browse</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<meta name="viewport" content="width=device-width, inital-scale=1.0">

</head>
<body>
<div id="wrap">

<?php
	include "header.php";
	
	
?>
  
  <div id="main">
  
    <div id="intro">
     
   
	  
    </div>
	<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT data FROM data WHERE country = 'croatia' AND weight = 0");
	echo '<table class="browse"><h4>Croatia</h4>';

while($row=mysql_fetch_array($q)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=croatia&ch='.$data_url.'"><div style="height:100%;width:100%"> '.$data.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';
	
     $qs = mysql_query("SELECT data FROM data WHERE country = 'bih' AND weight = 0");
	echo '<table class="browse"><h4>BIH</h4>';

while($row=mysql_fetch_array($qs)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=bih&ch='.$data_url.'"><div style="height:100%;width:100%"> '.$data.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';

    $qs = mysql_query("SELECT data FROM data WHERE country = 'serbia' AND weight = 0");
	echo '<table class="browse"><h4>Serbia</h4>';

while($row=mysql_fetch_array($qs)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=serbia&ch='.$data_url.'"><div style="height:100%;width:100%"> '.$data.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';
	?>
    </div>
	</div>
 


</body> <?php
  include "footer.php";
  ?>
</html>