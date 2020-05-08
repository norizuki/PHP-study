<?php
    echo "西暦で年を入力してください\n";
    $year = fgets(STDIN);
    if($year%4===0){
         if($year%400===0){
             echo "うるう年です\n";
         }
         else if($year%100===0) {
             echo "平年です\n";
         }else{
             echo "うるう年です\n";
         }
    }
?>