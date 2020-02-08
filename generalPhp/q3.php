<?php

/* 

Remove - from string start and end
input : -Hello Themelooks-
output will be: Hello Themelooks

*/

$string = "-Hello Themelooks-";
//Regex to remove all instances of "-"
$charToRemove = "/\-+/" ;

//Remove "-" from String
$resultString = preg_replace($charToRemove,"",$string);

echo $resultString;