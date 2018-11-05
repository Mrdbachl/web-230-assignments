<?php

$inumber1 = 22;
$inumber2 = 8;


function add ($number1, $number2) {
	echo $number1 + $number2;
}

add ($inumber1, $inumber2); 

$letter1= 7;
$letter2= 9;

function multiply ($number3, $number4) {
	echo $number3 * $number4;
}

multiply ($letter1, $letter2);

function displayDate($day, $date, $year) {
	echo $day.' '.$date.' '.$year;
}

displayDate('Monday', 31, 2011);
?>