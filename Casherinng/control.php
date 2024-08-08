<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinfom";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {
        header("Location: error.php");
    }
}
$conn->close();
?>