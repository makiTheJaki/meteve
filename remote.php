
<?php
include 'core/database/db.php';
	$q = mysql_query("SELECT data FROM data WHERE country = '".$country."' AND weight = 0");
	echo '<table class="remote">';

while($row=mysql_fetch_array($q)) {
$data = strtoupper($row['data']);
$data_url= strtolower($row['data']);
echo '

<tr>
  <td class="remote"><a href ="play.php?co='.$country.'&ch='.$data_url.'"><div style="height:100%;width:100%"> '.$data.' </div></a></td>
</tr> 
'
;
}
echo ' </table>';
	?>
   