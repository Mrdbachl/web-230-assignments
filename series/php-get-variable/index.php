<?php

/*
1. Does it exist? or "Has it been submitted?"
2. Is it empty? or "Does value == NULL"
3. Display back to user
*/

//01. The beginning parts of the If statement are checking to see if the variables are set and they are looking to see if a form has been submitted and if the information is in the URL data. In the block, the variables are being set to the URL names. The next If statement is saying if the day, date, and year of the form submitted are not empty, echo out the date that the user has entered into the form fields, but if there is incomplete or no information submitted, echo out 'Fill in all fields.'

if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
  $day = $_GET['day'];
  $date = $_GET['date'];
  $year = $_GET['year'];
  if (!empty($day)&&!empty($date)&&!empty($year)) {
	echo 'It is '.$day.' '.$date.' '.$year;  
	 
  } else {
	  echo 'Fill in all fields.';
  }
  	
	
}

?>

<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type ="text" name="year"><br><br>
	<input type="submit" value="Submit">

</form>