<?php
session_start();
if (isset($_SESSION['user'])) {
// Set the content file to include
$content = "../layout/home.php";

// Include the base template
include "../layout/induk.php";
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
