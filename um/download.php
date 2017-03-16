<?php
	include('db.php');

	$dest = 'users.csv';

	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: application/vnd.ms-excel; charset="utf-8"');
	header('Content-Disposition: attachment; filename="users.csv"');

	// create a file pointer connected to the output stream
	$output = fopen($dest, 'w');

	//connect to sql, get specific info from users table
	$connection = db_connect();
	$sql_get_user_data_from_users = 'SELECT first_name, last_name, email from users';
	$result = db_execute($connection, $sql_get_user_data_from_users);

	//if the amount of rows from the result are greater than 0
	if ($result->num_rows > 0) {
		//while there are rows, get me the info from a row and move on to the next row
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            //write out each line of the table and put the content in the opened destination
            fputcsv($output, array($first_name, $last_name, $email));
        }
    }

    //close the connection
    fclose($output);

    //get all the contents of the file $dest
    $array_output = file_get_contents($dest);
    //you have to push the content in a request to the client side in order to print the content in the actual file
    echo $array_output;

    //deletes the system stored version of the file so that it doesn't get put on the server.
    unlink($dest);
?>