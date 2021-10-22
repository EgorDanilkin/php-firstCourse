<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
$images = ['images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'images/5.png', 'images/6.png',];

foreach ($images as $image) {
    if (is_file($image)) {
        ?>
            <a href="<?php echo $image ?>" target="_blank">
                <img src="<?php echo $image ?>" width="200px" height="200px">
            </a>
        <?php
    }
}
?>
</body>
</html>

