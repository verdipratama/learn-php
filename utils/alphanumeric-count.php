<?php

foreach (range('A', 'Z') as $letter) {
    foreach (range(1, 999) as $number) {
        echo $letter . str_pad($number, 3, '0', STR_PAD_LEFT) . "\n";
    }
}

function next_value($current)
{
    $letter = $current[0];
    $number = (int) substr($current, 1);

    if ($number == 999) {
        $letter++;
        $number = 1;
    } else {
        $number++;
    }

    return $letter . str_pad($number, 3, '0', STR_PAD_LEFT);
}

echo "<br>";
echo "<br>";
echo "<br>";
var_dump(next_value('A459')); // Returns A460
var_dump(next_value('A999')); // Returns B001