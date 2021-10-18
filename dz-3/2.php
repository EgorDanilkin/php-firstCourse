<?php

$n = 0;
 do{
     if ($n == 0) {
         echo $n . ' - ноль<br>';
     }else if ($n % 2 != 0) {
         echo $n . ' - не четное число<br>';
     } else {
         echo $n . ' - четное число<br>';
     }
    $n++;
 } while ($n <= 10);