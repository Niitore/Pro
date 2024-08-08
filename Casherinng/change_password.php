<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dbinfom";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_SESSION["username"];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password !== $confirm_password) {
        echo "New passwords do not match.";
        exit;
    }

    $username = $conn->real_escape_string($username);
    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($current_password, $row["password"])) {
            $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE users SET password='$new_password_hashed' WHERE username='$username'";
            if ($conn->query($update_sql) === TRUE) {
                echo "Password changed successfully.";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Current password is incorrect.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>
