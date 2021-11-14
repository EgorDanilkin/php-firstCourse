<?php
    session_start();
if (!isset($_SESSION['userCart'])) {
    $_SESSION['userCart'] = ['product' => 1 ];
} else {
    $_SESSION['userCart']['product']++;
}