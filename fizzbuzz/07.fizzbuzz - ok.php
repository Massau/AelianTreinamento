<?php

$divTres = "fizz";
$divCinco = "buzz";

for ($i=1; $i<=100; $i++) {
    if ($i%3 == 0 && $i%5 == 0) {
        echo $divTres . $divCinco . "<br>";
    }
    elseif ($i%3 == 0) {
        echo $divTres . "<br>" ;
    }
    elseif ($i%5 == 0) {
        echo $divCinco . "<br>" ;
    }
    else {
        echo $i . "<br>"; 
    }
}

?>