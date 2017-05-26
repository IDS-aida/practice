<?php

class Dog {
  static $type = "犬";

  function __construct() {
    $this->name = "マロン";
    $this->dog_type = "トイプードル";
  }

  static function say() {
    echo "ワンワン\n";
  }

  function say_type() { // インスタンスメソッドsay_type()の定義
    echo "わたしは" . Dog::$type . "です\n"; // 静的プロパティが使える
  }

  function self_introduction() { // インスタンスメソッドself_introduction()の定義
     echo "私の名前は{$this->name}で、種類は{$this->dog_type}です。\n"; // プロパティが使える
  }
}

Dog::say_type();
Dog::say();
$dog = new Dog();
$dog -> self_introduction();

?>