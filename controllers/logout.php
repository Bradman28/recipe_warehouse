<?php

    session_start();

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect user to the homepage or login page (optional)
    header("location: ../public/index.php");
    exit;
