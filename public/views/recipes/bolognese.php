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
                <li><a href="bolognese.php">Bolognese</a></li>
                <li><a href="fettucini_alfredo.php">Fettucini Alfredo</a></li>
                <li><a href="marinara.php">Marinara</a></li>
            </ul>
        </nav>
        <hr>
        <div class="text">
            <h2>Bolognese</h2>
            <div class="rating-container">
                <p>Rate this recipe!</p>
                <span class="star" onclick="rateRecipe(1)">&#9734;</span>
                <span class="star" onclick="rateRecipe(2)">&#9734;</span>
                <span class="star" onclick="rateRecipe(3)">&#9734;</span>
                <span class="star" onclick="rateRecipe(4)">&#9734;</span>
                <span class="star" onclick="rateRecipe(5)">&#9734;</span>
            </div>
            <p>
                Bolognese is a rustic and versatile dish that <strong>everyone</strong> can enjoy. There are relatively few ingredients, so let's dive right in!
            </p>
            <p>
                I originally found this recipe online, and over the years have adjusted it to my liking. I find the cooking method is most important.
            </p>
        </div>
        <img class="recipe-img" src="../../images/bolognese2.jpeg">
        <br>
    <div class="shape">
        <h3>Ingredients</h3>
    <ul>
        <li> 1/2 lb Ground beef</li>
        <li>1/2 lb Ground Pork</li>
        <li>1/4 lb Bacon</li>
        <li>1/2 cup Celery</li>
        <li>1/2 cup Onion</li>
        <li>1/2 cup Carrot</li>
        <li>4 cloves Garlic</li>
        <li>1 cup Red wine</li>
        <li>2 tbsps Tomato paste</li>
        <li>2 cups chicken or beef stock</li>
        <li>Butter</li>
        <li>Olive oil</li>
        <li>Salt</li>
        <li>Pepper</li>
        <li>Parmesan cheese</li>
        <li>Linguini noodles</li>
    </ul>

    <hr>
    <ol>
        <li>Cook bacon until crispy, remove from pan, leave roughly 1 tbsp bacon grease. Add in vegetables. Lightly season with salt and pepper. </li>
        <li>When veggies begin to soften, mix in tomato paste, and turn heat to low. In large cooking pot or dutch oven, begin cooking ground beef and pork. Lightly salt and pepper.</li>
        <li>Drain grease from meat and combine veggies and cooked bacon. Mix thoroughly.</li>
        <li>Add in red wine and simmer on high until almost fully reduced.</li>
        <li>Add in stock and combine with veggies and meat</li>
        <li>Simmer on high for 10 - 15 minutes, then turn heat down to low, cover, and simmer lightly for 1 - 3 hours. Remove cover roughly 30 minutes before serving to reduce.</li>
        <li>Cook pasta noodles, adding water to sauce to reach desired consistency</li>
        <li>Service sauce over noodles with freshly grated Parmesan cheese</li>
    </ol>

    </div>
        <!-- footer -->
        <?php include '../layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include '../layouts/script_tags_bottom_page.php'; ?>
</body>
</html>