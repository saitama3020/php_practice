<h3>乱数値作成「rand()」</h3>
<?php
$iRndNum1 = rand();
$iRndNum2 = rand();
echo $iRndNum1. "<br>\n";
echo $iRndNum2. "<br>\n";
 ?>

<h3>乱数数値作成[rand()]1~3までの数値で</h3>
<?php
  $iRndNum1 = rand(1, 3);
  $iRndNum2 = rand(1, 3);
  echo $iRndNum1. "<br>\n";
  echo $iRndNum2. "<br>\n";
 ?>

 <h3>より良い乱数値作成　高速　[mt_rand()]</h3>
<?php
$iRndNum1 = mt_rand();
$iRndNum2 = mt_rand();
echo $iRndNum1."<br>\n";
echo $iRndNum2."<br>\n";
 ?>

 <h3>よりよい乱数値を作成　高速　[mt_rand()]1000~10000までの数値で</h3>
<?php

  $iRndNum1 = mt_rand(1000, 10000);
  $iRndNum2 = mt_rand(1000, 10000);
  echo $iRndNum1 . "<br>\n";
  echo $iRndNum2 . "<br>\n";

 ?>
