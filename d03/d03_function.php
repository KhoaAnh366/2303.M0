<?php
//ép tham số được truyền phải đúng dạng quy định
declare (strict_types=1);

function div(int $a=100, int $b=3): int{
    return intdiv($a, $b);
}

$x=215; $y=13; $z=123.456;

echo "x = $x, y = $y, $z=123.456 \n";
echo "div(x, y) = ".div($x, $y). "\n";
echo "div() = " .div() ."\n";
echo "div(b:30, a:59) = " .div(b:30, a:259) ."\n";

echo "div(x, z) = ".div($x, $z). "\n";
