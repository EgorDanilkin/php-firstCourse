<div style="width: 250px; border-style: solid">
    <div style="width: 250px; height: 250px; background:#ddd;"></div>
    <p>какой то товар</p>
</div>
<hr>
<div>
    <h3>отзывы</h3>
    <?php
        $link = mysqli_connect('localhost', 'root', '855665', 'shop');

        if(isset($_POST['review']) and $_POST['review'] != '') {
            mysqli_query($link, "INSERT INTO reviews (review) VALUES ('$_POST[review]')");
        }

        $reviews = mysqli_query($link, 'select * from reviews');
        while ($line = mysqli_fetch_assoc($reviews)) {
            echo "$line[review] <br><hr>";
        }
    ?>
    <form method="post" action="3.php">
        <textarea name="review" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </form>
</div>