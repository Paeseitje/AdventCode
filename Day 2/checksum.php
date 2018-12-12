<?php

$filename = "C:\wamp64\www\AdventCode\Day 2\input_bis_test.txt";

$lines = file($filename);

if (!$lines){
    echo "File did not open.\n";
}

$checksum;
$doubles = "0";
$triples = "0";
$filtered = [];

$characters = [];
foreach ($lines as $string) {
    $characters = count_chars($string, 1);
    // var_dump($characters);
    if(in_array("2", $characters)){
        $doubles = $doubles + 1;
        array_push($filtered, $string);
    }
    if(in_array("3", $characters)){
        $triples = $triples + 1;
        array_push($filtered, $string);
    }
}

var_dump($filtered);
$file = fopen('filtered.txt', 'w');
foreach ($filtered as $value) {
    fwrite($file, $value);
}
fclose($file);

echo "Number of doubles: " . $doubles . "</br>";
echo "Number of triples: " . $triples . "</br>";

$checksum = $doubles * $triples;
echo "The Checksum is " . $checksum . "</br>";
?>