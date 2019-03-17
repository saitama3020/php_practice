<?php
  session_start();
  $_SESSION['men'] = 'うどん';
  echo "セッション変数menに「{$_SESSION['men']}」をセットしました。<br>";
 ?>
 <a href="session1b.php">次ページへ</a>
 
