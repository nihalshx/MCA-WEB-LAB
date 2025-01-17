<?php
// Get user input
$units = (float)$_POST['units']; // Number of units consumed
$rate = (float)$_POST['rate'];   // Tariff rate per unit

// Calculate total cost
$total_cost = $units * $rate;

// Bill generation
echo "<h1>Electricity Bill</h1>";
echo "<p>Units Consumed: " . $units . "</p>";
echo "<p>Rate per Unit: ₹" . $rate . "</p>";
echo "<p>Total Cost: ₹" . $total_cost . "</p>";
?>

<form method="post" action="">
  <label for="units">Enter Units Consumed:</label>
  <input type="number" id="units" name="units" step="0.01" required>
  <br>
  <label for="rate">Enter Rate per Unit (₹):</label>
  <input type="number" id="rate" name="rate" step="0.01" required>
  <br>
  <input type="submit" value="Generate Bill">
</form>