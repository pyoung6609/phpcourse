<?php
	require_once 'libs/SMTemplate.php';
	$home = new SMTemplate();
	$home->render('home');

// 	//SQL TABLE ENTRY CALLS
// 	$create_users_table = <<<SQL
// 		-- updated this line to add IF NOT EXISTS so that when we execute this command, it will only create a new table if it doesnt currently exist
// 		CREATE TABLE IF NOT EXISTS Users(
// 		id INT AUTO_INCREMENT PRIMARY KEY,
// 		first_name varchar(30) NOT NULL,
// 		last_name varchar(30) NOT NULL,
// 		email varchar(50) UNIQUE NOT NULL,
// 		password varchar(16) NOT NULL,
// 		created_date date)
// SQL;

// 	try {
// 		$connection->exec($create_users_table);
// 	} catch(PDOException $e) {
// 		//check if users table exists
// 		// $sql_check_users = "SELECT 1 FROM USERS LIMIT 1";
// 		// $sql_check_users_results = $connection->query($sql_check_users);
// 		// if(count($sql_check_users_results)>0){
// 		// 	return;
// 		// }
// 		echo $e->getMessage();
// 	}
?>