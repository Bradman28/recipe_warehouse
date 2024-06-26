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
            <h2>Fettucini Alfredo</h2>
            <p>
                Traditionally, fetuccini alfredo is prepared with noodles, butter, pasta water, and parmesan cheese. This recipe is the American-ized version with heavy cream. Both versions are delicious, but I feel that the heavy cream adds a little more body to the sauce.
            </p>
        </div>
        <img class="recipe-img" src="../../images/fettucini.jpeg">
        <br>
    <div class="shape">
        <h3>Ingredients</h3>
    <ul>
        <li> 1 stick unsalted butter</li>
        <li>1 cup heavy cream</li>
        <li>2 cups grated cheese (recommend using 1 cup fresh grated good parmesan)</li>
        <li>3 - 6 cloves garlic</li>
        <li>1/2 tsp pepper</li>
        <li>salt to taste</li>
        <li>Fetuccini noodles</li>
    </ul>

    <hr>
    <ol>
        <li>Bring salted water to a boil. Add in roughly 1/3 to half a pound of fetuccini noodles. Be sure to stir so that noodles do not stick.</li>
        <li>Melt butter in large sauce pan over medium heat.</li>
        <li>Add garlic and sautee until softened.</li>
        <li>Turn heat off and add cheese and pepper, be sure to stir continously to incorporate all ingredients. Add pasta water if necessary to reach desired consistency. Add in a few shakes of dried parsley to give some color.</li>
        <li>Taste and add salt if needed.</li>
        <li>Combine all ingredients thoroughly.</li>

    </ol>

    </div>
        <!-- footer -->
        <?php include '../layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include '../layouts/script_tags_bottom_page.php'; ?>
</body>
</html>