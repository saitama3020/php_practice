<?php

  $count = (int)file_get_contents('counter.txt');
  $count++;

  file_put_contents('counter.txt', $count);
  echo "あなたは{$count}番目の訪問者です・";


 ?>
