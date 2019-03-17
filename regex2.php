<form action="regex2.php" method="post">
  郵便番号 <input type="text" name="zip" value=""><br>
  電話番号 <input type="text" name="tel" value=""><br>
  電子メール <input type="text" name="mail" value=""><br>
  <input type="submit" name="submit" value="送信">
</form>

<?php
  if( isset( $_POST['submit'] )) {
    if( preg_match('/^\d{3}-\d{4}$/', $_POST['zip']) ) {
      echo "郵便番号です。<br>";
    }
    if( preg_match('/^\d{1, 4}-\d{1, 4}-\d{4}$/', $_POST['tel']) ) {
      echo "電話番号です。<br>";
    }
    if( preg_match('/^.+@.+\..+$/', $_POST['mail']) ){
      echo "多分メールアドレスです。";
    }
  }
 ?>
