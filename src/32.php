<?php
function sumOfEvenNumbers($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
        }
    }
    return $sum;
}

$sampleNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "The sum of even numbers in the sample is: " . sumOfEvenNumbers($sampleNumbers);
?>
