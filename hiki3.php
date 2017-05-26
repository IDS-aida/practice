<?php
function furits_num($fruits_box,$num){

echo "{$fruits_box[$num-1]}です";

}

$fruits_box = array("apple","orange","cherry");

echo "番号を入力してね\n";
$num = trim(fgets(STDIN));

furits_num($fruits_box,$num);



//配列を関数の中に書いてた
//変数展開の{}を忘れてた
?>


