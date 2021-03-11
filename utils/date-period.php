<?php

$begin = new DateTime('2021-02-01');
$end   = new DateTime('2021-02-13');

$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

foreach ($daterange as $date) {
    echo $date->format("Y-m-d") . "<br>";
}

// 2021-02-01
// 2021-02-02
// 2021-02-03
// 2021-02-04
// 2021-02-05
// 2021-02-06
// 2021-02-07
// 2021-02-08
// 2021-02-09
// 2021-02-10
// 2021-02-11
// 2021-02-12