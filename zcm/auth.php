<?php
	session_start();

	if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != ''){
		$username = $_POST['username'];
		$password = $_POST['password'];
	} else {
		$_SESSION['error'] = '<div style="color:red;">Error: You have empty form fields</div><br><br>';
		header('Location:login.php');
	}
?>