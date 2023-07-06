<?php
// Check if username and password are correct. Username and Password already set to "php","php"
require_once("../connection.php");

$username=$_POST['s_email'];
$password=$_POST['s_password'];

$query = "SELECT * FROM tb_staff WHERE s_email = '$username'";
$result = mysqli_query($mysqli, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // User exists, check password
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['s_password'])) {
        session_start(); //start the session 
        $_SESSION["Login"] = "YES";
        $_SESSION['user'] = $user;
        header('Location: ../folder-user/profile.php');
        exit;
    } else {
        // Invalid password
        echo 'Invalid password.';
    }
} else {
    session_start();
    $_SESSION["Login"] = "NO";
}

