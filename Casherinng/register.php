<!DOCTYPE html>
<?php
include "conndbb.php";
?>
<html>
<head>
    <title>Register Account</title>
    <link rel="stylesheet" href="regstyle.css">
</head>
<body>
    
    <div class="container">
        <div class="form-content">
            <form action="register.php" method="post">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sex">Sex:</label>
                    <input type="text" name="sex" id="sex" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
                <div class="signup-link">
                    <a href="index.php">Sign in</a>
                </div>
            </form>
        </div>
        <div class="image-box">
            <img src="Images/reg-removebg-preview.png" alt="Register">
        </div>
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinfom";
$conn = new mysqli ($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
include "conndbb.php";
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $add = $_POST['address'];
    $sql = "INSERT INTO `users`(`username`, `password`, `name`, `sex`, `address`) VALUES ('$uname','$pass','$name','$sex','$add')";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "New record created successfully.";
        header('Location: index.php');
        exit(); 
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
