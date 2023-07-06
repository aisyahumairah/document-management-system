
<?php

// username and password sent from form login.php
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

require_once("connection.php");
//input user set from code. suppose u need change to user input
$sql = "insert into user(username, password, level) values ('$myusername','$mypassword')";
$query = mysqli_query($conn, $sql); //excute query insert into table user

if (!$query) die("SQL query error encountered: " . $mysqli->error);

mysqli_close($conn);
?>
