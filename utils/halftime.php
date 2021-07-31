<?php
function halfHourTimes()
{
    $formatter = function ($time) {
        if ($time % 3600 == 0) {
            return date('ga', $time);
        } else {
            return date('g:ia', $time);
        }
    };

    $halfHourSteps = range(0, 47 * 1800, 1800);
    return array_map($formatter, $halfHourSteps);
}

// https: //stackoverflow.com/questions/3903317/how-can-i-make-an-array-of-times-with-half-hour-intervals