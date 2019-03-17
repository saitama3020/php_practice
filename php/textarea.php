<?php

  echo nl2br(htmlspecialchars($_POST['comment']));

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>テキストエリア</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <textarea name="comment" rows="5" cols="50">複数行の
        初期値</textarea>
        <br><input type="submit" name="" value="">
    </form>
  </body>
</html>
