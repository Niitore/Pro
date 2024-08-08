<?php
session_start(); // Start the session

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$totalAmount = $_POST['totalAmount'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Payment</h1>
    <p class="text-center">Total Amount to Pay: <?php echo 'Php ' . number_format($totalAmount, 2); ?></p>
    <!-- Add your payment processing form or logic here -->
    <form action="thankyou.php" method="post">
        <input type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>">
        <button type="submit" class="btn btn-success btn-block">Pay Now</button>
    </form>
</div>
</body>
</html>
