<?php
session_start();

if (isset($_SESSION['user'])) {

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("../connection.php");
    $sql = "SELECT * FROM tb_staff WHERE s_id = $id";
    $result = mysqli_query($mysqli, $sql);
    $user = $result->fetch_assoc();

    // Retrieve documents from the database
    $jawatan = "SELECT * FROM tb_jawatan";
    $jawat = $mysqli->query($jawatan);

    // Retrieve data from tb_pecahan
    $jabatan = "SELECT * FROM tb_department";
    $jab = $mysqli->query($jabatan);

    $mysqli->close();
  }

  $content = "../layout/folder-user/edit.php";

  // Include the base template
  include "../layout/induk.php";
} else {
  // Redirect to login page or handle unauthorized access
  header('Location: ../authentication/page-login.html');
  exit();
}
