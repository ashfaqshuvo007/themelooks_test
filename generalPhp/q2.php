<?php

/* 

Remove specific element by value from an array in PHP?

$monthArray = array('jan', 'feb', 'march', 'april', 'may');

remove value ( march ) from $monthArray

Output will be array('jan', 'feb', 'april', 'may');

*/
$monthArray = ['jan','feb','march','april','may'];
//Print before removal
echo "Before:<pre>";
print_r($monthArray);
echo "</pre>";

$removeMonth = 'march';
//Search for march and returns its key(index)
$itemKey = array_search($removeMonth,$monthArray);

//if it exists, remove from month array
if($itemKey !== false){
    unset($monthArray[$itemKey]);
}

//Print After removal
echo "After:<pre>";
print_r($monthArray);
echo "</pre>";

// $resultArray = removeMonth($monthArray);