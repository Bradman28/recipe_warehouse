<?php

//echo "PHP script is executing";

require_once "../models/database_connect.php";

// variable to hold input values and error messages
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

// check if user has clicked on post button
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["reg_email"];
    $password = $_POST["reg_password"];
    $confirm_password = $_POST["reg_confirm_password"];

    // validate email
    if (empty($email)) {
        http_response_code(400);
        exit();
    }

    // validate password
    if (empty($password)) {
        http_response_code(400);
        exit();
    }

    // validate confirm password
    if (empty($confirm_password) || $password != $confirm_password) {
        http_response_code(400);
        exit();
    }

    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        try {
            require_once "../models/database_connect.php";

            // hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // save to database
            $query = "INSERT INTO users (email, password) VALUES (?, ?);";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$email, $password]);

            $registration_success = "Registration successful! You can now login.";

            $email = $password = $confirm_password = "";

            // redirect after registration
            header("Location: ../public/index.php");
            exit();

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
};
