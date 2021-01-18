<?php

function get_week_dates($month)
{
    $start = new DateTime($month . '-01');
    $end   = new DateTime();
    $end->setDate($start->format('Y'), $start->format('m'), $start->format('t'));

    $interval = DateInterval::createFromDateString('1 day');
    $period   = new DatePeriod($start, $interval, $end);

    $weeks    = array();
    $week_key = 0;
    $first    = true;
    foreach ($period as $dt) {
        if ($first) {
            $weeks[$week_key]['start'] = $dt->format('Y-m-d');
            $first                     = false;
        }

        if ($dt->format('D') == 'Sun' || $dt->format('d') == $end->format('d')) {
            $weeks[$week_key]['end'] = $dt->format('Y-m-d');
            $week_key++;
            $first = true;
        }
    }
    return $weeks;
}

$weeks = get_week_dates('2021-01');

var_dump($weeks);