<?php

class Car {

//静的プロパティ=静的要素　今までに作った車の台数が記録される
public static $count = 0;

public static function getCount() {  //静的メソッド
echo Car::$count, PHP_EOL;   //静的プロパティ＝クラスに紐づく変数　クラス名::変数
 }  //定義と呼び出しは分けなくてはいけない

//プロパティ（普通Ω）
//車の色
 public $settingcolor = "";

//メソッド
//車の色を表示する
 public function getColor() {
    echo $this->settingcolor, PHP_EOL;
 }
public function __construct($color) {   //コンストラクタ＝インスタンスが生まれる（new）たびに実行される
    echo "完成" , PHP_EOL;
    Car::$count += 1;  //カウントに１プラス   ※コイツがカウント
    $this->settingcolor = $color; //$this=今できたインスタンス
}


}

Car::getCount();  //getCountを実行している
$bents = new Car("Black");

$bents->getColor();

Car::getCount();

?>