<?php
session_start();

if (isset($_SESSION['user'])) {

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once ("../connection.php");
    $sql = "SELECT * FROM tb_staff WHERE s_id = $id";
    $result = mysqli_query($mysqli, $sql);
    $user = $result->fetch_assoc();

    $mysqli->close();
  } else {
    // Retrieve the user details
    $user = $_SESSION['user'];
  }

  $content = "../layout/folder-user/profile.php";

    // Include the base template
    include "../layout/induk.php";
    
} else {
  // Redirect to login page or handle unauthorized access
  header('Location: ../authentication/page-login.html');
  exit();
}
