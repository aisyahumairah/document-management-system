<?php
session_start();
if (isset($_SESSION['user'])) {
    // Set the content file to include
    $content = "../layout/folder-user/index.php";

    require_once('../connection.php');

    $sql = "SELECT * FROM tb_staff";
    $result = $mysqli->query($sql);

    // Include the base template
    include "../layout/induk.php";
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
