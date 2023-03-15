<?php
    $voter = array(
        "name" => 'John',
        "age" => 20,
        "pvc" => TRUE,
        "ward" => 019,
    );

    if ($voter["age"] > 18) {
        if ($voter["pvc"] == TRUE) {
            if ($voter["ward"] == 020) {
                echo "Voter eligible to vote";
            } else {
                echo "This voter's ward is not ward 020. <br>";
            }
        } else {
            echo "This voter does not have a PVC. <br>";
        }
    } else {
        echo "This voter is less than 18 years old. <br>";
    }
?>