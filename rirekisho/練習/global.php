<?php
  function test(){
    $foo = "ローカル変数";

      echo '＄foo グローバルスコープ' . $GLOBALS['foo'] . "<br>";
      echo '$foo カレントスコープ' . $foo . "<br>";

    }

    $foo = "零";
    test();


?>
