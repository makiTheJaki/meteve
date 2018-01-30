<?php
switch($player1){
	case 'v' :
		?>
		
<script type="text/javascript" src="media/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="media/testplayer-1.3.09.min.js"></script>
<video id="player_a"  width="100%" controls>
     <source src="<?php echo $url1; ?>" type="video/ogg"  />
    <source src="<?php echo $url1; ?>" type="video/mp4" />
</video>


<script type="text/javascript">
$(document).ready(function() {
    projekktor('#player_a', {
	volume: 0.8,
		 playerFlashMP4: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf'
		enableFullscreen: true,
		autoplay: true,
		platforms: [ 'vlc', 'flash',  'ios', 'native', 'android', 'browser'],
		videoScaling: '16:9',
		ratio : 16/9
    });
});
</script> </br>
		<?php
		break;
		case 'fj' :
		?>
	
<script type="text/javascript" src="media/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="media/testplayer-1.3.09.min.js"></script>
<video id="player_a"  width="100%" controls>
     <source src="<?php echo $url1; ?>" type="video/ogg"  />
    <source src="<?php echo $url1; ?>" type="video/mp4" />
</video>


<script type="text/javascript">
$(document).ready(function() {
    projekktor('#player_a', {
	volume: 0.8,
		 playerFlashMP4: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf'
		enableFullscreen: true,
		autoplay: true,
		platforms: [ 'vlc', 'flash',  'ios', 'native', 'android', 'browser'],
		videoScaling: '16:9',
		ratio : 16/9
    });
});
</script> </br>
		<?php
		break;
	case 'fa' :
		?>
		<embed width="100%" scaleMode="stretch" autoPlay="true" flashvars="<?php echo $url1; ?>" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="http://fpdownload.adobe.com/strobe/FlashMediaPlayback_101.swf">  
</br>
		<?php
		break;
	case 'ff' :
		?>
		<object width="810" height="450" id="undefined" name="undefined" data="http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf" type="application/x-shockwave-flash"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="flashvars" value='config={"clip":{"url":"<?php echo $url1; ?>"}}' /></object>
		
		</br>
		<?php
		break;
	case 'l' :
		?>
		<iframe src=<?php echo $url1; ?> width="810" height="450" frameborder="0" scrolling="no"> </iframe></br>
		<?php
		break;
	case 'j' :
		?>
		<object type="application/x-shockwave-flash" data="http://www.justin.tv/swflibs/JustinPlayer.swf?channel=<?php echo $url1; ?>" id="live_embed_player_flash" height="450" width="810" bgcolor="#000000"><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.justin.tv/swflibs/JustinPlayer.swf" /><param name="flashvars" value="hostname=www.justin.tv&channel=<?php echo $url1; ?>&auto_play=false&start_volume=25" /></object>
		
<?php
		break;
		case 'u' :
		?>
		<iframe width="100%"  src="<?php echo $url1; ?>" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>

		<?php
		break;
		case 've' : ?>
		<iframe scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%;" src="<?php echo $url; ?>"></iframe>
		<?php
		break;
		

}