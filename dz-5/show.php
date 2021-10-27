<?php
require_once 'dbConnection.php';

$id = $_GET['id'];

mysqli_query($link, 'update images set views = views + 1 where id=' . $id);

$result = mysqli_query($link, 'select * from images where id=' . $id);

$line = mysqli_fetch_assoc($result);
echo "<img src='$line[address]' width='400px' height='300px'>";
echo "<span>Просмотров $line[views]</span>";

