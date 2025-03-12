  <?php
    // Generate a random number between 1 and 100
    $randomNumber = mt_rand(1, 100);

    // Ask the user to guess the number
    echo "Guess the number: ";
    $userInput = readline();

    // Check if the user's input matches the random number
    if ($userInput == $randomNumber) {
        echo "Congratulations, you guessed it!";
    } else {
        echo "Sorry, you didn't guess it. The correct answer was $randomNumber.";
    }
?>