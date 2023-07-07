<?php
session_start();
if (isset($_SESSION['user'])) {
  // Set the content file to include
  $content = "../layout/folder-user/create.php";

  require_once ('../connection.php');

   // Retrieve documents from the database
   $jawatan = "SELECT * FROM tb_jawatan";
   $jawat = $mysqli->query($jawatan);

   // Retrieve data from tb_pecahan
   $jabatan = "SELECT * FROM tb_department";
   $jab = $mysqli->query($jabatan);

  // Include the base template
  include "../layout/induk.php";
} else {
  // Redirect to login page or handle unauthorized access
  header('Location: ../authentication/page-login.html');
  exit();
}
