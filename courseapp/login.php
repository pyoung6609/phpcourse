<?php
	session_start();
?>
<html>
	<head></head>
	<body>
		<form method="post" action="auth.php" enctype="multipart/form-data">
			<label>Username</label>
		    <input type="text" name="username"/>
		    <label>Password</label>
		    <input type="password" name="password" />
		    <input type="submit" value="Submit" />
		</form>
		<?php
			if(isset($_SESSION['error']) && $_SESSION['error'] != "") {	
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}

			if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
				header('Location:courses.php');
			}
		?>
	</body>
</html>