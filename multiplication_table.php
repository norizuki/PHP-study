<?php
    $num =1;
    for($i=1;$i<10;$i++){
        $num = $i;
        for($a=1;$a<10;$a++){
            echo $num . " ";
            $num+=$i;
        }
        echo "\n";
    }
?>