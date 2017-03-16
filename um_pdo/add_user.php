<?php
    $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	$connection = new PDO('mysql:hostname=localhost;dbname=zcm_user_manager','root','', $opts);

	if(isset($_POST) && count($_POST) > 0){
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$email = $_POST['email'];
		$ps = $_POST['password'];

		$insert_user_data = "INSERT INTO USERS(first_name,last_name,email,password) VALUES(:fname, :lname, :email, :ps)";

        try {
            $statement = $connection->prepare($insert_user_data);
            $statement->execute(['fname' => $fname, 'lname' => $lname, 'email' => $email, 'ps' => $ps]);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
	}

?>

<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Zeo User Manager</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="add_user.php">ADD USER</a></li>
            <li><a href="get_users.php">USERS</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <input type="submit" value="ADD" class="btn btn-primary">
    </form>
</div>

<body>
</html>