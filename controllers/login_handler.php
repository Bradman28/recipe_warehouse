<?php
session_start();
require_once '../models/database_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    // validation

    //check if user info is in database
    $query = "SELECT id, email, password FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($email AND password_verify($password, $email['password'])) {
        // email exists and password is correct
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        //redirect
        header('Location: ../public/index.php');
        exit();
    } else {
        //credentials are not valid
        header('Location: ../public/index.php');
        exit();
    }
}
