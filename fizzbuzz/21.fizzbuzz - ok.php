<?php

$i = 1;
$limite = 100;
$fizz = 'Fizz';
$numFizz = 3;
$buzz = 'Buzz';
$numBuzz = 5;

for ($i ; $i <= $limite; $i++) {
	
	switch($i) {
		case (($i %($numFizz * $numBuzz) == 0)) :
			echo "fizzbuzz";
			break;
		case (($i % $numFizz) == 0) :
			echo "fizz";
			break;
		case (($i % $numBuzz) == 0) :
			echo "buzz";
			break;
		
		default:
			echo $i;
			break;
	}
	echo "<br>";
}

?>