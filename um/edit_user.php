<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/2/2017
 * Time: 7:23 PM
 */

require('db.php');
$user = [];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql_get_user_by_id = vsprintf("SELECT first_name, last_name from users where id=%d", $_GET);
    $connection = db_connect();
    $result = db_execute($connection, $sql_get_user_by_id);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    }
} else {
    $input = [
        'first_name' => $_REQUEST['first_name'],
        'last_name' => $_REQUEST['last_name'],
        'id' => $_REQUEST['id']
    ];
    $sql_update_user_by_id = vsprintf("UPDATE users SET first_name='%s', last_name='%s' where id=%d", $input);
    $connection = db_connect();
    $result = db_execute($connection, $sql_update_user_by_id);
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