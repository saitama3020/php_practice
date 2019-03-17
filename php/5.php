<?php
$tr = <<<EOD
Example of string
spanning multiple lines
using hredoc syntex.
EOD;

class foo{
  var $foo;
  var $bar;

  function __construct(){
    $this->foo = 'Foo';
    $this->bar = array('Bar1', 'Bar2', 'Bar3');
  }
}

$foo = new foo();
$name = '私の名前';

echo <<<EOT
私の名前は $name です。私は $foo->foo を
いくつか印刷しています。今はいくつか{$foo->bar[1]}を
印刷しています。This should print a capital 'A':\x41
EOT;
 ?>
