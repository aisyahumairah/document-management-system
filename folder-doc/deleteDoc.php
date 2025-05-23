<?php
session_start();

if (isset($_SESSION['user'])) {

    require_once "../connection.php"; // Assuming you have the record ID to be deleted
    $recordId = $_GET['id']; // Assuming you retrieve the record ID from the URL query parameter

    // Prepare the SQL statement
    $sql = "DELETE FROM tb_document WHERE d_code = ?";
    $stmt = $mysqli->prepare($sql);

    // Bind the parameter to the statement
    $stmt->bind_param("s", $recordId); // Assuming the ID is an integer, use "i" as the data type

    // Execute the statement
    if ($stmt->execute()) {

        $alert = '<div class="alert alert-success">Dokumen berjaya di padam!</div>';
    } else {
        // Error in insertion
        $alert =
            '<div class="alert alert-danger">Dokumen gagal di padam : ' . $stmt->error . '</div>';
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();

    $url = '../folder-doc/indexDoc.php?id=' . urlencode($alert);

    header('Location: ' . $url);
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
