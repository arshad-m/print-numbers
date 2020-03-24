<?php
class PrintNumbers {
    /* public function __construct($numbers_upto){
        for ($n=1; $n <= $numbers_upto ; $n++) {
            echo $this->getValue($n)."\n";
        }
    } */

    public function getValue($number){
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

    public function printValues($numbers_upto){
        for ($n=1; $n <= $numbers_upto ; $n++) { 
            echo $this->getValue($n)."\n";
        }
    }
}

/**
 * create a class object and call the printvalues function,
 * Comment this function call while testing using PrintNumberTest.php using PHPUnit
 */
$obj = new PrintNumbers();
$obj->printValues(100);