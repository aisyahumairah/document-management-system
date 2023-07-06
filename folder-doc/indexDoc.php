<?php
session_start();

if (isset($_SESSION['user'])) {

    require_once "../connection.php";

    // Retrieve documents from the database
    $sql = "SELECT * FROM tb_document";
    $result = mysqli_query($mysqli, $sql);

    if (isset($_GET['id'])) {
        $alert = $_GET['id'];
    }
    // Set the content file to include
    $content = "../layout/folder-document/indexDoc.php";

    // Include the base template
    include "../layout/induk.php";
    $mysqli->close();
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/login.php');
    exit();
}
