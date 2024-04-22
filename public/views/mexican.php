<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipe Warehouse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        <?php include 'layouts/header_main.php'; ?>
        <nav>
            <ul>
                <li><a href="recipes/tacos.php">Tacos</a></li>
                <li><a href="recipes/enchiladas.php">Enchiladas</a></li>
                <li><a href="recipes/mexican_potatoes.php">Mexican Potatoes</a></li>
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
            <img src="../images/mexmeal.jpeg">
            <img src="../images/jalapenos.jpeg">
            <img src="../images/cilantro.jpeg">
        </div>
        <!-- footer -->
        <?php include 'layouts/footer.php'; ?>
    </div>
</body>
</html>