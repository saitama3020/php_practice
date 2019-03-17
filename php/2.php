<?php

  $a = 1.23456789;
  $b = 1.23456780;
  $epsilon = 0.00001;
  echo abs($a-$b);
    if( abs($a-$b)< $epsilon){
    echo "心";
  }
  // /echo NAN == NAN;
  echo is_nan(NAN);
  echo NAN == TRUE;

 ?>
