<?php

function has_space($string) {
   if (preg_match('/nine/',$string)) {
	  return true; 
   } else {
	 return false; 
   }	
}

$string = 'Thisdoesnthaveaspace.';

if (has_space($string)) {
	echo 'Has at least one space.';
} else {
	echo 'Has no spaces.';
}

?>