<?php
echo "Examples for Arrays\n";
echo "===============================\n";

// Khai báo a là mảng rỗng, chưa có dữ liệu
$a = [];

// Vòng lặp khởi tạo 1 số ngẫu nhiên cho mảng a
for ($i = 0; $i < 10; $i++) {
    $a[$i] = rand(0, 100);
}

print_array($a, false);

sort($a);
echo "\nAfter ascending sort: ";
print_array($a, false);

rsort($a);
echo "\n After descending sort: ";
print_array($a, false);

// Khai báo b là mảng kết hợp chứa danh sách mã số, họ tên sinh viên
$ds = [
    "s1" => "Le Min Hoo",
    "s10" => "Le Tan Thanh",
    "s9" => "Nguyen Hung",
    "s5" => "Tran Khoa",
    "s8" => "Nguyen Nhung",
    "s20" => "Nguyen Luong",
];

echo "\n\n Danh sach sinh vien: \n";
foreach ($ds as $id => $name) {
    printf("%6s : %s \n", $id, $name);
}

ksort($ds);
echo "\n After sort by id: ";
print_array($ds, true);

asort($ds);
echo "\n After sort by name: ";
print_array($ds, true);

function print_array($a, $associate)
{
    echo "\n";

    if ($associate) {
        foreach ($a as $key => $value) {
            printf("%-5s: %s \n", $key, $value);
        }
    } else {
        foreach ($a as $value) {
            echo "$value ";
        }
    }
}


