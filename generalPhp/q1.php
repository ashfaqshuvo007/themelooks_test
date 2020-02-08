<?php

/* 

Write a PHP program to find factorial of a number using recursive function.

input 4 / Output 24 

*/

function fact($num){
    //If input is <= 1 
    if($num <=1){
        return 1;
    }else{
        //else call fact() method recursively 
        return $num * fact($num-1);
    }
}

//Calling fact method.
$result = fact(4);

echo "Factorial: $result";