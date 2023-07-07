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
        $jawat = $_POST['s_jawatan'];
        $jab = $_POST['s_dept'];
        $role = $_POST['role'];

        require_once ("../connection.php");
        // Prepare the SQL statement
        $sql = "UPDATE tb_staff SET s_name = ?, s_ic = ?, s_email = ?, s_jawatan = ?, s_dept = ?, role = ? WHERE s_id = ?";

        $stmt = $mysqli->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bind_param("sissssi", $name, $ic, $email, $jawat, $jab, $role, $id,);

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
