<?php

$filename = "C:\wamp64\www\AdventCode\Day 1\input.txt";
// $lines = split("\n", file_get_contents($filename));

$lines = file($filename, FILE_IGNORE_NEW_LINES);
$integerIDs = array_map('intval', $lines);
// var_dump($lines);
// var_dump($integerIDs);

if (!$integerIDs){
    echo "File did not open.\n";
}
// echo array_sum($integerIDs);
$frequentie = "0";
$new_freq = ["0"];
foreach (range(1, 200) as $i) {
    foreach ($integerIDs as $value) {
        $frequentie += $value;
        if (!in_array($frequentie, $new_freq)){
            // $new_freq[] = $frequentie;
            array_push($new_freq, $frequentie);
        }else{
            array_push($new_freq, $frequentie);
            echo "The first double frequentie is: " . $frequentie . "<br/>";
        }
    }
    // break;
}
// var_dump($new_freq);



?>