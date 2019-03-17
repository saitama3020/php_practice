<?php
  $mens = array('うどん', 'そば', 'ラーメン');
  print_r($mens); echo "<br>";
  array_push($mens, 'パスタ');
  print_r($mens); echo "<br>";
  array_pop($mens);
  print_r($mens); echo "<br>";
  array_unshift($mens, 'そうめん');
  print_r($mens); echo "<br>";
  array_shift($mens);
  print_r($mens); echo "<br>";
  $mens[] = 'フォー';
  print_r($mens); echo "<br>";
?>
