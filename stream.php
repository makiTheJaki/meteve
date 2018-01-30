<?php
include 'core/database/db.php'; 
include "core/functions/time.php";
?>
 <script type="text/javascript"> function hide() { for(i=0; i<hide.arguments.length; i++) { document.getElementById(hide.arguments[i]).style.display = 'none'; } }function show(id) { hide('d1', 'd2', 'd3'); document.getElementById(id).style.display = 'block'; } </script>
<div id="others">Other streams, order by: </b><a href="javascript://" onclick="show('d1')"> Newest added </a> | <a href="javascript://" onclick="show('d2')">Ratings</a> | <a href="javascript://" onclick="show('d3')">Popularity</a>
</div></br>
<div style="display: inline;" id="d1">
<?php
$qt = mysql_query("SELECT * FROM ".$country." WHERE channel = '".$channel."' ORDER BY time DESC LIMIT 10");
echo '<table class="stream">';
while($row=mysql_fetch_array($qt)) {
	$v=$row['total_votes'];
	$tv=$row['total_value'];
	$rat=$row['rez'];
	$views=$row['views'];
	$time = $row['time'];
echo'
<tr>
  
  <td class="stream"><a href ="play.php?co='.$country.'&id='.$row['id'].'"><div style="height:100%;width:100%"><div id="others3"> Stream '.$row['id'].'</a> </div>('.$row['user'].')<div id="others2"><img width = 20px, src= "images/players/'.$row['player'].'1.png"></td><td class="stream"> </td><td class="stream">'.$views.' views</td><td class="stream">'.time_elapsed_string($time).'</td><td class="stream">
				';
                for($k=1;$k<6;$k++){
				if($rat+0.5>$k)$class="star_".$k."  ratings_stars2 ratings_vote2";
					else
					$class="star_".$k." ratings_stars2 ratings_blank2";
					echo '<div class="'.$class.'"></div>';
            } echo '('.$v.')'; '
        </td></div>
</tr> 
';}
echo '</table>';
	?>
</div>
</div>
<div style="display: none;" id="d2">
<?php
$qt = mysql_query("SELECT * FROM ".$country." WHERE channel = '".$channel."' ORDER BY rez DESC LIMIT 10");
echo '<table class="stream">';
while($row=mysql_fetch_array($qt)) {
	$v=$row['total_votes'];
	$tv=$row['total_value'];
	$rat=$row['rez'];
	$views=$row['views'];
	$time = $row['time'];
	
echo'
<tr>
  <td class="stream"><a href ="play.php?co='.$country.'&id='.$row['id'].'"><div style="height:100%;width:100%"> Stream '.$row['id'].' ('.$row['user'].')<img width = 20px, src= "images/players/'.$row['player'].'1.png"></td><td class="stream"> </td><td class="stream">'.$views.' views</td><td class="stream">'.time_elapsed_string($time).'</td><td class="stream">
				';
                for($k=1;$k<6;$k++){
				if($rat+0.5>$k)$class="star_".$k."  ratings_stars2 ratings_vote2";
					else
					$class="star_".$k." ratings_stars2 ratings_blank2";
					echo '<div class="'.$class.'"></div>';
            } echo '('.$v.')'; '
        </td>
</tr> 
';}
echo '</table>';
	?>
</div></a>
</div>

<div style="display: none;" id="d3">
<?php
$qt = mysql_query("SELECT * FROM ".$country." WHERE channel = '".$channel."' ORDER BY views DESC LIMIT 10");
echo '<table class="stream">';
while($row=mysql_fetch_array($qt)) {
	$v=$row['total_votes'];
	$tv=$row['total_value'];
	$rat=$row['rez'];
	$views=$row['views'];
	$time = $row['time'];
echo'
<tr>
  
  <td class="stream"><a href ="play.php?co='.$country.'&id='.$row['id'].'"><div style="height:100%;width:100%"> Stream '.$row['id'].' ('.$row['user'].')<img width = 20px, src= "images/players/'.$row['player'].'1.png"></td><td class="stream"> </td><td class="stream">'.$views.' views</td><td class="stream">'.time_elapsed_string($time).'</td><td class="stream">
				';
                for($k=1;$k<6;$k++){
				if($rat+0.5>$k)$class="star_".$k."  ratings_stars2 ratings_vote2";
					else
					$class="star_".$k." ratings_stars2 ratings_blank2";
					echo '<div class="'.$class.'"></div>';
            } echo '('.$v.')'; '
        </td>
</tr> 
';}
echo '</table>';
	?>
</div></a>
</div>