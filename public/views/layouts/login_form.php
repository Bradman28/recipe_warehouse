<!-- Login form -->
<div class="form" id="login_form_container">
    <span class="close-button" id="close_logdin_form">&times;</span>
    <form id="login_form" action="../controllers/login_handler.php" method="post">
        <h2>Login</h2>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" id="login_email" name="login_email">
            <label for="login_email">Email</label>
        </div>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="password" name="login_password">
            <label for="login_password">Password</label>
        </div>

        <button type="submit">Login</button>

        <p>Don't have an account? <a class="reg-form"href="#" id="registration_link">Register</a></p>
    </form>
</div>
