<?php

if (isset($_GET['user_name'])&&!empty($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	$user_name_lc =strtolower($user_name);
	
	if ($user_name_lc =='alex') {
		echo 'Welcome Alex.'.'<br>';
	} else {
		echo 'Validation failed';
	}
	
	if ($user_name =='Chris') {
		echo '<br><br>'.'<strong>'.'Identity not validated'.'</strong>';
	}

}
?>

<form action = "index.php" method="GET"><br>
	Name:<br><input type="text" name="user_name"><br><br>
	<input type="submit" value="Verify">