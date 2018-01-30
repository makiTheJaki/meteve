<?php
switch($player1){
	case 'v' :
		?>
		<embed type="application/x-vlc-plugin" 
	pluginspage="http://www.videolan.org" 
	version="VideoLAN.VLCPlugin.2"
     width="810"
     height="450"
     id="vlc" 
	 target="<?php echo $url1; ?>"
	 scalemode="stretch" 
	 autoloop="true"
	 text="starting"
	 >
 </embed>
		<?php
		break;
		case 'fj' :
		?>
	<script type="text/javascript" src="http://www.longtailvideo.com/jw/embed/swfobject.js"></script>
	<script src="http://jwpsrv.com/library/5V3tOP97EeK2SxIxOUCPzg.js"></script>
	<div id="container"></div>
<script>
	jwplayer("container").setup({
    file: "<?php echo $url1; ?>",
	stretching:"exactfit",
	primary: "flash",
	autostart : true,
	item : 1,
	width: "810",
	height: "450",

	});
</script>

		</br>
		<?php
		break;
	case 'fa' :
		?>
		<embed width="810" height="450" scaleMode="stretch" autoPlay="true" flashvars="<?php echo $url1; ?>" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="http://fpdownload.adobe.com/strobe/FlashMediaPlayback_101.swf">  
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
		<iframe width="810" height="450" src="<?php echo $url1; ?>" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>

		<?php
		break;
		
		case 'tt' :
		?>
    <!-- Load player theme -->
    <link rel="stylesheet" href="media/themes/main/testplayer.style.css" type="text/css" media="screen" />

    <!-- Load jquery -->
    <script type="text/javascript" src="media/jquery-1.9.1.min.js"></script>

    <!-- load projekktor -->
    <script type="text/javascript" src="media/testplayer-1.3.09.min.js"></script>


    <div id="player_a" class="testplayer"></div>

    <script type="text/javascript">
    $(document).ready(function() {
        projekktor('#player_a', {
        
        playerFlashMP4: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
		autoplay: true,
		platforms: ['browser', 'vlc', 'flash'],
		platformPriority: ['flash'],
		useYTIframeAPI: false,
		
        controls: true,
        width: 810,
        height: 450,
        playlist: [
            {
            0: {src: "<?php echo $url1; ?>", type: "video/mpeg-system"},
           
            }
        ]    
        }, function(player) {} // on ready 
        );
    });
    </script>
<?php
		break;
		case 've' : ?>
		<iframe scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%; height:100%;" src="<?php echo $url1; ?>"></iframe>
		<?php
		break;
}