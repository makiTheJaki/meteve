<link rel="stylesheet" href="../styles/rating.css" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="rating.js"></script>
<?php
require("core/database/rate_db.php");

connect();

?>

<?php
$q="SELECT total_votes, total_value, rez FROM ".$country." WHERE id= '".$id."'";

$r=mysql_query($q);
if(!$r) echo mysql_error(), "error1";
while($row=mysql_fetch_array($r))
{
	$v=$row['total_votes'];
	$tv=$row['total_value'];
	$rat=$row['rez'];
	
	}
	
echo'
            <div id="rating_'.$id.'" class="ratings">';
                for($k=1;$k<6;$k++){
					if($rat+0.5>$k)$class="star_".$k."  ratings_stars ratings_vote";
					else
					$class="star_".$k." ratings_stars ratings_blank";
					echo '<div class="'.$class.'"></div>';
					}
                echo' <font color="#909090";>('.$v.') </font>
            
        </div>';
?>
