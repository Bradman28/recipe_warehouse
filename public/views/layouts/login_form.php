<?php
// Include login handler
require_once "../controllers/login_handler.php";
?>

<!-- Login form -->
<div class="form" id="login_form_container">
    <span class="close-button" id="close_login_form">&times;</span>
    <div id="login_error_message"><?php echo isset($err_msg) ? $err_msg : ''; ?></div>
    <form id="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Login</h2>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" id="login_email" name="login_email">
            <label for="login_email">Email</label>
        </div>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="login_password" name="login_password">
            <label for="login_password">Password</label>
        </div>

        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <button type="submit">Login</button>
        <p>Don't have an account? <a class="reg-form"href="#" id="registration_link">Register</a></p>
    </form>
</div>
