<?php
require_once 'dbConnection.php';

$result = mysqli_query($link, 'select * from images order by views desc');

while($line = mysqli_fetch_assoc($result)) {
    echo "<a href='/show.php?id=$line[id]'>";
    echo "<img src='$line[address]' width='400px' height='300px'>";
    echo "</a>";
}
