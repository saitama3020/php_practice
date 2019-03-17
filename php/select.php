<?php

  $men = htmlspecialchars(@$_GET['men']);
  echo "{$men}好きな人ですね。";

 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="" method="get">
        <select name="men" size="4">
          <option >うどん</option>
          <option >そば</option>
          <option >ラーメン</option>
          <option>バスタ</option>
          <option >そうめん</option>
          <option >フォー</option>

        </select>
        <input type="submit" name="" value="">
      </form>
  </body>
</html>
