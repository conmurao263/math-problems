function randomMathProblem() {
    $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    shuffle($numbers);
    $num1 = $numbers[0];
    $num2 = $numbers[1];
    $operator = array("+", "-", "*", "/");
    shuffle($operator);
    $op = $operator[0];
    switch ($op) {
        case "+":
            return $num1 + $num2;
            break;
        case "-":
            return $num1 - $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0) {
                return "Error: Divide by zero!";
            } else {
                return $num1 / $num2;
            }
    }
}
?> 