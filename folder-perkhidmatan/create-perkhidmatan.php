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
mysqli_query($con, 'INSERT INTO tb_document ("d_code", "d_name", "d_file", "d_tarikhkeluaran", "d_catatan", "owner_code", "d_perkhidmatan", "d_pecahan", "d_kategori")
VALUES ("MBPP:AK-PR-05", "Ulasan Teknikal Permohonan Lesen Tred, Perniagaan Dan Perindustrian", "05 - Ulasan Teknikal Permohonan Lesen Tred, Perniagaan Dan Perindustrian.pdf","2018-07-05","","PR","1","5","2")');

mysqli_close($con);
