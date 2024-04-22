<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recipe Warehouse</title>
    <script type="text/javascript" src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- header -->
        <?php include 'layouts/header_main.php'; ?>
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
            <img class="homepic" src="../images/kitchen.jpeg"><br><br><br><br>
        </div>
        <h4>Be sure to join our mailing list to receive updates on all the newest recipes added!</h4>
        <div class="form">
            <form action="../../controllers/form_handler.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="text" id="email" name="email" placeholder="Email">

                <button type="submit">Register</button>
            </form>    
        </div>
        <br><br>
        <!-- footer -->
        <?php include 'layouts/footer.php'; ?>
    </div>
</body>
</html>