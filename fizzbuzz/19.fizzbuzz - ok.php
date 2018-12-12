<?php

$i = 1;
$limite = 100;
$fizz = 'Fizz';
$numFizz = 3;
$buzz = 'Buzz';
$numBuzz = 5;

for ($i ; $i <= $limite; $i++) {

    if (($i %($numFizz * $numBuzz) == 0)) {
        echo $fizz . $buzz;
    }
    elseif (($i % $numFizz) == 0) {
        echo $fizz;
    }
    elseif (($i % $numBuzz) == 0) {
        echo $buzz;
    }   
    else {
        echo $i;
    }
    echo "<br>";
}

?>