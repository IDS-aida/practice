<?php

class Dog {
  static $type = "犬";

  function __construct(){
    $this->name = "マロン";
    $this->dog_type = "トイプードル";
  }

  static function say(){
    echo "ワンワン\n";
  }
}



?>