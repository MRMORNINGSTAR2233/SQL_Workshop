<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculator Input</h2>
    <form method="post" action="">
      <label>First number:</label><br>
      <input type="number" id="fno" name="fno"><br>
      <label>Second Number:</label><br>
      <input type="number" id="sno" name="sno"><br>
      <label>Arithemetic operations</label><br>
      <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
      </select>
      <input type="submit" value="Submit">
    </form>
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
</body>
</html>