<?php
$a = -5;
$b = 10;
if($a >= 0 and $b >= 0) {
    echo $a - $b;
} else if ($a < 0 and $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}

$a = 7;
switch ($a) {
    case 1:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
    case 10:
        echo 10;
    case 11:
        echo 11;
    case 12:
        echo 12;
    case 13:
        echo 13;
    case 14:
        echo 14;
    case 15:
        echo 15;
}

function sum($operand1, $operand2) {
    return $operand1 + $operand2;
}

function subtruction($operand1, $operand2) {
    return $operand1 - $operand2;
}

function multiply($operand1, $operand2) {
    return $operand1 * $operand2;
}

function division($operand1, $operand2) {
    return $operand1 / $operand2;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            return $arg1 + $arg2;
        case 'subtruction' :
            return $arg1 - $arg2;
        case 'multiply':
            return $arg1 * $arg2;
        case 'division':
            return $arg1 / $arg2;
    }
}
