<?php
	require_once 'Courses.class.php';
	require_once 'db.php';
	require_once 'libs/SMTemplate.php';
	
	$courses = new SMTemplate();
	$smarty = $courses->get_smarty();

	try {
		$courses = array(); //created for the template
		$sql_courses = "SELECT * from courses";
		$fetch_courses_pdo = $connection->query($sql_courses, PDO::FETCH_CLASS, 'Courses');
	    while ($row = $fetch_courses_pdo->fetchObject('Courses')) {
	        // printf('%s | %d' . PHP_EOL,
	        //     $row->getTitle(), $row->getCategoryId());
	        array_push($courses, $row);
	        $smarty->assign('course', $courses);
	        // var_dump($row);
	    }
	    echo '<br/>';
	} catch(PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
	} finally {
		$connection=null;
	}

	$smarty->display('courses.tpl');
?>