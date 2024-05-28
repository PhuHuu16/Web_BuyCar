<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hợp đồng đăng ký mua xe</title>
    <link rel="stylesheet" href="../css/dangky.css">
</head>
<body>
    <div class="container">
        <h3 class="title">Thêm hợp đồng đăng ký mua xe</h3>
        <form method="post">
            <div>
                <label for="hovaten">Họ và tên người mua:</label>
                <input type="text" name="hovaten" placeholder="VD:Nguyễn Văn A">
            </div>
            <div>
                <label for="cccd">CCCD</label>
                <input type="text" name="cccd" placeholder="VD:0123456789">
            </div>
            <div>
                <label for="phone">Số điện thoại</label>
                <input type="text" name="phone" placeholder="VD:0123456789">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="VD:example@gmail.com">
            </div>
            <div>
                <label for="ngaylaphopdong">Ngày lập hợp đồng:</label>
                <input type="text" name="ngaylaphopdong" placeholder="VD:26/11/2023">
            </div>
            <div>
                <label for="loaixe">Loại xe nào :</label>
                <select name="loaixe" id="khachhang">
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Porsche">Porsche</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Thêm mới">
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
        </form>
    </div>
    <?php
        include("config.php");
        //Xử lý dữ liệu submit bằng phương thức POST của người dùng
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $cccd = $_POST['cccd'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $ngaylaphopdong = $_POST['ngaylaphopdong'];
            $loaixe=$_POST['loaixe'];

            //Câu lệnh insert
            $sql = "INSERT INTO khachhang(hovaten, cccd, phone, email, ngaylaphopdong, loaixe)
        VALUES('$hovaten', '$cccd', '$phone', '$email', '$ngaylaphopdong', '$loaixe')";
            //Thực thi câu lệnh SQL
            $result = $conn->query($sql);
            //Kiểm tra lỗi
            if(!$result){
                die("Lỗi kết nối: " . $conn->connect_error);
            }
            //Chuyển tiếp về trang index khi thêm mới thành công
            header("location: ../index.php");
            exit;
        }
    ?>
        <div id="u1" class="ax_default box_1">
        <div id="u1_text" class="text ">
        <p><span>@Copyright PhuHuu16122023.All rights reserved</span></p>
        </div>
    </div>
</body>
</html>
