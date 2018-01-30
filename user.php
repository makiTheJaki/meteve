<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>meteve | User</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<meta name="viewport" content="width=device-width, inital-scale=1.0">

</head>
<body>
<div id="wrap">

<?php
	include "header.php";

	if (isset($_GET[user])){
		$user = $_GET[user];
	}
	else 
		echo "Please, choose user to see what did he upload.";
?>
  
  <div id="main">
  
    <div id="intro">
     
      <h2>Browse <?php echo $user."'s";?> streams</a></h2>
    </div>
	<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT * FROM croatia WHERE user = '".$user."'");
	echo '<table class="browse"><h4>Croatia</h4>';

while($row=mysql_fetch_array($q)) {
$id = $row['id'];
$channel= strtoupper($row['channel']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=croatia&id='.$id.'"><div style="height:100%;width:100%"> '.$channel.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';
	
     $qs = mysql_query("SELECT * FROM bih WHERE user = '".$user."'");
	echo '<table class="browse"><h4>BiH</h4>';

while($row=mysql_fetch_array($qs)) {
$id = $row['id'];
$channel= strtoupper($row['channel']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=bih&id='.$id.'"><div style="height:100%;width:100%"> '.$channel.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';
	
     $qs = mysql_query("SELECT * FROM serbia WHERE user = '".$user."'");
	echo '<table class="browse"><h4>Serbia</h4>';


while($row=mysql_fetch_array($qs)) {
$id = $row['id'];
$channel= strtoupper($row['channel']);
echo '

<tr>
  <td class="browse"><a href ="play.php?co=serbia&id='.$id.'"><div style="height:100%;width:100%"> '.$channel.' </div></a></td>
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