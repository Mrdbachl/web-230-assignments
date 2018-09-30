<?php

$string = 'This is an example string . baloney';
$string_word_count = str_word_count($string, 2,'.');

print_r ($string_word_count);

$string2 = 'Trying to see how many words and combinations can be used in one setting.';
$string_word_count = str_word_count($string2, 1, 'baloney');

print_r ($string_word_count);

?>