<?php
  $lines = file('file.txt');
  for ($i = 0; $i < count($lines); $i++) {
    echo $i + 1;
    echo ":{$lines[$i]}<br>";
  }

 ?>
