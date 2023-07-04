<?php
// Check if username and password are correct. Username and Password already set to "php","php"
require_once("../connection.php");

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // User exists, check password
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        session_start(); //start the session 
        $_SESSION["Login"] = "YES";
        header('Location: ../connector/dashboard.php');
        exit;
    } else {
        // Invalid password
        echo 'Invalid password.';
    }
} else {
    session_start();
    $_SESSION["Login"] = "NO";
}

