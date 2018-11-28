<?php

//01. The If function is making sure that the variable is set IE, that there is information within the set and it is not a null set. It is also using the post function because the information will be sent to and displayed in the browser. A random number is being generated with the $rand variable and the echo will show the random number.
if(isset($_POST['roll'])){

//02. A random number is being generated with the $rand variable and the echo will show the random number.
$rand = rand(1, 6);
echo 'You rolled a '.$rand;
	
//03. A company could use it to give out random surveys. If every customer is assigned a number, then using the random number generator, a company that wanted to survey 100 random people could send out surveys to the 100 random numbers that were picked by the program.
	
}

?>

<form action="index.php" method="POST">
	<input type="submit" name="roll" value="Roll dice.">
</form>