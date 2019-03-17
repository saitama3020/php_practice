<?php
  if (@$_GET['send']){
    echo "サブミットボタンを押しました。";
  }else{
    echo "サブミットボタンは押されていません。";
  }
?>


<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="get">
      <input type="submit" name="send" value="サブミットボタン">
    </form>
  </body>
</html>
