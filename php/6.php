<?php

function foo(){
    static $bar = <<<LABEL
何もないか...
LABEL;
}

class foo
{
    const BAR = <<<FOOBAR
固定例
FOOBAR;


    public $baz = <<<FOOBAR
プロパティ例
FOOBAR;
}

echo <<<"FOOBAR"
こんにちは！
FOOBAR;

foo();
$a = new foo();
echo $a->BAR;
echo $a->$baz;

?>
