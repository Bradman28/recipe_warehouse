<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once "database_connect.php";

        $query = "INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt-> execute([$name, $email, $username, $password]);

        $pdo = null;
        $stmt = null;

        header("Location: index.html");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: index.html");
}
