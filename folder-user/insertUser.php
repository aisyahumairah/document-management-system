<?php
session_start();

if (isset($_SESSION['user'])) {

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $id = $_POST['s_id'];
        $name = $_POST['s_name'];
        $ic = $_POST['s_ic'];
        $email = $_POST['s_email'];
        $password = password_hash($_POST['s_password'], PASSWORD_DEFAULT); // Encrypt the password using password_hash()
        $jawat = $_POST['s_jawatan'];
        $jab = $_POST['s_dept'];
        $role = $_POST['role'];

        require_once ("../connection.php");
        // Prepare the SQL statement
        $sql = "INSERT INTO tb_staff (s_id, s_name, s_ic, s_email, s_password, s_jawatan, s_dept, 'role') VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bind_param("isisssss", $id, $name, $ic, $email, $password, $jawat, $jab, $role);

        // Execute the statement
        if ($stmt->execute()) {
            // Close the statement and connection
            $stmt->close();
            $mysqli->close();

            header('Location: ../folder-user/index.php');
            exit();
        } else {
            // Close the statement and connection
            $stmt->close();
            $mysqli->close();

            header('Location: ../folder-user/register.php');
            exit();
        }
    }
} else {
    // Redirect to login page or handle unauthorized access
    header('Location: ../authentication/page-login.html');
    exit();
}
