<?php

echo "<br>---- BIT SHIFT RIGHT ON POSITIVE INTEGERS ----<br>";

$val = 4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copy of sign bit shifted into left side');

$val = 4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places);

$val = 4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits shift out right side');

$val = 4;
$places = 4;
$res = $val >> $places;
p($res, $val, '>>', $places, 'same result as above cannot shift beyond zero');

echo "<br>--- BIT SHIFT RIGHT ON NEGATIVE INTGERS ---<br>";

$val = -4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copy of sign bit shifted into left side');

$val = -4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits shift out right side');

$val = -4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'same result as above cannot shift beyond -1');


echo "<br>---- BIT SHIFT LEFT ON POSITIVE INTEGERS ----<br>";

$val = 4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'zeros fill in right side');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 4;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = 4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places, 'sign bits shifted out');

$val = 4;
$places = (PHP_INT_SIZE * 8 ) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits shifted out left side');


echo "<br>---- BIT SHIFT LEFT ON NEGATIVE INTEGERS ----<br>";

$val = -4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'zeros fill in right side');

$val = -4;
$places = PHP_INT_SIZE * 8 - 3;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = -4;
$places = PHP_INT_SIZE * 8 - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits shifted out left side, including sign bit');

function p($res, $val, $op, $places, $note = '') {
    
    $format = '%0' . (PHP_INT_SIZE * 8) . "b". "<br>";

    printf("Expression: %d = %d %s %d\n", $res, $val, $op, $places);
    echo "Decimal:<br>";
    printf("   val=%d<br>", $val);
    printf("   res=%d<br>", $res);

    echo "Binary<br>";
    printf("   val=". $format, $val);
    printf("   res=". $format, $res);

    if ($note) {
        echo "Note: $note<br>";
    }

    echo "<br>";
}