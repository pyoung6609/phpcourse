<?php
include('db.php');
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
            <li><a href="index.php">Home</a></li>
            <li><a href="add_user.php">ADD USER</a></li>
            <li class="active"><a href="get_users.php">USERS</a></li>
        </ul>
    </div>
</nav>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sql_get_users = "SELECT id, first_name, last_name, email from users";
        $connection = db_connect();
        $result = db_execute($connection, $sql_get_users);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $id = $row['id'];
                $table_row_html = <<<html
                <tr>
                    <td>
                    $first_name
                    </td>
                    <td>
                    $last_name
                    </td>
                    <td>
                    $email
                    </td>
                    <td>
                    <a href="edit_user.php?id=$id">EDIT</a>
                    |
                    <a href="delete_user.php?id=$id">DELETE</a>
                    </td>
                </tr>
html;
                echo $table_row_html;
            }
        }
    ?>
    </tbody>
</table>
<form method="post" action="download.php" enctype="multipart/form-data">
    <input type='submit' class="btn btn-primary" value="DOWNLOAD" />
</form>
</body>
</html>