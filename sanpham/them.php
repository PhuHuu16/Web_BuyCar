<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/them.css">
    <title>Add Car</title>
</head>
<body>
    <div class="container">
        <h3 class="title">Thêm xe</h3>
        <form  method="post" enctype="multipart/form-data">
            <div>
                <label for="ten">Tên </label>
                <input type="text" name="ten">
            </div>
            <div>
                <label for="hinh" >Chọn hình ảnh</label> <br>
                <input id="img" type="file" name="hinh">
            </div>
            <div>
                <label for="gia">Giá</label>
                <input type="text" name="gia">
            </div>
            <input type="submit" name="submit" value="Thêm mới">
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
        </form>
    </div>
    <?php
        include("config.php");
        //Xử lý dữ liệu submit bằng phương thức POST của người dùng
        if (isset($_POST['submit'])){
            $ten = $_POST['ten'];
            $hinh = basename($_FILES['hinh']['name']);
            $gia = $_POST['gia'];

            move_uploaded_file($_FILES['hinh']['tmp_name'],'../img/'.$hinh);

            //Câu lệnh insert
            $sql = "INSERT INTO product(ten, hinh, gia)
        VALUES('$ten', '$hinh','$gia')";
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
</body>
</html>
