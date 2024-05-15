<?php
    session_start();
    require_once "../controllers/login_handler.php";
    if (isset($_SESSION['email'])) {
      $user_email = $_SESSION['email'];
    } else {
      $user_email = "";  // Set to empty string if not logged in
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipe Warehouse</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        <?php include 'views/layouts/header_main.php'; ?>


        <div class="welcome-message">
            <?php if ($user_email): ?>
                <p class="greeting"></p>
            <?php else: ?>
                <p class="greeting">Please log in to view your profile.</p>
            <?php endif; ?>
        </div>

        <div class="text">
            <h2>Welcome to the last recipe website you will ever need!</h2>
            <p>
                Nothing beats a great home cooked meal. Over the last several years, I have branched my cooking out into a variety of different cultures. With all the resources at the tips of our fingerprints, there is no reason that we should not all be cooking next level dishes!
            </p>
            <p>
                I'm sharing some of my favorite recipes so that you too can begin to cook on your own! Hope you enjoy!!
            </p>
        </div>

        <div>
            <img class="homepic" src="images/kitchen.jpeg"><br><br><br><br>
        </div>
        <!-- login form popup -->
        <?php include 'views/layouts/login_form.php'; ?>
        <!-- register form popup -->
        <?php include 'views/layouts/register_form.php'; ?>
        <br><br>
        <!-- footer -->
        <?php include 'views/layouts/footer.php'; ?>
    </div>
    <!-- script tags -->
    <?php include 'views/layouts/script_tags_bottom_page.php'; ?>
</body>
</html>