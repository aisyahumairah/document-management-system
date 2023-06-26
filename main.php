<?php
// Start up your PHP Session
session_start();
// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") //if login is incorrect
{
	header("Location: form.php"); //bring back to form.php. user need to re-login again 
}
?>

<html>
<head><title>Login Success</title></head>
<body>
<!--if login is correct, when user click the link, it bring to this document.php page -->
<h1>This document is protected</h1>
<p>You can only see it if you are logged in.</p>
</body>
</html>
