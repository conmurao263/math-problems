 <?php
function getRandomCode($minLength = 0, $maxLength = 5) {
    $length = rand($minLength, $maxLength);
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= chr(rand(65, 90));
    }
    return $code;
}
?>