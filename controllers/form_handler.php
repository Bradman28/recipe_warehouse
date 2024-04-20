<?php

require_once "models/database_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "database_connect.php";

        // hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt-> execute([$username, $password, $email]);

        // redirect after registration
        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
