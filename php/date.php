<?php
  $d1 = date("Y/m/d H:i:s");
  $d2 = date("Y年m月d日 H時i分s秒");
  $d3 = date('H:i:s', time() + 60);
  $d4 = date("w, Y M H:i:s");
  echo $d4 . "<br>";
  echo "現在時刻は $d1 です。<br>";
  echo "現在時刻は $d2 です。<br>";
  echo "現在時刻の６０秒後は $d3 です。<br>";

 ?>
