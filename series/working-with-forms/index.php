<?php

?>
<!--01. The form action is where the form submits after the submit button is clicked. -->
<!--02. The method is the way that the variables are being submitted. GET method sends data through the format of the URL. POST method sends data through HTTP post method. -->
<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type ="text" name="year"><br><br>
	<input type="submit" value="Submit">

</form>