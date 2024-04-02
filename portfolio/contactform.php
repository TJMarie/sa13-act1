<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "miraanart@yahoo.com";
	$header = "From: ".$mailFrom;
	$txt = "Message Received From ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $header);
	header("Location: MiraanContact.html?mailsend");
}