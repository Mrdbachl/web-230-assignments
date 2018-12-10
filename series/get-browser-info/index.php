<?php

$browser = get_browser(null, true);

print_r($browser);

$browser =($browser['browser'].'<br>');

echo $browser;

if ($browser != 'chrome') {
  echo 'You\'re not using Google Chrome. You are using '.$browser.'.';	
	
}

?>