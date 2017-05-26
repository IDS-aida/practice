<?php
function moves($move,$hairetu){

echo $hairetu[$move];
}

$hairetu = array("title" => "ハリポタ","genre" => "ファンタジー","year" => "2001年");

echo "以下から一つ選んでください\n";
echo "・title\n";
echo "・genre\n";
echo "・year\n";

$move = trim(fgets(STDIN));
moves($move,$hairetu);


?>