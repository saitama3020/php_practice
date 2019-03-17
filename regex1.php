<form action="regex1.php" method="post">
  整数を入力してください。
  <input type="text" name="num" value="">
  <input type="submit" value="送信">
</form>

<?php
  if( isset($_POST['num'] )) {
    if( preg_match('/[^-\d]/', $_POST['num']) ) {
      echo "整数ではありません。";
    } else {
      echo "整数です。";
    }
  }

?>
