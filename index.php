<?php

  $date = '';
	$weekdays = ['日曜日','月曜日',
	'火曜日','水曜日',
	'木曜日','金曜日','土曜日'];

  if($_SERVER['REQUEST_METHOD']==='POST'){
    $date = $_POST['date'];
    $date = date('w',strtotime($date));
		print($weekdays[$date]);
  }



 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>練習２０</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
    <label>日付： <input type="date" name="date" required></label>
      <input type="submit" value="送信">
    </form>
  </body>
</html>
