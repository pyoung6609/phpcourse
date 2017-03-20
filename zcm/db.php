<?php
	include 'Courses.class.php';

 	$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 	$connection = new PDO('mysql:hostname=localhost;dbname=zcm_user_manager', 'root', '', $opts);

 	try {
		$sql_courses = "SELECT * from courses";
		$fetch_courses_pdo = $connection->query($sql_courses, PDO::FETCH_CLASS, 'Courses');
	    while ($row = $fetch_courses_pdo->fetchObject('Courses')) {
	        printf('%s | %d' . PHP_EOL,
	            $row->getTitle(), $row->getCategoryId());
	        // var_dump($row);
	    }
	    echo '<br/>';
	} catch(PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
	} finally {
		$connection=null;
	}
?>