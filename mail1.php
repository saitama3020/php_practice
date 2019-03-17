<?php

  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  $from = "newuser@localhost";
  $to = "newuser@localhost";
  $subject = "メールテスト";
  $body = "メールテストです。\nメールテストです";
  mb_send_mail($to, $subject, $body);

 ?>
