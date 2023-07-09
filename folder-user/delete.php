<?php
session_start();

if (isset($_SESSION['user'])) {

    require_once "../connection.php"; // Assuming you have the record ID to be deleted
    $recordId = $_GET['id']; // Assuming you retrieve the record ID from the URL query parameter

    // Prepare the SQL statement
    $sql = "DELETE FROM tb_staff WHERE s_id = ?";
    $stmt = $mysqli->prepare($sql);

    // Bind the parameter to the statement
    $stmt->bind_param("i", $recordId); // Assuming the ID is an integer, use "i" as the data type

    // Execute the statement
    if ($stmt->execute()) {

        $alert = '<div class="alert alert-success">Rekod berjaya dipadam!</div>';
    } else {
        // Error in insertion
        $alert =
            '<div class="alert alert-danger">Rekod gagal dipadam : ' . $stmt->error . '</div>';
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();

    header('Location: ../folder-user/index.php');
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
