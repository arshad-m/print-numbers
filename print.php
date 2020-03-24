<?php
/**
 * function to return the appropriate value against number provided
 */
function getValue($number){
    switch(true) {
        case ($number%3===0 && $number%5===0):
            return "Linianos";
            break;
        case ($number%3===0):
            return "Linio";
            break;
        case ($number%5===0):
            return "IT";
            break;
        default:
            return $number;
    }
}

/**
 * function to print the numbers
 * @param $numbers_upto INT upper limit for loop
 */
function printValues($numbers_upto){
    for ($n=1; $n <= $numbers_upto ; $n++) {
        echo getValue($n)."\n";
    }
}

/**
 * function call to print numbers from 1 to 100, 
 * Comment this function call while testing using printTest.php
 */
printValues(100);
?>