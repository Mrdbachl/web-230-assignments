<?php

//01. This variable is the correct password that is scrubbed against what a user inputs into the form. This is what will allow them to gain access or need to enter another password if it does not match.

$match = 'pass123';

if(isset($_POST['password'])) {
	$password = $_POST['password'];
	
//02. This if statement is checking to see if the password field has any information within it, and if it does then the block will be executed and the password will be checked against the correct password as stated by the $match variable. If it is correct, then That is correct will be echoed and if not, then That is incorrect will be echoed. If the field is empty, then Please enter a password will be echoed.
	if (!empty($password)) {
		if($password==$match) {
			echo 'That is correct!';
		} else {
			echo 'That is incorrect.';
		}
	} else {
		echo 'Please enter a password.';
	}
}

?>

<form action="index.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Submit">

</form>