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
            <h2>Tacos</h2>
            <p>
                This is a fast, easy, and healthy recipe that I could eat once a week. I use mainly use ground chicken, but you could easily use ground turkey or beef. I like Nuevo Leon thin flour tortillas, but you can use this recipe with flour or corn tortillas. This is great on tostados and in enchiladas as well. Can also be used with nachos!
            </p>
        </div>
        <img class="recipe-img" src="../../images/tacos.jpeg">
        <br>
    <div class="shape">
        <h3>Ingredients</h3>
    <ul>
        <li>1 tbsp chili powder</li>
        <li>3/4 tsp cumin</li>
        <li>1/2 tsp kosher salt</li>
        <li>1/2 tsp oregano leaves</li>
        <li>1/2 tsp garlic powder</li>
        <li>1/4 onion powder</li>
        <li>dash of cayenne</li>
        <li>1/2 cup water</li>
        <li>1 lb ground chicken</li>
        <li>Olive oil</li>
    </ul>

    <hr>
    <ol>
        <li>Combine all spices</li>
        <li>Put enough oil in pan to lightly coat bottom. If using ground beef or pork, no oil is needed.</li>
        <li>Lightly season meat with salt. (optional if using ground beef or pork)</li>
        <li>Sauté until meat is cooked through, drain grease or water from pan.</li>
        <li>Add in spices and water. Mix until all the meat is coated.</li>
        <li>Simmer until water is almost fully reduced.</li>
        <li>Serve hot on tortillas, tostados, enchiladas, or nachos.</li>
    </ol>

    </div>
        <!-- footer -->
        <?php include '../layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include '../layouts/script_tags_bottom_page.php'; ?>
</body>
</html>