<?php
switch($player){
	case 'v' :
		?>
		<embed src="<?php echo $url; ?>" style="" type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" showstatusbar="1" showcontrols="1" stretchtofit="2" showpositioncontrols="false" showtracker="false" autostart="true" autosize="false" enablecontextmenu="0" height="360" width="600">
		</br>
	<?php
		break;
		case 'fj' :
		?>
	<script type="text/javascript" src="http://www.longtailvideo.com/jw/embed/swfobject.js"></script>
	<script src="http://jwpsrv.com/library/5V3tOP97EeK2SxIxOUCPzg.js"></script>
	<div id="container"></div>
<script>
	jwplayer("container").setup({
    file: "<?php echo $url; ?>",
	stretching:"exactfit",
	primary: "flash",
	autostart : true,
	item : 1,
	width: "600",
	height: "360",

	});
</script>

		</br>
		<?php
		break;
	case 'fa' :
		?>
		<embed width="600" height="360"  flashvars="<?php echo $url; ?>&scaleMode=stretch&autoPlay=true" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="http://fpdownload.adobe.com/strobe/FlashMediaPlayback_101.swf">  
</br>
		<?php
		break;
	case 'ff' :
		?>
		<object width="600" height="360" id="undefined" name="undefined" data="http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf" type="application/x-shockwave-flash"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="flashvars" value='config={"clip":{"url":"<?php echo $url; ?>"}}' /></object>
		
		</br>
		<?php
		break;
	case 'l' :
		?>
		<iframe src=<?php echo $url; ?> width="630" height="360" frameborder="0" scrolling="no"> </iframe></br>
		<?php
		break;
	case 'j' :
		?>
		<object type="application/x-shockwave-flash" data="http://www.justin.tv/swflibs/JustinPlayer.swf?channel=<?php echo $url; ?>" id="live_embed_player_flash" height="360" width="600" bgcolor="#000000"><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.justin.tv/swflibs/JustinPlayer.swf" /><param name="flashvars" value="hostname=www.justin.tv&channel=<?php echo $url; ?>&auto_play=false&start_volume=25" /></object>
		<?php
		break;
		case 'u' :
		?>
		<iframe width="630" height="360" src="<?php echo $url; ?>" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>

		<?php
		break;
		case 've' : ?>
		<iframe scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:630px; height:360px;" src="<?php echo $url; ?>"></iframe>
		<?php
		break;
		}
		?>

