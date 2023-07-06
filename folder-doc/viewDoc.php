<?php
session_start();

if (isset($_SESSION['user'])) {

    require_once "../connection.php";

    // Retrieve documents from the database
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tb_document WHERE d_code = $id";
        $result = mysqli_query($mysqli, $sql);

        // Set the content file to include
        $content = "../layout/folder-document/viewDoc.php";

        // Include the base template
        include "../layout/induk.php";
        $mysqli->close();
    } else {
        echo "<p class='col-12'>No document ID provided.</p>";
    }
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/login.php');
    exit();
}
