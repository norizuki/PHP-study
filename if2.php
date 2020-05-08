<?php
    function ck($check){
        if($check==="test"){
            echo "checkの中身は正しいです！\n";
        }else{
            echo "checkの中身が正しくありません。\n";
        }
    }
    
    ck("test");
    ck("akchv");
    
?>