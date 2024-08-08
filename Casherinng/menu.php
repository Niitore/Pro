<?php
session_start(); // Start the session

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("Location: index.php"); 
    exit; 
}
?>

<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dbinfom";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="smenu.css">
</head>
<body>
    <div class="form">
        <nav>
            <a href="home.php">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
        <h2>Profile</h2>
        <div class="profile-info">
            <?php
            // Secure the username to prevent SQL injection
            $username = $conn->real_escape_string($username);

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of the logged-in user
                while ($row = $result->fetch_assoc()) {
                    echo "<div>ID: " . htmlspecialchars($row["id"]) . "</div>";
                    echo "<div>Name: " . htmlspecialchars($row["name"]) . "</div>";
                    echo "<div>Sex: " . htmlspecialchars($row["sex"]) . "</div>";
                    echo "<div>Address: " . htmlspecialchars($row["address"]) . "</div>";
                    echo "<div>Username: " . htmlspecialchars($row["username"]) . "</div>";
                    // Do not display the password
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
        <div class="change-password">
            <button onclick="openPopup()">Change Password</button>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="popup" id="popup">
        <form action="change_password.php" method="post">
            <input type="password" name="current_password" placeholder="Current Password" required>
            <input type="password" name="new_password" placeholder="New Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Submit</button>
            <button type="button" onclick="closePopup()">Cancel</button>
        </form>
    </div>

    <script src="popup.js"></script>
</body>
</html>
