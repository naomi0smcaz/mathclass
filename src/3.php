<?php

// Define a function to calculate the sum of two numbers
function sum($a, $b) {
  return $a + $b;
}

// Define a function to calculate the difference between two numbers
function diff($a, $b) {
  return $a - $b;
}

// Define a function to calculate the product of two numbers
function prod($a, $b) {
  return $a * $b;
}

// Define a function to calculate the quotient of two numbers
function quot($a, $b) {
  if ($b === 0) {
    throw new DivisionByZeroException();
  } else {
    return $a / $b;
  }
}

// Define a function to calculate the remainder of two numbers
function rem($a, $b) {
  return $a % $b;
}

// Calculate the sum of 2 and 3
echo sum(2, 3);

// Calculate the difference between 5 and 3
echo diff(5, 3);

// Calculate the product of 4 and 6
echo prod(4, 6);

// Calculate the quotient of 10 and 2
echo quot(10, 2);

// Calculate the remainder of 17 and 5
echo rem(17, 5);
