<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/2/2017
 * Time: 7:23 PM
 */

$user = [];
$connection = new PDO('mysql:host=localhost;dbname=zcm_user_manager', 'root', ''); //connect to our DB using PDO

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql_get_user_by_id = "SELECT first_name, last_name from users where id=:userid"; //query for retrieving the info we need from db, :userid is a placeholder so that when we execute our prepared statement, we only pull in that data when it is a value thus causing us to not have SQL injections and attacks
    $statement = $connection->prepare($sql_get_user_by_id); //prepare our SQL statement on the connection
    $userid = $_REQUEST['id']; //store a variable for the information we want to retrieve from the db
    $statement->execute(['userid' => $userid]); //execute our prepared statement using our placeholder text in the sql query and set it to the value we have in our stored variable
    $user = $statement->fetch(PDO::FETCH_ASSOC); //create a variable that has all of the stored info we got from the db to use in our application.
} else {
    $sql_update_user_by_id = "UPDATE users SET first_name=:fname, last_name=:lname where id=:userid";
    $statement = $connection->prepare($sql_update_user_by_id);
    $fname = $_REQUEST['first_name'];
    $lname = $_REQUEST['last_name'];
    $userid = $_REQUEST['id'];
    $statement->execute(['fname' => $fname, 'lname' => $lname, 'userid' => $userid]);
    $user_data = $statement->fetch(PDO::FETCH_ASSOC);
    header('Location: get_users.php');
}

?>


<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Zeo User Manager</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="active"><a href="add_user.php">ADD USER</a></li>
            <li class="active"><a href="get_users.php">USERS</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control"
                   id="first_name" name="first_name" value="<?php echo isset($user['first_name']) ? $user['first_name'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control"
                   id="last_name" name="last_name" value="<?php echo isset($user['last_name']) ? $user['last_name'] : ''; ?>">
        </div>
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </form>
</div>

<body>
</html>