<?php
//Fizzbuzz atribuindo um valor à uma variável do tipo String
//Concatendo strings para representar outra palavra
//Não usando operador aritmético de soma (++), mas somando 1 ao contador

    $palavraFizz = "fizz";
    $palavraBuzz = "buzz";
    
    for($i=1; $i<=100; $i = $i + 1){

        if($i%5 == 0 && $i%3 == 0){
            echo $palavraFizz . $palavraBuzz;
        } 
        elseif($i%3 == 0 && !$i%5 == 0){
            echo $palavraFizz;
        }
        elseif($i%5 == 0 && !$i%3 == 0){
            echo $palavraBuzz;
        }
        else{
            echo $i;
        }
    echo "<br>";
    }
?>