<?php
if($_POST["message"]) {
mail("miraanart@yahoo.com", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Miraan Contact</title>
		<link type="text/css" href="Miraan.css" rel="stylesheet">
		<link type="text/css" href="MiraanContact.css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name="Miraan Contact" content="Collective gallery to display my art and reach Miraan fanbase. Links to my music, paintings, journal, social media, and anything else I need.">.
		<meta name="author" content="Tara Jones">
		<style type="text/css">
		</style>
	</head>
	<body>
	<div id="heading">
		<h1>M	i	r	a	a	n</h1>
		<h2>Music, Paintings, and Incoherent <br />Ramblings About the Human Experience</h2> 
	</div>
	
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<!--links to other places-->
	<div class="topnav" id="myTopnav">	
		<a href="MiraanHome.html"target="_parent">Home</a>
		<a href="MiraanMusic.html" target="_parent">Music</a>
		<a href="MiraanGallery.html" target="_parent">Gallery</a>
		<a href="MiraanJournal.html" target="_parent">Journal</a>
		<a href="MiraanContact.php" target="_top" class="active">Contact</a>
		<a href="javascript:void(0);" class="icon" onclick="topNav()">
    		<i class="fa fa-bars"></i>
  		</a>
  		</div>
  
  
		<!--social media links-->
	<div class="miraan">	
		<h5>Social Media</h5>
		<div id="linksS">
		<a href="http://instagram.com/tara.a.jones/" target="_blank">
		<img src="icons/Instagram.png" alt="Miraan on Instagram" style="width: 50px; height: 50px"/></a>
		<h6 style="display:inline-block">Follow for updates, progression photos, and activism.</h6><br />
		
		<a href="http://twitter.com/MiraanTried/" target="_blank">
		<img src="icons/Twitter.png" alt="Miraan on Twitter" style="width:50px; height:50px"/></a>
		<h6 style="display:inline-block">Send a message or tweet me.</h6> <br />
		<h6></h6>
		
		<div class="container">
			<form id="contact" action="MiraanContact.php" method="post">
			<h3>Contact Miraan</h3>
			<fieldset>
				<input placeholder="Your Name" type="text" tabindex="1"
				 required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Your Email Address" type="email" tabindex="2"
				required>
			</fieldset>
			<fieldset>
				<textarea placeholder="Your Message" tabindex="5" required></textarea>
			</fieldset>
			<fieldset>
				<button name="send" type="submit" id="contact-submit">Submit</button>
			</fieldset>
			</form>
			</div><!--end of div class container-->
		</div>
		
		<!--copyright bullshit-->

		</div>
		  <script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function topNav() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
  </script>
		
		<p class="copyright">©2020 by Miraan</p>
	</body>
</html>