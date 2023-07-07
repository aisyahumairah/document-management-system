<?php
session_start();

if (isset($_SESSION['user'])) {

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $kodNo = $_POST['d_code'];
        $tajuk = $_POST['d_name'];
        $tarikh = $_POST['d_tarikh_keluaran'];
        $catatan = $_POST['d_catatan'];
        $pemilik = $_POST['owner_code'];
        $perkidmatan = $_POST['d_perkhidmatan'];
        $pecahan = $_POST['d_pecahan'];
        $kategori = $_POST['d_kategori'];
        // Retrieve other form fields as needed

        // Save the uploaded file
        $fileDir = "../file/";  // Directory to save uploaded files
        $fileName = $_FILES['d_file']['name'];  // Name of the uploaded file
        $fileTemp = $_FILES['d_file']['tmp_name'];  // Temporary file location
        // Move the uploaded file to the desired directory
        $destination = $fileDir . $fileName;
        if (move_uploaded_file($fileTemp, $destination)) {
            require_once("../connection.php");

            // Prepare the SQL statement
            $sql = "UPDATE tb_document SET d_name = ?, d_file = ?, d_tarikh_keluaran = ?, d_catatan = ?, owner_code = ?, d_perkhidmatan = ?, d_pecahan = ?, d_kategori = ? WHERE d_code = ?";
            $stmt = $mysqli->prepare($sql);

            // Bind the parameters to the statement
            $stmt->bind_param("sssssssssi", $dCode, $dName, $dFile, $dTarikhKeluaran, $dCatatan, $ownerCode, $dPerkhidmatan, $dPecahan, $dKategori, $recordId);

            // Execute the statement
            if ($stmt->execute()) {
                // Successful insertion
                $alert = '<div class="alert alert-success">Dokumen berjaya di kemaskini!</div>';
            } else {
                // Error in insertion
                $alert =
                    '<div class="alert alert-danger">Dokumen gagal ditambah : ' . $stmt->error . '</div>';
            }

            // Close the statement and connection
            $stmt->close();
            $mysqli->close();
        } else {
            // Error in file upload
            $alert =
                '<div class="alert alert-danger">Dokumen gagal ditambah </div>';
        }
    }

    $url = '../folder-doc/indexDoc.php?id=' . urlencode($alert);

    header('Location: ' . $url);
    exit();
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
