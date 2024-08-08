<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <link rel="stylesheet" href="prostyle.css">
    <script>
        function checkCash() {
            var totalCost = parseFloat(document.getElementById("totalCost").value);
            var cashInput = parseFloat(document.getElementById("cash").value);
            var submitButton = document.getElementById("submitButton");

            if (cashInput >= totalCost) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    </script>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];

    // Define prices for each item
    $prices = [
        "adobo" => 45.00,
        "bicol" => 60.00,
        "biryani" => 20.00,
        "carbonara" => 60.00,
        "samosa" => 30.00,
        "mac" => 60.00,
        "calamares" => 80.00,
        "albondigas" => 50.00,
        "pancit" => 80.00,
    ];

    if (!empty($food)) {
        $totalCost = 0;
        echo "<h1>Your Order</h1>";
        echo "<table>";
        echo "<tr><th>Item</th><th>Quantity</th><th>Price per Unit</th><th>Total Cost</th></tr>";
        foreach ($food as $item) {
            $qty = $quantity[$item];
            $cost = $prices[$item] * $qty;
            $totalCost += $cost;
            echo "<tr>";
            echo "<td>$item</td>";
            echo "<td>$qty</td>";
            echo "<td>PHP" . number_format($prices[$item], 2) . "</td>";
            echo "<td>PHP" . number_format($cost, 2) . "</td>";
            echo "</tr>";
        }
        echo "<tr class='total'>";
        echo "<td colspan='3'>Total Cost</td>";
        echo "<td>PHP" . number_format($totalCost, 2) . "</td>";
        echo "</tr>";
        echo "</table>";
        
    } else {
        echo "<p>No items selected.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>

<div class="contain">
    <form action="thankyou.php" method="post">
        <h2>Payment</h2>
        <div class="form-group">
            <div class="total-cost">
                Total Cost: <?php echo "PHP" . number_format($totalCost, 2); ?>
            </div>
            <label for="cash">Cash</label>
            <input type="number" name="cash" id="cash" class="form-control" required oninput="checkCash()" step="0.01">
            <input type="hidden" name="totalCost" id="totalCost" value="<?php echo number_format($totalCost, 2); ?>">
            <button type="submit" id="submitButton" class="btn-submit" disabled>Submit Payment</button>
        </div>
    </form>
</div>

</body>
</html>
