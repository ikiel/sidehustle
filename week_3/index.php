<?php
    function multiply($num1, $num2, $num3 = 5) {
        $answer = $num1 * $num2 * $num3;
        return $answer;
    }

    require 'db_connect.php';

    if ($connect) {
        echo "Database Connected Successfuly";
    } else {
        echo "Not connected";
    }
?>