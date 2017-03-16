<?php
	include 'courses.php';

 	$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 	$connection = new PDO('mysql:hostname=localhost;dbname=zcm_user_manager', 'root', '', $opts);

 	try {
		$sql_courses = "SELECT * from courses";
		$fetch_courses_pdo = $connection->query($sql_courses, PDO::FETCH_CLASS, 'Courses');
	    while ($row = $fetch_courses_pdo->fetchObject('Courses')) {
	        printf('%s | %d' . PHP_EOL,
	            $row->title, $row->category);
	    }
	    echo '<br/>';

	    $connection = null;
	} catch(PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
	}
?>