<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Cookie Demo</h2>
        <hr>
        <form action=" " name="formColor">
            <label for="">Choose a color</label>
            <select name="color" id="color">
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="orange">Orange</option>
            </select> <br> <br>

            <button type="submit" name="btnOK" class="btn btn-danger">Submit</button>

        </form>
        <?php 
            //đoạn code php chỉ chạy khi form được submit
            if(isset($_REQUEST["btnOK"])){
                //lấy giá trị của ô chọn màu
                $mau = $_REQUEST["color"];
                //tạo biến cookie chứa màu được chọn, hoạt động trong vòng 60s
                setcookie("color", $mau, time()+1*60);
                header("location:d04_getCookie.php");
            }
        ?>
    </div>
</body>

</html>