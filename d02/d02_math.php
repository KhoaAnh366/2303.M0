<?php
echo "examples for Math functions \n";
echo "===============================\n";
$a = 12; $b = 456; $c = 123.789;
$s1 = "16"; $s2 = "101.892";
$ds = [12, 7, 789, 24, 4, -8];

echo "a = [$a], b = [$b], c = [$c], s1 = [$s1], s2 = [$s2] \n";

echo " * min(a, b, c) = " .min($a, $b, $c) ."\n";

echo " * min(a, b, c, s1 , s2) = " .min($a, $b, $c, $s1, $s2) ."\n";

echo " * max(a, b, c) = " .max($a, $b, $c) ."\n";

echo " * min(ds) = " .min($ds) ."\n";

echo " * min(ds) = " .max($ds) ."\n";

//in toàn bộ array
print_r($ds);

echo " * floor(c) = " .floor($c) ."\n";

echo " * ceil(c) = " .ceil($c) ."\n";

echo " * round(c) = " .round($c) ."\n";

echo " * sqrt(b) = " .sqrt($b) ."\n";

echo " * pow(a, 2) = " .pow($a, 2) ."\n";



