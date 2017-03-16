<?php
	require('db.php');

	$connection = db_connect();

	$create_users_table = <<<SQL
		CREATE TABLE USERS (
			id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			email VARCHAR(50) NOT NULL UNIQUE,
			password VARCHAR(50) NOT NULL
		)
SQL;

	$sql_table_check = 'SELECT 1 FROM USERS LIMIT 1';
	if(!db_execute($connection, $sql_table_check)) {
		if(!db_execute($connection, $create_users_table)) {
			echo 'Error creating users table';
		}	
	}
?>

<html>
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Zeo User Manager</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="add_user.php">ADD USER</a></li>
			<li><a href="get_users.php">USERS</a></li>
		</ul>
	</div>
</nav>
</body>
</html>
