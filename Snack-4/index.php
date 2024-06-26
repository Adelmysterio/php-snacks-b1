<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
$numbers = [];

while (count($numbers) < 15) {
    $randomNum = rand(1,100);
    if ( in_array($randomNum, $numbers) ) {
        $randomNum = rand(1, 100);
    }
    else {
        array_push($numbers, $randomNum);
    }
}

var_dump($numbers);
?>