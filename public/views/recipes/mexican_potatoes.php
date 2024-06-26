<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipe Warehouse</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        <?php include '../layouts/header_recipe.php'; ?>
        <nav>
            <ul>
                <li><a href="tacos.php">Tacos</a></li>
                <li><a href="enchiladas.php">Enchiladas</a></li>
                <li><a href="mexican_potatoes.php">Mexican Potatoes</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <h2>Mexican Potatoes</h2>
            <p>
                These spiced Mexican potatoes are a great side dish for tacos, enchiladas, burritos, or any other Mexican dish you can think of. One of my favorite things to do is use the leftover potatoes with eggs the next day for a spiced breeakfast egg hash!
            </p>
        </div>
        <div>
            <img class="recipe-img" src="../../images/potatoes.jpeg">
        </div>
        <br>
    <div class="shape">
        <h3>Ingredients</h3>
    <ul>
        <li>1 tsp kosher salt</li>
        <li>1/2 tsp paprika (smoked optional)</li>
        <li>1/2 tsp cumin</li>
        <li>1/2 tsp chili powder</li>
        <li>1/4 tsp black pepper</li>
        <li>1/4 tsp garlic powder</li>
        <li>1/4 tsp onion powder</li>
        <li>1/4 tsp oregano leaves</li>
        <li>14 oz potatoes</li>
        <li>Olive oil</li>
    <hr>
    <ol>
        <li>Preheat oven to 400 degrees</li>
        <li>Combine all spices</li>
        <li>Peel and dice potatoes into rough 1/2 inch cubes or pieces, then rinse and dry</li>
        <li>Put potatoes into bowl, lightly coat with olive oil, add spice rub, and mix thoroughly</li>
        <li>Line potatoes on baking sheet in single layer and put in oven</li>
        <li>Toss potatoes every 15 minutes until cooked through and crispy</li>
    </ol>

    </div>
        <!-- footer -->
        <?php include '../layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include '../layouts/script_tags_bottom_page.php'; ?>
</body>
</html>