<?php
$redirect_page = 'http://google.com';
$redirect = true;

if ($redirect==true) {
	
//01. The header function is redirecting users to another page that has been defined in the $redirect_page variable. Location is the standard starting point when creating the argument. The variable $redirect needs to be true though in order to move forward with the redirect.
	
	header ('Location: '.$redirect_page);
}
?>