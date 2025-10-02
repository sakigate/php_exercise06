<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $num1 = filter_input(INPUT_GET, 'num1');
    $num2 = filter_input(INPUT_GET, 'num2');
    $operator = filter_input(INPUT_GET, 'operator');
}


if ($operator === "addition"){
    $result = $num1 + $num2;
    echo $num1 . " + " . $num2 . " = " . $result;

} elseif($operator === "subtraction"){
    $result = $num1 - $num2;
    echo $num1 . " - " . $num2 . " = " . $result;

}elseif($operator === "multiplication") {
    $result = $num1 * $num2 ;
    echo $num1 . " * " . $num2 . " = " . $result;

}elseif ($operator === "division"){
    $result = $num1 / $num2;
    echo $num1 . " / " . $num2 . " = " . $result;

}else{
    echo "正しい演算子を指定して下さい";
}
