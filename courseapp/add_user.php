<?php
	if (isset($_POST) && count($_POST) > 0 ) {
    $conn = new mysqli('localhost', 'root', '', 'course_php');
    if ($conn->connect_error) {
        die('Cloud not connect to database ' . $conn->connect_error);
    }
    echo 'Connected successfully';

    $sql = vsprintf("INSERT INTO users values('%s','%s')", array($_POST['username'], $_POST['password']));
    echo $sql;
    if ($conn->query($sql)) { 
        header('Location: users.php');
    }

    $conn->close();
}

?>


<html>
<head></head>
<body>
<form method="post" enctype="multipart/form-data">
    <label>Username</label>
    <input type="text" name="username"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <input type="submit" value="Submit"/>
</form>

<body>
</html>