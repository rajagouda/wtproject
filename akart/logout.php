<?php
	
	session_start();
	session_destroy();
	setcookie("email",'',time()-3600);
	setcookie("fname",'',time()-3600);
	setcookie("lname",'',time()-3600);
	setcookie("phone",'',time()-3600);
	setcookie("address",'',time()-3600);
	header("location: index.html");

?>
