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
                <li><a href="views/recipes/pot_roast.php">Pot Roast</a></li>
                <li><a href="views/recipes/cream_biscuit.php">Cream Biscuits</a></li>
                <li><a href="views/recipes/leek_soup.php">Leek and Potato Soup</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <p>
                American cuisine is an interesting one to define. Due to the wide variety of cultures that make up American, many different types of cuisines are borrowed from to create hybrid and original recipes. 
            </p>
        </div>
        <div class="thumbs">
            <img src="images/burger.jpeg">
            <img src="images/fries.jpeg">
            <img src="images/ribs.jpeg">
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