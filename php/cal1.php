<?php

  $weeks = array('日','月','火','水','木','金','土');
  $now = time();
  $y = date('Y', $now);
  echo $y."<br>";

  $m = date('n', $now);
    echo $m."<br>";
  $last = date('t', $now);
  echo $last."<br>";
  echo "<h1>{$y}年{$m}月のカレンダー</h1>";
  for ($d = 1; $d <= $last; $d++){
    $t = mktime(0, 0, 0, $m, $d, $y);
    $w = date('w', $t);
    echo $w . "<br>";
    echo "{$d}日({$weeks[$w]})";
  }


 ?>
