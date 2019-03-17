<?php

echo strtotime('now')."<br>";

$timestamp = mktime(8, 22, 52, 8 , 19, 2018);
echo $timestamp."<br>";
echo strtotime('+1 day')."<br>";
echo strtotime('next week')."<br>";

// $date = '2018年08月18日 07時03分12秒';
// $format = 'Y年m月d日 H時i分s秒';
//
// $d = DateTime::createFromFormat($format, $date);
//
// echo $d->format('Y-m-d H:i:d')."<br>";
//
// $d = DateTime::createFromFormat('Y m d H i s', '2018 08 10 17 14 25');
//
// echo $d->format('Y/m/d H時i分s秒').'<br>';
//
// echo $d->format(DateTime::ATOM)."<br>";
// echo $d->format(DateTime::COOKIE)."<br>";
// echo $d->format(DateTime::RFC822)."<br>";
// echo $d->format(DateTime::RFC850)."<br>";
// echo $d->format(DateTime::RFC1036)."<br>";
// echo $d->format(DateTime::RFC1123)."<br>";
// echo $d->format(DateTime::RFC2822)."<br>";
// echo $d->format(DateTime::RSS)."<br>";
// echo $d->format(DateTime::W3C)."<br>";






 ?>
