 <?php
 
// define the max and min values for the problem
$max = 10;
$min = 5;

// generate a random number between the max and min values
$randomNumber = rand($min, $max);

// display the problem to the user
echo "What is $randomNumber x 2?";

// get the user's answer
$userAnswer = readline();

// calculate the correct answer
$correctAnswer = $randomNumber * 2;

// check if the user's answer is equal to the correct answer
if ($userAnswer === $correctAnswer) {
    echo "That's correct!";
} else {
    echo "Sorry, that's incorrect. The correct answer is $correctAnswer.";
}

?>