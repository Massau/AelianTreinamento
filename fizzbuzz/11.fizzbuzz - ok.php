<?php

for($i = 1; $i <= 100; $i++) {
	
	switch($i) {
		case (($i % 3 == 0) && ($i % 5 == 0)):
			echo "fizzBuzz <br>";
			break;
		case ($i % 3 == 0) :
			echo "fizz <br>";
			break;
		case ($i % 5 == 0) :
			echo "Buzz <br>";
			break;
		
		default:
			echo $i . "<br>";
			break;
	}
}

?>