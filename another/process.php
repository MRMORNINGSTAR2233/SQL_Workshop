<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $number1 = $_POST["fno"];
    $number2 = $_POST["sno"];
    $operation = $_POST["operation"];
    $result = '';
    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        default:
            $result = 'Invalid operation';
            break;
    }
    echo "<h3>Result: $result</h3>";
}
?>