<?php

  if(isset($_COOKIE['men'])){
    echo "クッキーは{$_COOKIE['men']}です。";
  }else{
    echo "クッキーはセットされていません。";
  }

 ?>
