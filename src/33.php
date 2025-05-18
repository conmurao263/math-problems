<?php
function calculate_math_problems() {
    // Example: solving a basic arithmetic equation
    $result = 5 + 3;
    echo "The result of 5 + 3 is $result.";
    
    // Example: solving a quadratic equation
    $solution = solveQuadraticEquation(2, -1, 0);
    echo "The solution to the quadratic equation 2x^2 - x + 1 = 0 is $solution.";
}

function solveQuadraticEquation($a, $b, $c) {
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta < 0) {
        return "No real roots.";
    }
    else if ($delta == 0) {
        return "Real root: x = -$b / (2*a)";
    }
    else {
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        return "{$root1}, {$root2}";
    }
}

calculate_math_problems();
?>
