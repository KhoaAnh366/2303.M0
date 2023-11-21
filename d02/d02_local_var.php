<?php
echo "example local variable \n";

$r = 1;

function fn_factorial($n=5){
    global $r;

    for ($i=2; $i <= $n; $i++) { 
        $r *= $i;
    }

    printf("%d! = %d \n", $n, $r);
}

fn_factorial();

fn_factorial(9);

$n = 10;
fn_factorial($n);

// ==> lỗi do r nằm ngoài phạm vi của function
printf("Giai thua cua $n = %d \n", $r);