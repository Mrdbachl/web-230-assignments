<?php

$find = array ('is', 'string', 'example', 'an', 'block');

$replace = array ('IS','STRING', '', 'AN', 'text');

$string = 'This is a string, and is an example block.';

$new_string = str_replace($find, $replace, $string);

echo $new_string;


?>