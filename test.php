
    <!-- Load player theme -->
    <link rel="stylesheet" href="media/themes/main/testplayer.style.css" type="text/css" media="screen" />

    <!-- Load jquery -->
    <script type="text/javascript" src="media/jquery-1.9.1.min.js"></script>

    <!-- load projekktor -->
    <script type="text/javascript" src="media/testplayer-1.3.09.min.js"></script>






<video id="player_a" class="projekktor" poster="intro.png"  width="640" height="360" controls>
     <source src="http://85.114.139.20:11333" type="video/ogg"  />
    <source src="http://85.114.139.20:11333" type="video/mp4" />
</video>


<script type="text/javascript">
$(document).ready(function() {
    projekktor('#player_a', {
	volume: 0.8,
		 playerFlashMP4: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf'
		enableFullscreen: true,
		autoplay: true,
		platforms: [ 'vlc', 'flash', 'android',  'ios'],
		videoScaling: '16:9'
    });
});
</script> 





