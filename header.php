
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hr_HR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search/search1.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#result').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>


<div id="header">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<h1><a href="index.php">METEVE</a></h1>
	
	<div id="search">
	<form autocomplete="off" id="search" method="GET" action="play.php?"><div class="content">
		<input name = "ch" type="text" class="search" id="searchid" placeholder="Search" />
		<div id="result">
		</div>
		</div>
		<input type ="image" src="images/go.png" style="height:35px;width:35px; margin-left:-5px; margin-top:0px;float:left; margin-right:100px;">
	</form>
	</div>
	
    <a href="add.php" class="button orange"><b>+add STREAM</b></a>
   
	<ul id="menu">
		<li><a href="browse.php">Browse channels</a>
		<ul class="sub-menu">
            <li>
                <a href="index.php">BiH</a>
            </li></br>
            <li>
                <a href="index.php">Croatia</a>
            </li></br>
			<li>
                <a href="index.php">Serbia</a>
            </li></br>

		</ul> 
		
		</li></ul> 
		<ul id="nav">
		<?php
			if (isset($_SESSION['username']) ) {
			$username=$_SESSION['username'];
			echo "<li><span>|</span><a href='user.php?user=".$username."'>".$username."</a></li>";}
			else {echo '<li><span>|</span><a href="register.php">Log in / Sign up </a> </li>';} ?> 	
		 &nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp;<div class="fb-like" data-href="http://meteve.ml" data-layout="button" data-action="like"></div>
    </ul>
	
</div>
	
