<?php

include_once 'myConnect.php';

$cn = getConnect();

//Đọc dữ liệu từ bảng tbCourse
$mysql = "select * from tbcourse";
$rs = mysqli_query($cn, $mysql);
if ($rs){
    echo "<pre>";
    print_r(mysqli_fetch_all($rs));
    echo "</pre>";
}

mysqli_close($cn);