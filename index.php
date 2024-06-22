<!DOCTYPE html>
<html>
<head>
    <title>Simple Addition Form</title>
</head>
<body>
    <center>
        <form action="index.php" method="post">
        <label for="fnum">First Number</label>
        <input type="number" id="fnum" name="fnum"><br>
        <label for="fnum2">Second Number:</label>
        <input type="number" id="fnum2" name="fnum2"><br>
        <label for="symbols">Operators</label>
        <select name="symbols" id="symb">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        <input type="submit" value="Submit">
    </form>
    </center>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fnum = $_POST["fnum"];
        $fnum2 = $_POST["fnum2"];
        $symb = $_POST["symbols"];
        if ($symb == "+") {
            $result = $fnum + $fnum2;
        } elseif ($symb == "-") {
            $result = $fnum - $fnum2;
        } elseif ($symb == "*") {
            $result = $fnum * $fnum2;
        } elseif ($symb == "/") {
            $result = $fnum / $fnum2;
        }
        echo "<p>The result is: " . $result . "</p>";
    }
    ?>
</body>
</html>