<?php
include('connection.php');
session_start();

$user_check = $_SESSION['login_user'];
$sql = "Select s_id from tb_staff where s_id = '$user_check'";

$ses_sql = $mysqli->query($sql);

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['adminid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:indexLogin.php");
   }
