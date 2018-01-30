<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>meteve | Add </title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "add/finder.php",
data: dataString,
cache: false,
success: function(html)
{
$(".channel").html(html);
}
});

});

});
</script>
</head>
<body>
<div id="wrap">

	<?php
		include "header.php";
	?>
	<div id="main" class="frontpage">
<!-- provjera jeli ulogiran -->
	<?php
		if (isset($_SESSION['username']))  
		{ 
	?>

<!-- pocetna -->

	<div id="left_add">
		<?php
//brisanje prostora izmedju 
			$_POST['pr'] = trim($_POST['pr']);

		?>
		<strong>URL stream:</strong><form action="#" method="post" accept-charset="utf-8"><input type="text" name="pr" value="<?php if(isset($_POST['pr']))
		{echo $_POST['pr'];}?>" size="70"  /> 
		Player:
		<select name="pl" SIZE=1>
			<option value="v">VLC</option>
			<option value="fj">FLASH-JW PLAYER</option>
			<option value="fa">FLASH-ADOBE PLAYER</option>
			<option value="ff">FLASH-FLOW PLAYER</option>
			<option value="j">JUSTIN TV</option>
			<option value="l">LIVESTREAM</option>
			<option value="u">USTREAM</option>
			<option value="ve">VEETLE</option>
		</select> 

		<input type="submit" name="submit" value="Start"/><br/></form></form><br/ >
		<?php
			if (!isset($_POST['pr'], $_POST['pl'])) 
			{ 
		?>
		<div id="opis">
			<b>VLC</b> = must start with:<font color="red"><b>[http,rtp,mms,mmsh,rtsp,udp...]</b></font> and can end up with: .stream,.m38u,.f4m ... it can also be YOUTUBE LIVE </br>example:<i>http://174.142.39.25:9985/udp/224.2.2.15:1234</i></br> 
			<b>FLASH-JW PLAYER</b> = must start with: <font color="red"><b>[http,rtmp,rtmps,rtmpe,rtmpt...]</b></font> </br>
			<b>FLASH-FLOW PLAYER</b> = must start with: <font color="red"><b>[http,rtmp,rtmps,rtmpe,rtmpt...]</b></font>  and can end up with: .f4v, it can also be YOUTUBE LIVE</br>
			<b>JUSTIN TV</b> = only channel's name! http://www.justin.tv/<font color="red"><b>name of the channel</b></font></br>&nbsp;&nbsp;&nbsp;&nbsp;e.g.: <i>http://www.justin.tv/<font color="red">dre788</font></i>
			</br><a href="#"> I have link of website, but i dont know what's the URL of stream </a>
		</div>
		<?php
			}
 // provjera jeli veci od 4
			if (isset($_POST['pr'])  AND (isset($_POST['pl'])) AND strlen($_POST['pr']) > 4 ) 
			{
		?>
<!-- playing -->	
		<div id="test_player">
			<?php
				$_SESSION['prijenos'] = $_POST['pr'];
				$_SESSION['player'] = $_POST['pl'];
				$url = $_POST['pr'];
				$player = $_POST['pl'];
				include "add/players_test.php";
			?>
		</div>
		<a href="#">Advance adding</a> l
		<a href="#">Mass adding</a>l
		<a href="#">Help and support</a>
	</div>
<!-- desne opcije za dodavanje kanala -->
	<div id="right_add">
		<form action="add/unos.php" method="post" accept-charset="utf-8"> 
		Country :
		<select name="country" class="country">
		<option selected="selected">--Select Country--</option>
		<?php
			include "core/database/db.php";
			$sql=mysql_query("select id,data from data where weight='1'");
			while($row=mysql_fetch_array($sql))
			{
			$_SESSION['country'] = $row['data'];
			$id=$row['id'];
			$data=$row['data'];
			echo '<option value="'.$id.'">'.$data.'</option>';
			} 
		?>
		</select> <br/><br/>
		Channel :
		<select name="channel" class="channel">
		<option selected="selected">--Select Channel--</option>
		</select>
		</br>
		</br>
		<input type="submit" class="button green bigrounded" value= "SAVE">
		</form>
		<?php 
			}
			else{
			echo "Please insert valid stream";
			}
			 
		?>
	</div> 
 <!-- login za one koji nisu ulogirani -->	
	<?php
		}
		else 
		{echo "<center>Must be logged in to save stream:</br></br>";
		include "includes/widgets/login.php";} 
	?>
	</center></div>
	<?php
		include "footer.php";
	?>
</div>
</body>
</html>