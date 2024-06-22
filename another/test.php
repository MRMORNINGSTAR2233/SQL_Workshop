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
    $result1 = $number1 + $number2;
    $result2 = $number1 - $number2;
    $result3 = $number1 * $number2;
    $result4 = $number1 / $number2;
    echo"ADD: $result1 " ,
        "SUB: $result2 " ,
        "MUL: $result3 " ,
        "DIV: $result4 " ;
    }
    ?>
    </body>
    </html>