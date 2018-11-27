<?php
//01. The time function keeps track of the current time, current day or any time or day that is requested in the code.
$time = time ();

//02. The line of code is displaying the current date and time.The H represents hours, the i represents minutes and the small s represents seconds. Capital D represents day of the week, capital M represents the month and capital Y represents the year. The @ symbol separates the date and time. The way that it works is by creating a variable to echo out to the browser that has been declared as the date and time.
$actual_time = date('D M Y @ H:i:s', $time);

//03. The lowercase d will show the numerical day and not the day of the week. We took out the minutes and if we add a string to time function, we can add or subtract time from the actual time. This can also be accomplished by using a + or - after the time variable and then including the amount of seconds to manipulate with. It works because we are echoing the time_modified variable, which has been declared with the date and time inside.
$time_modified = date(' d M Y @ H:s', $time);


//04. A way that the actual time may be used in a web application is for non-repudiation purposes because it will show the exact time that a certain transaction or process was done. Much like a VAN creates an audit log and the AS3 sends out receipts for completed transactions.
echo 'The current date/time is: '.$actual_time.'<br>';

//05. The way that a time modified might be used in an application is if there is a time zone difference and the web designer wants the correct time to show in whatever region is accessing the web application.
	
echo 'The modified date/time is: '.$time_modified;

?>