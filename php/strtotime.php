<?php
  $d1 = date("Y/m/d H:i:s", strtotime("now"));
  $d2 = date("Y/m/d H:i:s",
        strtotime('+5 week 3 days'));
  echo "現在時刻は $d1 です。<br>";
  echo "現在時刻から５週間と３日五は $d2 です。<br>";


 ?>
