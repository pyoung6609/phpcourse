<?php
 	$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 	$connection = new PDO('mysql:hostname=localhost;dbname=zcm_user_manager', 'root', '', $opts);
?>