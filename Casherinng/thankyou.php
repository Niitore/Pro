<?php
session_start(); // Start the session

if (!isset($_SESSION['username'])) {
    die("User not logged in.");
}

// Include the database connection file
include "conndbb.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required POST variables are set
    if (isset($_POST['totalCost']) && isset($_POST['cash'])) {
        $totalCost = $_POST['totalCost'];
        $cash = $_POST['cash'];
        $username = $_SESSION['username']; // Get the username from the session

        // Calculate change
        $change = $cash - $totalCost;

        // Prepare SQL statement to insert data into database
        $stmt = $conn->prepare("INSERT INTO tblorder (ordertot, cash, username) VALUES (?, ?, ?)");

        if ($stmt) {
            // Bind parameters (d for double, since totalCost and cash are numeric; s for string, for username)
            $stmt->bind_param("dds", $totalCost, $cash, $username);

            // Execute the statement
            if ($stmt->execute()) {
                $message = "<h1>Thank You!</h1>";
                $message .= "<p>$username, your payment of PHP " . number_format($cash, 2) . " has been recorded.</p>";
                $message .= "<p>Your change is PHP " . number_format($change, 2) . ".</p>";
            } else {
                $message = "<p>There was an error processing your payment, $username. Please try again.</p>";
            }

            // Close the statement
            $stmt->close();
        } else {
            $message = "<p>Prepared statement error: " . $conn->error . "</p>";
        }
    } else {
        $message = "<p>Required fields are missing.</p>";
    }
} else {
    $message = "<p>Invalid request.</p>";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="thank.css">
</head>
<body>

<div class="container">
    <?php echo $message; ?>
    <a href="home.php" class="btn-home">Back to Home</a>
</div>

</body>
</html>
