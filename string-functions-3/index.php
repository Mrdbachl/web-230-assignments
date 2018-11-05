<?php

$string_one = 'This is my essay. I\'m going to be talking about php.';
$string_two = 'My essay is about php. I will be talking about everything to do with php.';

similar_text ($string_one, $string_two, $result);
echo 'The similarity between is, '.$result;

$string_three = 'This is an example string.';
$string_length = strlen($string_three);

echo $string_length;


?>