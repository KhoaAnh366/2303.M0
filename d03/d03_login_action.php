<!-- day la trang doc du lieu tren form dang nhap cua page [d03_login.php] va xu ly -->

<?php
/*//bo qua loi
//error_reporting(0);

if(isset($_GET["submit"])==false){
    //neu chua thuc hien dang nhap -> quay ve trang login
    header("location:d03_login.php");
}else{
    $email = $_GET["email"];

    $pwd = $_GET["pwd"];

    echo "<h4> TK dang nhap: $email, mat khau: $pwd </h4>";
}*/




/*
//cach viet khac

if(isset($_GET["submit"])==false){
    header("location:d03_login.php");
    exit();
}
//do du lieu nhap trong o email
//mac dinh khi khong khai bao phuong thuc ben html thi se la phuong thuc get
$email = $_GET["email"];

//doc du lieu nhap trong o password
$pwd = $_GET["pwd"];

//in ra ten va mat khau dang nhap
echo "<h4> TK dang nhap: $email, mat khau: $pwd </h4>";*/



//trong trường hợp sài phương thức Post bên html
if(isset($_REQUEST["submit"])==false){
    header("location:d03_login.php");
    exit();
}
//do du lieu nhap trong o email
//mac dinh khi khong khai bao phuong thuc ben html thi se la phuong thuc get
$email = $_REQUEST["email"];

//doc du lieu nhap trong o password
$pwd = $_REQUEST["pwd"];

//kiem tra tai khoan dang nhap co hop le khong
$acc = [
    "abc@gmail.com"=>"123",
    "aptech@fpt.edu.vn"=>"abc",
    "student@fpt.edu.vn"=>"123",
    "guest@gmail.com"=>"guest"
];

if(array_key_exists($email, $acc)){
    //lay password cua account trong $acc so sanh voi password dang nhap [$pwd]
    //truyen key $email vao trong mang $arr se tra ve gia tri $pwd tuong ung
    if($pwd==$acc[$email]){
        echo "<h4>Welcome to our WEBSITE !</h4>";
    }else{
        echo "<h4>Error: Invalid password !</h4>";
        echo "<a href='javascript:history.back()'> Please re-login !</a>";
    }
}else{
    echo "<h4>Error: Invalid email !</h4>";
    echo "<a href='javascript:history.back()'> Please re-login !</a>";
}

//in ra ten va mat khau dang nhap
//echo "<h4> TK dang nhap: $email, mat khau: $pwd </h4>";

/*NOTE Post bên html thì đi với Post bên php
Get bên html thì đi với Get bên php
Post và Get bên html đều đi được với REQUEST bên php
*/
