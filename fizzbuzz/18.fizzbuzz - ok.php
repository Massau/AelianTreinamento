<?php

for($i = 1; $i <= 100; $i++) {
	
	switch($i) {
		case ($i % 15 == 0):
			print ("fizzBuzz") . "<br>";
			break;
		case ($i % 3 == 0) :
			print ("fizz") . "<br>";
			break;
		case ($i % 5 == 0) :
			print ("buzz") . "<br>";
			break;
		
		default:
			print ($i) . "<br>";
			break;
	}
}

?>