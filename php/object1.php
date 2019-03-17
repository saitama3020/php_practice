<?php

  class Human {
    public $name;
    public $height;
    public $weight;
    function show() {
      echo "{$this->name}さんの身長は{$this->height}センチ、体重は{$this->weight}キロです。<br>";
    }
  }

  $taro = new Human();
  $taro->name = '太郎';
  $taro->height = 174;
  $taro->weight = 70;
  $taro->show();

  $hanako = new Human();
  $hanako->name = '花子';
  $hanako->height = 158;
  $hanako->weight = 50;
  $hanako->show();


?>
