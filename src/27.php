<?php
  function is_prime($number) {
    if ($number <= 1) {
      return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
        return false;
      }
    }
    return true;
  }

  function calculate_average($numbers) {
    return array_sum($numbers) / count($numbers);
  }

  echo "Is the number 27 a prime number? " . (is_prime(27) ? 'Yes' : 'No');
  echo "\n";
  echo "The average of the numbers in this list is: " . calculate_average([1, 3, 5, 7]);
?>
