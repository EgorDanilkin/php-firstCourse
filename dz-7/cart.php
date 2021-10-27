<?php
    session_start();
    if (isset($_SESSION['userCart'])) {
?>
    <div>
        <div style="background-color: black; width: 100px; height: 100px;"></div>
        <p>product</p>
        <p><?php echo $_SESSION['userCart']['product']?></p>
    </div>
<?php
    } else {
        echo 'cart is empty';
    }
?>
