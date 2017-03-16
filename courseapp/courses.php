<?php
	session_start();

	if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!=1){
		header('Location:login.php');
	}
?>
<html>
	<head></head>
	<body>
		<h1>Courses</h1>
		<table>
			<thead>
				<tr>
					<td>Name</td>
					<td>Time</td>
					<td>Duration</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>PHP 101</td>
					<td>10AM - 12PM</td>
					<td>20 Days</td>
				</tr>
				<tr>
					<td>Javascript 101</td>
					<td>12PM - 2PM</td>
					<td>30 Days</td>
				</tr>
				<tr>
					<td>Drupal 101</td>
					<td>2PM - 4PM</td>
					<td>15 Days</td>
				</tr>
			</tbody>
		</table>
		<br/>
		<a href="">Add Class</a>
		<br/>
		<a href="logout.php">Logout</a>
	</body>
</html>