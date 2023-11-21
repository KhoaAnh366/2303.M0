<?php
echo "examples for String functions \n";
$name = "Nguyen Xuan Truong";

echo "ten = [$name] \n";
echo "================== \n";
//nối chuỗi = .
echo "* str_word_count() = ".str_word_count($name)."\n";

echo "* strlen() = ".strlen($name)."\n";

//viết hoa ký tự của các từ
echo "* ucwords() = ".ucwords($name)."\n";

//viết hoa ký tự đầu tiên của các từ
echo "* ucfirst() = ".ucfirst($name)."\n";

echo "* strrev() = ".strrev($name)."\n";

echo "* str_replace() = ".str_replace("u", "o", $name)."\n";

echo "* strpos() = ".strpos($name, "u")."\n";

echo "* strpos() = ".strpos($name, "b")."\n";