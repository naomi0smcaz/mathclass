<?php

/**
 * Generate a random number between 1 and 10
 */
function getRandomNumber() {
    return rand(1, 10);
}

/**
 * Generate a random math problem
 */
function getMathProblem($number) {
    $problem = "What is " . $number . " x " . getRandomNumber() . "?";
    return $problem;
}

$number = 5;
echo getMathProblem($number);

?>