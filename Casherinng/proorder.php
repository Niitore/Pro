<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];

    // Define prices for each item
    $prices = [
        "Pizza" => 10.00,
        "Burger" => 8.00,
        "Pasta" => 12.00,
        "Salad" => 6.00,
        "adobo" => 30.00,
    ];

    if (!empty($food)) {
        $totalCost = 0;
        echo "<h1>Your Order</h1>";
        echo "<ul>";
        foreach ($food as $item) {
            $qty = $quantity[$item];
            $cost = $prices[$item] * $qty;
            $totalCost += $cost;
            echo "<li>$item: $qty x \${$prices[$item]} = \$" . number_format($cost, 2) . "</li>";
        }
        echo "</ul>";
        echo "<p><strong>Total Cost: \$" . number_format($totalCost, 2) . "</strong></p>";
    } else {
        echo "<p>No items selected.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
