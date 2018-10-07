<?php
$string = 'This is a string.';
$var2 = 'This includes other words that may be used in the creation of blob programs.';

if (preg_match('/blob/', $string)) {
	
	echo 'Match found.'.'<br>'; 
} else {
	echo 'Match not found.'.'<br>';
	
	
	}

if (preg_match('/blob/', $var2)) {
	
echo 'That\'s a match';
} else {
	echo ' No Match.';
}	
	


?>