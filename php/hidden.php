<?php
  $kakushi = htmlspecialchars(@$_GET['kakushi']);
  echo "隠しフィールドの値は[{$kakushi}] です。";


?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="get">
      <input type="hidden" name="kakushi" value="隠れてます.">
      <input type="submit">
    </form>
  </body>
</html>
