<?php
include_once "DivideByZeroException.php";

/**
 * @throws DivideByZeroException
 */
function divide($number1, $number2){
    if ($number2 === 0){
        throw new DivideByZeroException();
    }
        return $number1 / $number2;
}

try {
    $result = divide(100, 10);
    echo  $result;
    echo "<br>";
    $result1 = divide(100,0);
    echo $result1;
} catch (DivideByZeroException $e) {
    echo " Co loi xay ra " . "<br> " .$e;
}

