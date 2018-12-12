<?php

$possibles = ['aA', 'Aa', 'bB', 'Bb', 'cC', 'Cc', 'dD', 'Dd', 'eE', 'Ee', 'fF', 'Ff', 'gG', 'Gg', 'hH', 'Hh',
            'iI', 'Ii', 'jJ', 'Jj', 'kK', 'Kk', 'lL', 'Ll', 'mM', 'Mm', 'nN', 'Nn', 'oO', 'Oo', 'pP', 'Pp',
            'qQ', 'Qq', 'rR', 'Rr', 'sS', 'Ss', 'tT', 'Tt', 'uU', 'Uu', 'vV', 'Vv', 'wW', 'Ww', 'xX', 'Xx', 
            'yY', 'Yy', 'zZ', 'Zz'];


$filename = "C:\wamp64\www\AdventCode\Day 5\input.txt";

$string = file_get_contents($filename);
$trimmed;

$str_len = strlen($string);


// second part
$letters = range('a', 'z');

$new_length = PHP_INT_MAX;
$improved_length = PHP_INT_MAX;
$temp_length = PHP_INT_MAX;

$a = "0";

foreach ($letters as $index => $letter) {
    $new_string = str_ireplace($letter, '', $string);
    $new_length = strlen($new_string);
   
    while ($a <= $new_length) {
        $trimmed = str_replace($possibles, '', $new_string);
        $temp_string = $trimmed;
        if (strlen($temp_string) === strlen($new_string)) {
            break;
        }else{
            $new_string = $trimmed;
            $a++;
        }
    }
    $temp_length = strlen($trimmed);
    $temp_string_2 = ($trimmed);
    if ($temp_length > $improved_length) {
        continue;
    }else {
        $improved_length = $temp_length;
    }
}

echo "The length is: " . $improved_length . "</br>";

?>