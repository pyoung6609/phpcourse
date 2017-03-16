<?php
	session_start();
	session_destroy();
	echo "You have been successfully logged out.";
	echo "Click here to <a href='login.php'>login</a>";
?>