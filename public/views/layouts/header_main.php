<header class="header">
    <h1>
        <ion-icon name="restaurant-sharp"></ion-icon>
        <a href="index.php">Recipe Warehouse</a>
        <ion-icon name="restaurant-sharp"></ion-icon>
    </h1>

    <ul class="header-ul">
        <li><a href="index.php">Home</a></li>
        <li><a href="italian.php">Italian</a></li>
        <li><a href="mexican.php">Mexican</a></li>
        <li><a href="american.php">American</a></li>
        <li><button class="btn-login-pop" id="login_button">Login</button></li>
    </ul>
    <?php if (isset($_SESSION['email'])) : ?>
        <h4>Welcome, <?php echo $_SESSION['email']; ?>!</h4>
    <?php endif; ?>
    <div class="logout-link">
        <?php if ($user_email): ?>
            <a href="../controllers/logout.php">Logout</a>
        <?php endif; ?>
    </div>
</header>


