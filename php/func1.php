<?php

  function square($x) {
    return $x * $x;
  }

  echo square(16);

  function hn($str, $level) {
    $html = "<h{$level}>$str<h{$level}>";
    return $html;
  }
  echo hn("見出し１", 1);
  echo hn("見出し２", 2);
  echo hn("見出し３", 3);

 ?>
