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
                <li><a href="views/recipes/tacos.php">Tacos</a></li>
                <li><a href="views/recipes/enchiladas.php">Enchiladas</a></li>
                <li><a href="views/recipes/mexican_potatoes.php">Mexican Potatoes</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <p>
                Mexican cuisine is right along side with Italian as one of America's favorite. America has incorporated so many styles and ingredients from Mexican culture and their recipes have become a staple all across the country.
                Some common ingredients typical with Mexican cuisine are cumin, jalapenos, cilatro, and tortillas.
            </p>
        </div>
        <div class="thumbs">
            <img src="images/mexmeal.jpeg">
            <img src="images/jalapenos.jpeg">
            <img src="images/cilantro.jpeg">
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