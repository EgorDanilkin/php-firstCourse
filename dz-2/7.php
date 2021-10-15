<?php

$currentHour = date('H');
$currentMinute = date('i');
$currentTime = '';

if ($currentHour == 1 or $currentHour == 21) {
    $currentTime .= $currentHour . ' час ';
} else if (($currentHour >= 2 and $currentHour <= 4) or ($currentHour >= 21 and $currentHour <= 24)) {
    $currentTime .= $currentHour . ' часа ';
} else {
    $currentTime .= $currentHour . ' часов ';
}

if ($currentMinute % 10 == 1 and $currentMinute != 11) {
    $currentTime .= $currentMinute . ' минута';
} else if (($currentMinute % 10 >= 2 and $currentMinute % 10 <= 4) and ($currentMinute < 12 or $currentMinute > 14)) {
    $currentTime .= $currentMinute . ' минуты';
} else {
    $currentTime .= $currentMinute . ' минут';
}

echo $currentTime;

