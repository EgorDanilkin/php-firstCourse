<?php

function replacingSpaces ($str) {
    return str_replace(' ', '_', $str);
}

$mess = 'эта функция работает';
echo replacingSpaces($mess);