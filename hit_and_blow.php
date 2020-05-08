<?php
    $range = [1,2,3,4,5,6,7,8,9];
    shuffle($range); //重複しない3桁の数字を生成(配列の要素０～２)
    $n=1; //n回目
    
    while(1){
        echo "------------------------------------------\n" .$n . "回目のチャレンジ！\n";
        echo "3桁の半角数字を重複なしで入力してください：　";
        $user_num = fgets(STDIN);
        if(123<=$user_num && $user_num <=987){  //3桁の数かチェック
            $user_num_1=($user_num - ($user_num%100))/100;  //1桁目を抽出
            $user_num_2=($user_num/10)%10;  //2桁目を抽出
            $user_num_3=$user_num%10;   //3桁目を抽出
            
            
            if(($user_num_1!==$user_num_2) && //重複がないかチェック
               ($user_num_1!==$user_num_3) && 
               ($user_num_2!==$user_num_3)){
                   
                $Hit=0;
                $Blow=0;
                    
                for($i=0;$i<3;$i++){
                    if($range[$i]===$user_num_1){   //入力された1桁目の判定
                        if($i===0){
                            $Hit++;
                        }else{
                            $Blow++;
                        }
                    }

                    if($range[$i]===$user_num_2){   //入力された2桁目の判定
                        if($i===1){
                            $Hit++;
                        }else{
                            $Blow++;
                        }
                    }

                    if($range[$i]===$user_num_3){   //入力された3桁目の判定
                        if($i===2){  
                            $Hit++;
                        }else{
                            $Blow++;
                        }
                    }
                }
                
                if($Hit===3){
                    echo "正解です！" . $n . "回目でクリアです！！\n";
                    break;
                }else{
                    echo "Hit：" . $Hit . ", Blow：" . $Blow . "\n";
                }
                
            }else{
                echo "エラー:3桁の半角数字を重複なしで入力してください\n";  //重複がある場合のエラー
            }
            
        }else{
               echo "エラー:3桁の半角数字を重複なしで入力してください\n";  //3桁ではない場合のエラー
        }
        
        $n++;
    }
?>