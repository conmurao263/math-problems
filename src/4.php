<?php
function get_random_math_problem($max) {
    $num1 = rand(0, $max);
    $num2 = rand(0, $max);
    $op = rand(0, 3); // 0 for +, 1 for -, 2 for x, 3 for /

    switch ($op) {
        case 0:
            return "$num1 + $num2";
        case 1:
            return "$num1 - $num2";
        case 2:
            return "$num1 x $num2";
        case 3:
            return "$num1 / $num2";
    }
}
?>