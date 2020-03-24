<?php
require 'print.php';

function testMultipleOfThree(){
    $result = getValue(3);
    return "Linio" === $result;
}

function testMultipleOfFive(){
    $result = getValue(5);
    return "IT" === $result;
}

function testMultipleOfBoth($number){
    if($number%3 === 0 && $number%5 ===0){
        $result = getValue($number);
        return "Linianos" === $result;
    }else{
        echo "testMultipleOfBoth: number provided must be a multiple of 3 AND 5 \n";
        return false;
    }
}

function testOtherValue($number){
    if($number%3 !== 0 && $number%5 !==0){
        $result = getValue($number);
        return $number === $result;
    }else{
        echo "testOtherValue: number provided should not be multiple of 3 OR 5 \n";
        return false;
    }
}


function runtest(){
    $testcase_passed = 0;
    $testcase_passed += test('testMultipleOfFive');
    $testcase_passed += test('testMultipleOfThree');
    $testcase_passed += test('testMultipleOfBoth', 15);
    $testcase_passed += test('testOtherValue', 1);

    if($testcase_passed == 4){
        echo "OK : Test Case Passed $testcase_passed";
    }
}

function test($testfunction, $number = 0){
    if(call_user_func($testfunction, $number)){
        echo "$testfunction Passed \n";
        return 1;
    }else {
        echo "$testfunction Failed \n";
        return 0;
    }
}

runtest();