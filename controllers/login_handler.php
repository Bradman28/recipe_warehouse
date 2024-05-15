<?php
session_start();
<<<<<<< HEAD
require_once '../models/database_connect.php'; // Assuming your database connection file

// Initialize variables
$email = $password = "";
$error_message = ""; // To store error messages

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user inputs
    $email = trim($_POST["login_email"]); // Trim whitespace from email
    $password = $_POST["login_password"];

    // Basic validation
    if (empty($email) || empty($password)) {
        $error_message = "Please fill in all fields";
    } else {
        // Attempt to log the user
        $login_successful = try_login($pdo, $email, $password);

        if (!$login_successful) {
            $error_message = "Incorrect email or password";
        }
    }
}

// Function to attempt login and handle database interaction
function try_login($pdo, $email, $password) {
    try {
        // Prepare a query to select user data based on email
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Check if user exists and verify password (if user is found)
        if ($user && password_verify($password, $user['password'])) {
            // Login successful, set session variable and return true
            $_SESSION['email'] = $email;
            header("Location: ../public/index.php");
//            return true;
            exit();
        } else {
            // User not found or password incorrect, return false
            $error_message = "Incorrect email or password";
            return false;
        }

    } catch (PDOException $e) {
        // Database error handling (optional, log the error or display a generic message)
        echo "An error occurred: " . $e->getMessage();
        return false;
=======
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
>>>>>>> 74038efdde88b871abbc385c26cbf9803103032a
    }
}
