<?php
$regions = [
    '<ul><li>Московская область' => ['<ul><li>Москва </li>', '<li>Красногорск</li>', '<li>Клин</li></ul></li>'],
    '<li>Якутия' => ['<ul><li>Якутск</li>', '<li>Нюрба</li>', '<li>Алдан</li></ul></li>'],
    '<li>Алтайский край' => ['<ul><li>Барнаул</li>', '<li>Бийск</li>', '<li>Камень-на-оби</li></ul></li></ul>']
];

while ($region = key($regions)) {
    echo $region;
    echo implode('', $regions[$region]);
    next($regions);
}