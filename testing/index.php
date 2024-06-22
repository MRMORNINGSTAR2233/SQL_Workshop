    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fnum = $_POST["fnum"];
        $fnum2 = $_POST["fnum2"];
            $result1 = $fnum + $fnum2;
            $result2 = $fnum - $fnum2;
            $result3 = $fnum * $fnum2;
            $result4 = $fnum / $fnum2;

        echo "ADD:",$result1,"\t\t","SUB:",$result2,"\t\t","MUL:",$result3,"\t\t","DIV:",$result4,"<br>";;

        }
    ?>\