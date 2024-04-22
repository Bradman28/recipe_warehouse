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
                <li><a href="recipes/pot_roast.php">Pot Roast</a></li>
                <li><a href="recipes/cream_biscuit.php">Cream Biscuits</a></li>
                <li><a href="recipes/leek_soup.php">Leek and Potato Soup</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <p>
                American cuisine is an interesting one to define. Due to the wide variety of cultures that make up American, many different types of cuisines are borrowed from to create hybrid and original recipes. 
            </p>
        </div>
        <div class="thumbs">
            <img src="../images/burger.jpeg">
            <img src="../images/fries.jpeg">
            <img src="../images/ribs.jpeg">
        </div>
        <!-- footer -->
        <?php include 'layouts/footer.php'; ?>
    </div>
</body>
</html>