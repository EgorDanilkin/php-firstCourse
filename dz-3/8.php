<?php

$regions = [
    'Московская область' => ['Москва', 'Красногорск', 'Клин'],
    'Якутия' => ['Якутск', 'Нюрба', 'Алдан'],
    'Алтайский край' => ['Барнаул', 'Бийск', 'Камень-на-оби']
];

while ($region = key($regions)) {
    echo $region . ':<br>';
    foreach ( $regions[$region] as $citi) {
        if (str_starts_with($citi, 'К')) {
            echo $citi . ' ';
        }
    }
    echo '<br>';
    next($regions);
}