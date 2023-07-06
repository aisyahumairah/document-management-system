<?php
session_start();

if (isset($_SESSION['user'])) {
    // Retrieve the user details
    $user = $_SESSION['user'];
  
  } else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/login.php');
    exit();
  }

// Set the content file to include
$content = "../layout/folder-user/profile.php";

// Include the base template
include "../layout/induk.php";
