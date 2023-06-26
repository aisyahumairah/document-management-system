<?php
/*connect to localhost*/
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

/* select db */
mysqli_select_db($con, "db_nafbti");

/*insert two records of data into table persons */ 
mysqli_query($con, "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin', '35')");

mysqli_query($con, "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire', '33')");

mysqli_close($con);
?>