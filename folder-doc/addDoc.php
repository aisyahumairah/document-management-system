<?php
session_start();

if (isset($_SESSION['user'])) {

    require_once "../connection.php";

    // Retrieve documents from the database
    $perkhidmatanQuery = "SELECT * FROM tb_perkhidmatan";
    $perkhidmatanResult = $mysqli->query($perkhidmatanQuery);

    // Retrieve data from tb_pecahan
    $pecahanQuery = "SELECT * FROM tb_pecahan";
    $pecahanResult = $mysqli->query($pecahanQuery);

    // Retrieve data from tb_kategori
    $kategoriQuery = "SELECT * FROM tb_kategori";
    $kategoriResult = $mysqli->query($kategoriQuery);

    // Retrieve data from tb_pemilik
    $pemilikQuery = "SELECT * FROM tb_department";
    $pemilikResult = $mysqli->query($pemilikQuery);

    // Set the content file to include
    $content = "../layout/folder-document/createDoc.php";

    // Include the base template
    include "../layout/induk.php";
    $mysqli->close();
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/login.php');
    exit();
}
