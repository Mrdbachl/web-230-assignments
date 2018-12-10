<?php

require 'config.inc.php';

//01. The foreach loop is scrubbing the ip addresses that are accessing the website and if an ip address that is listed in the blocked ip addresses array comes up, then the loop uses the die function to kill the output. It will show a blank screen if you just use the die function. 
foreach($ip_blocked as $ip) {
   if ($ip==$ip_address) {
	   die('Your IP address, '.$ip_address.' has been blocked.');
   }	
}

?>

<h1>Welcome!</h1>