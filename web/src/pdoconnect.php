<?php
	$db = new PDO('mysql:host=localhost;dbname=oldbancho;charset=utf8', 'Zordon', 'Zordon123!');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>