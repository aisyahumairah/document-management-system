<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dms";

$mysqli = new mysqli($servername, $username, $password, $dbname);

//check connection
if($mysqli)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";

?>