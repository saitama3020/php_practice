<?php

  session_start();

  function connect() {
    return new PDO("mysql:dbname=shop", "root", "root");
  }

  function img_tag($code) {
    if(file_exists("image/{$code}.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="images/' . $name . '.jpg"' . 'alt="">';
  }


 ?>
