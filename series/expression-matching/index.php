<?php
$string = 'This is a string.';
$var2 = 'This includes other words that may be used in the creation of blob programs.';

if (preg_match('/blob/', $string, '/is/', $var2)) {
	
	echo 'Match found.'; 
} else {
	echo 'Match not found.';
	
	}	
	


?>