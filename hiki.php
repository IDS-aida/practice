<?php

    function puts_something($s){

    echo "$s !\n";
    }

    echo "何か値を入力してください";
    $string = trim(fgets(STDIN));
    puts_something($string);

?>
