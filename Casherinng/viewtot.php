<?php
session_start(); // Start the session

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Total</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="fw-light">Your Order Total</h1>
        <p class="lead">Total cost: Php <?php echo number_format($total, 2); ?></p>
        
        <a href="home.php" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
 