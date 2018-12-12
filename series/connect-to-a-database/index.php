<?php

$conn_error = 'Could not connect.';

$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_pass = '';
$mysql_db = 'a_database';

if (!mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass, $mysql_db)) {
	die($conn_error);
	
} else {
	echo 'Connected!';
}

?>