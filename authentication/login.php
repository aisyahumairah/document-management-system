<?php
// Check if username and password are correct. Username and Password already set to "php","php"
if ($_POST["username"] == "php" && $_POST["password"] == "php") 
{
// If username & password is correct, we set the session to YES
 session_start(); //start the session 
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged correctly in</h1>";
 echo "<p><a href='document.php'>Link to protected file</a><p/>";
}
else 
{
// If username & password is not correct, we set the session to NO
 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='document.php'>Link to protected file</a></p>";
}
?>
