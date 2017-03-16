<?php
	function db_connect($server='localhost', $user='root', $pass='', $db='zcm_user_manager')
	{
	    $connection = new mysqli($server, $user, $pass, $db);
	    return $connection;
	}

	function db_execute($connection, $query)
	{
	    $result = $connection->query($query);
	    return $result;
	}
?>