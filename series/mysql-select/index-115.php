<?php

require 'connect.inc.php';

$query = "SELECT 'food', 'calories', FROM 'food', ORDER BY 'id'";

if ($query_run = mysqli_query($query)) {
	
  echo 'Query success.';	
	
} else {
	
  echo 'Query failed.';
}

?>