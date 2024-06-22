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
        <input type="submit" value="Submit">
    </form>
    </center>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fnum = $_POST["fnum"];
        $fnum2 = $_POST["fnum2"];
            $result1 = $fnum + $fnum2;
            $result2 = $fnum - $fnum2;
            $result3 = $fnum * $fnum2;
            $result4 = $fnum / $fnum2;

        echo "ADD:\n",$result1;

        echo "SUB:\n",$result2;

        echo "MUL:\n",$result3;

        echo "DIV:\n",$result4;

        }
    ?>
</body>
</html>