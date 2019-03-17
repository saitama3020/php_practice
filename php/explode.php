<?php

  $men = "うどん, そば, ラーメン, パスタ";
  $array = explode(',', $men);
  print_r($array);
  echo "<br>";
  $men2 = implode("#", $array);
  echo $men2;


 ?>
