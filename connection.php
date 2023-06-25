<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "db_document";

$mysqli = new mysqli($servername, $username, $password, $dbname);

//check connection
if($mysqli)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";

?>