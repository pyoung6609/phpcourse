<?php
	session_start();

	var_dump($_POST);
	if(isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != ""){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == "Patrick" && $password == "123456") {
			$_SESSION['loggedIn'] = 1;
			header('Location:courses.php');
		} else {
			//You have errors, return to login
			$_SESSION['error'] = '<div style="color:red;">Error: Your password or username is incorrect</div><br><br>';
			header('Location:login.php');
		}
	} elseif (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
		header('Location:courses.php');
	} else {
		$_SESSION['error'] = '<div style="color:red;">Error: You have empty form fields</div><br><br>';
		header('Location:login.php');
	}
?>