<?php
    function bodytemp($temp){
        if($temp<=37.0){
            echo "平熱です。\n";
        }else if($temp<37.5){
            echo "微熱です\n";
        }else{
            echo "コロナの可能性あり\n";
        }
    }
    
    bodytemp(36);
    bodytemp(37.2);
    bodytemp(39);
?>