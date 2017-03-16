<?php
	require_once 'libs/SMTemplate.php';
	$login = new SMTemplate();
	$login->render('login');

	session_start();

	//Check if the session error is not empty and if it isn't show the error and then unset it so that it is a new error upon submission
	if(isset($_SESSION['error']) && $_SESSION['error'] != "") {	
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}

	//if you're already logged in, move straight to the index page
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
		//header('Location:courses.php');
	}
?>