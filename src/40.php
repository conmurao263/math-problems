<?php
function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function divideArray($array, $divideBy) {
    $count = count($array);
    for ($i = 0; $i < $count / $divideBy; $i++) {
        array_splice($array, $i * $divideBy, $array.length - ($i * $divideBy));
    }
}
?>
