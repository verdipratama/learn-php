<?php
function number_of_working_days($from, $to)
{
    $workingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
    $holidayDays = ['*-12-25', '*-01-01', '2015-11-23']; # variable and fixed holidays

    $from = new DateTime($from);
    $to   = new DateTime($to);
    $to->modify('+1 day');
    $interval = new DateInterval('P1D');
    $periods  = new DatePeriod($from, $interval, $to);

    $days = 0;
    foreach ($periods as $period) {
        if (!in_array($period->format('N'), $workingDays)) {
            continue;
        }

        if (in_array($period->format('Y-m-d'), $holidayDays)) {
            continue;
        }

        if (in_array($period->format('*-m-d'), $holidayDays)) {
            continue;
        }

        $days++;
    }
    return $days;
}

echo number_of_working_days(date("Y-m-28"), date("Y-m-29"));

// SOURCE
// https: //isnugro.wordpress.com/2016/11/29/menghitung-jumlah-hari-tanpa-weekend-dan-hari-libur-dengan-php/
// https: //isnugro.wordpress.com/2016/11/29/menghitung-jumlah-hari-tanpa-weekend-dan-hari-libur-mysql/