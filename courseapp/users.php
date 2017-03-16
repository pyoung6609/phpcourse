<?php

$conn = new mysqli('localhost', 'root', '', 'course_php');
if ($conn->connect_error) {
    die('Cloud not connect to database ' . $conn->connect_error);
}

$sql = "select * from users"; //in sql code, grab all of the information from the users table.
//What is $result returning? the table in users. What format is that returned in?
$result = $conn->query($sql);
if($result->num_rows > 0) { //if the users table has any rows, continue into the if statement
    while ($row = $result->fetch_assoc()) { //While $row is equal to the table in users, fetch the associated rows with that table. Once there are no more rows, exit the loop.
        echo vsprintf("username : %s, password: %s <br/>", $row); //print the current row
    }
}

$conn->close();

?>