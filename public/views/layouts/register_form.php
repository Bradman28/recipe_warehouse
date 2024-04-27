<?php
// Include registration handler
require_once "../controllers/register_handler.php";
?>

<!-- Registration form -->
<div class="form" id="registration_form_container" style="display: none">
    <span class="close-button" id="close_reg_form">&times;</span>
    <form id="reg_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Register</h2>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" id="reg_email" name="reg_email" placeholder="Email">
            <label for="reg_email"></label>
<!--            <div class="error-message" id="email_error"></div>-->
        </div>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="reg_password" name="reg_password" placeholder="Password">
            <label for="reg_password"></label>
<!--            <div class="error-message" id="password_error"></div>-->
        </div>

        <div class="input-wrapper">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="reg_confirm_password" name="reg_confirm_password" placeholder=" Confirm Password">
            <label for="reg_confirm-password"></label>
<!--            <div class="error-message" id="confirm_password_error"></div>-->
        </div>
        <button type="submit">Register</button>
        <div id="reg_error-message"></div>
    </form>
</div>
