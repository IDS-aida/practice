<?php
    function test($num1,$num2){
    $ans = $num1 * $num2;

echo "{$num1}と{$num2}をかけた数は" . $ans . "です！";
    }


    echo "最初の数字を入力してください\n";
    $num1 = trim(fgets(STDIN));


    echo "二番目の数字を入力してください\n";
    $num2 = trim(fgets(STDIN));


    $ans = test($num1,$num2);

//初めは5行目を17行目よりも下に書いていた。


?>