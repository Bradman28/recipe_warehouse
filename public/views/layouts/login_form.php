<<<<<<< HEAD
<?php
// Include login handler
require_once "../controllers/login_handler.php";
?>

<!-- Login form -->
<div class="form" id="login_form_container">
    <span class="close-button" id="close_login_form">&times;</span>
    <div id="login_error_message"><?php echo isset($err_msg) ? $err_msg : ''; ?></div>
    <form id="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
=======
<!-- Login form -->
<div class="form" id="login_form_container">
    <span class="close-button" id="close_logdin_form">&times;</span>
    <form id="login_form" action="../controllers/login_handler.php" method="post">
>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a
        <h2>Login</h2>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" id="login_email" name="login_email">
            <label for="login_email">Email</label>
        </div>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
<<<<<<< HEAD
            <input type="password" id="login_password" name="login_password">
            <label for="login_password">Password</label>
        </div>

        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <button type="submit">Login</button>
=======
            <input type="password" id="password" name="login_password">
            <label for="login_password">Password</label>
        </div>

        <button type="submit">Login</button>

>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a
        <p>Don't have an account? <a class="reg-form"href="#" id="registration_link">Register</a></p>
    </form>
</div>
