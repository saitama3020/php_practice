<?php
  echo (time() + 60)."<br>" ;
  setcookie("men", "うどん", time() + 60);
  echo "クッキーをセットしました。";
?>
