<html>
<head>
	<title>{block name=title}Home{/block}</title>
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
			<li><a href="index.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<!-- <li><a href="add_user.php">Add User</a></li>
			<li><a href="get_users.php">Users</a></li> -->
		</ul>
	</div>
</nav>
<div class="container-fluid">
	{block name=body}{/block}
</div>
</body>
</html>