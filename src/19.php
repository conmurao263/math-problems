<?php
// This PHP code is intended to demonstrate the use of arrays and basic arithmetic operations.
// The array contains integers, which are then used in calculations.

$numbers = [10, 20, 30, 40, 50]; // Example array with positive numbers

// Initialize variables
$sum = 0;
$average = null;

foreach ($numbers as $number) {
    $sum += $number; // Add each number to the sum
}

if (count($numbers) > 0) {
    $average = $sum / count($numbers); // Calculate average and average of numbers if necessary
} else {
    $average = null;
}

echo "The sum of the numbers is: " . $sum . "\n";
echo "The average of the numbers is: " . ($average ?: 0) . "\n";

// Additional operations or checks
if (count($numbers) > 5 && $number % 2 == 0) {
    echo "All numbers are even and greater than 10.\n";
} else {
    echo "The number of elements in the array is: " . count($numbers) . "\n";
}
?>
