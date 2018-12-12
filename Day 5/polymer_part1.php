<?php

$possibles = ['aA', 'Aa', 'bB', 'Bb', 'cC', 'Cc', 'dD', 'Dd', 'eE', 'Ee', 'fF', 'Ff', 'gG', 'Gg', 'hH', 'Hh',
            'iI', 'Ii', 'jJ', 'Jj', 'kK', 'Kk', 'lL', 'Ll', 'mM', 'Mm', 'nN', 'Nn', 'oO', 'Oo', 'pP', 'Pp',
            'qQ', 'Qq', 'rR', 'Rr', 'sS', 'Ss', 'tT', 'Tt', 'uU', 'Uu', 'vV', 'Vv', 'wW', 'Ww', 'xX', 'Xx', 
            'yY', 'Yy', 'zZ', 'Zz'];


$filename = "C:\wamp64\www\AdventCode\Day 5\input.txt";

$string = file_get_contents($filename);
$trimmed;

$str_len = strlen($string);

// first part
$a = "0";
while ($a <= $str_len) {
    $trimmed = str_replace($possibles, '', $string);
    $temp_string = $trimmed;
    if (strlen($temp_string) === strlen($string)) {
        break;
    }else{
        $string = $trimmed;
        $a++;
    }
}

echo $trimmed . "</br>";
echo "lenght of string is: " . strlen($trimmed) . "</br>";

?>