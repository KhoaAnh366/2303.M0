<?php
echo "examples for Arrays\n";
echo "===============================\n";

//khai báo a là mảng rỗng, chưa có dữ liệu
$a = []; 

//vòng lặp khởi tạo 1 số ngẫu nhiên cho mang a
for($i=0; $i<10; $i++){
    $a[$i] = rand(0, 100);
}

print_r($a);

echo " * min(a[]) = " .min($a) ."\n";

echo " * max(a[]) = " .max($a) ."\n";

//khai báo b là mảng kết hợp chứa danh sách mã số, họ tên sinh viên
$ds = 
[
    "s1"=>"Le Min Hoo",
    "s10"=>"Le Tan Thanh",
    "s9"=>"Nguyen Hung",
    "s5"=>"Tran Khoa",
    "s8"=>"Nguyen Nhung",
    "s20"=>"Nguyen Luong",
];

print_r($ds);

echo "\n\n Day so ngau nhien: ";
foreach ($a as $number) {
    printf("%d ", $number);
}

echo "\n\n Danh sach sinh vien: \n";
foreach ($ds as $id=>$name) {
    printf("%6s : %s \n", $id, $name);
}


