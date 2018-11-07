<?php

//The reason we use the offset is for the substring function. 

$offset = 0;
$replace = '';
$find = array('monkey', 'cat', 'mat');
$censor = array('m**key', 'c*t', 'm*t');

// 02. What we are doing in the if statment is checking to make sure that there has been text entered into the fields by the user. If information has been entered, then the if statement will continue to read down through the instructions to do what it is being told. The first part checks to see if there is information and then it checks the string length of what we are searching the string to replace. Then we hit the next if statement to run a loop on the string to actually replace the found characters with what will be replacing the characters.

if (isset ($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) {
	
// 03. We create the variables inside the if statement because it reads top down and if the variables aren't inside the statement, the if statement will not pick up on them outside and an error will be thrown.
	
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	
// 04. We have search length because we need to count how long the string of what we are searching for is.
	
	$search_length = strlen($search);
	
	if (!empty($text)&&!empty($search)&&!empty($replace)) {
		
		while ($strpos = strpos($text, $search, $offset)) {
			
// 05. We have to change the offset because after the first replace, the system needs to know where to start to count to make subsequent changes.
		    $offset = $strpos + $search_length;
			
// 06. We are having the text variable through a substring replace take a look at the text that is input by the user, then it looks at what was input into the form field to replace the text with, string position is where the replacement would start. The search length is the length of the entire string that the while loop is searching. string position changes once the first replacement has been made and once all replacements have been made, verified by the search length, then the loop stops running.
			$text = substr_replace($text, $replace, $strpos, $search_length);
			
		}
		
		echo $text;
		
	} else {
		
// 07. The else echo is included so that if all fields are not filled in, it will post this error message.
		echo 'Please fill in all fields';
	}
	
	//if (isset($_POST['replacewith'])&&!empty($_POST['replacewith'])) {
  //$replace = $_POST['replacewith'];
  //$user_input_new = str_ireplace($find, $censor, $replace);
  
  //echo $user_input_new;
//}
}
?>

<!--08. The form action is declaring where to pull information from. The post method is for sending out information, as oppose to GET, which receives information -->
<form action="index.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for:<br>
	<input type="text" name="searchfor"><br><br>
	Replace with:<br>
	<input type="text" name="replacewith"><br><br>
<!-- input type "submit" defines the submit button. The value is what shows on the webpage. -->
	<input type="submit" value="Find and Replace">
</form>