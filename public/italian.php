<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipe Warehouse</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        <?php include 'views/layouts/header_main.php'; ?>
        <nav>
            <ul>
                <li><a href="views/recipes/bolognese.php">Bolognese</a></li>
                <li><a href="views/recipes/fettucini_alfredo.php">Fettucini Alfredo</a></li>
                <li><a href="views/recipes/marinara.php">Marinara</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <p>
                Italian cuisine is one of the best known throughout the culinary world. Many of their dishes have been adopted into American culture and it stands tall as one of the most loved.
                Some common ingredients typical with Italian cuisine are pasta, parsley, basil, tomatoes, Mozzarella, and Parmesan cheese.
            </p>
        </div>
        <div class="thumbs">
            <img src="images/bolognese1.jpeg">
            <img src="images/marinara.jpeg">
            <img src="images/parsley.jpeg">
        </div>
        <!-- login form popup -->
        <?php include 'views/layouts/login_form.php'; ?>
        <!-- register form popup -->
        <?php include 'views/layouts/register_form.php'; ?>
        <!-- footer -->
        <?php include 'views/layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include 'views/layouts/script_tags_bottom_page.php'; ?>
</body>
</html>