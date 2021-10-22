<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php

function createGallery($src) {
    $images = scandir($src);
    foreach ($images as $image) {
        if (is_file('images/' . $image)) {
            ?>
            <a href="/images/<?php echo $image ?>" target="_blank">
                <img src="/images/<?php echo $image ?>" width="200px" height="200px">
            </a>
            <?php
        }
    }
}

createGallery('./images');
?>
</body>
</html>

