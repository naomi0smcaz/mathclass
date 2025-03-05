 <?php
 	$math_ops = array("+", "-", "*", "/", "%");
 	$num1 = rand(0, 9);
 	$num2 = rand(0, 9);
 	$op = $math_ops[rand(0, 4)];
 	switch ($op) {
 	case "+":
 		echo $num1 + $num2;
 	break;
 	case "-":
 		echo $num1 - $num2;
 	break;
 	case "*":
 		echo $num1 * $num2;
 	break;
 	case "/":
 		if ($num2 != 0) {
 			echo $num1 / $num2;
 		} else {
 			echo "Error: Cannot divide by zero";
 		}
 	break;
 	case "%":
 		if ($num2 != 0) {
 			echo $num1 % $num2;
 		} else {
 			echo "Error: Cannot modulo by zero";
 		}
 	break;
 	default:
 		echo "Invalid operation";
 	}
 ?>