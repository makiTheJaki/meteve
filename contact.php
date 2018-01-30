<!DOCTYPE html>
<html lang="en">
<head>
<title>meteve | Contact</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<!--[if IE 6]><link type="text/css" rel="stylesheet" href="styles/ie6.css"><![endif]-->
<!--[if IE 7]><link type="text/css" rel="stylesheet" href="styles/ie7.css"><![endif]-->
<!--[if IE 8]><link type="text/css" rel="stylesheet" href="styles/ie8.css"><![endif]-->
</head>
<body>
<div id="wrap">
 
    <?php
	include 'header.php';
	include 'core/init.php';
	
	
	?>
  
  <div id="intro">
    <h3>Contact</h3>
  </div>
  <div id="main">
  <?php
	if (isset($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message'])){
    email ('meteve@outlook.com', $_POST['subject'], $_POST['email'] . $_POST['message']);
	echo "Email sent!";	}
	?>
	<div id="content">
	     <p class="hide" id="response"></p>
      <form id="contact-form" method="post" action="#">
        <input id="form_name" type="text" name="name" value="Name" onFocus="if(this.value=='Name'){this.value=''};" onBlur="if(this.value==''){this.value='Name'};">
        <input id="form_email" type="text" name="email" value="Email" onFocus="if(this.value=='Email'){this.value=''};" onBlur="if(this.value==''){this.value='Email'};">
        <input id="form_subject" type="text" name="subject" value="Subject" onFocus="if(this.value=='Subject'){this.value=''};" onBlur="if(this.value==''){this.value='Subject'};">
        <textarea id="form_message" rows="10" cols="40" name="message"></textarea>
        <input type="submit" name="sub" value="Send">
        <div class="hide">
          <label>Do not fill out this field</label>
          <input name="spam_check" type="text" value="fuck">
        </div>
      </form>
    </div>
    
  </div>
  <div id="footer">
    <?php
	include 'footer.php';
	?>
  </div>
</div>
<div class="cache-images"><img src="images/submit-button-orange-hover.jpg" width="0" height="0" alt=""></div>
</body>
</html>