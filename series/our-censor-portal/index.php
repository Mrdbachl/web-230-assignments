<?php

include_once ('include/header.inc.php');

$offset = 0;	

if(isset($_POST['text'])) {
	
	$text = $_POST['text'];
	
	$search = 'Acme';
	
	$replace = 'Insights';
	
	$search_length = strlen($search);
	
		if(!empty($text)){
			
			while ($strpos = strpos($text, $search, $offset)) {
				
				$offset = $strpos + $search_length;
				
				$text = substr_replace($text, $replace, $strpos, $search_length);
			}
			
		} else {
			
			echo 'Please fill in the text fields.';
			
		} else {
			
			$text = 'Please enter your communication here.';
		}
}
	
?>