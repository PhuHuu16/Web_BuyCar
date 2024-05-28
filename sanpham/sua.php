<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/them.css">
    <title>Cập nhật thông tin</title>
    <?php
        include("config.php");
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //GET METHOD
            //Gán dữ liệu vào các thẻ input
            if (!isset($_GET["id"])) {
                header("location: index.php");
                exit;
            }
            $sql = "SELECT * FROM product WHERE id='$id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if (!$row) {
            header("location: index.php");
            exit;
            }
            $ten = $row['ten'];
            $hinh = $row['hinh'];
            $gia = $row['gia'];
        } else{
            //POST METHOD
            //Xử lý sửa dữ liệu khi người dùng nhấn nút Cập nhật
            $ten = $_POST['ten'];
            $hinh = $_POST['hinh'];
            $gia = $_POST['gia'];
            $sql = "UPDATE product SET ten='$ten', hinh='$hinh', gia='$gia' WHERE id='$id'";
            $result = $conn->query($sql);
            if(!$result){
                die("Lỗi kết nối: " . $conn->connect_error);
            }
            header("location: ../index.php");
            exit;
        }
    ?>
</head>
<body>
<div class="container">
        <h3 class="title">Cập nhật thông tin xe</h3>
        <form method="post">
            <div>
                <label>ID</label>
                <input type="text" name="id" id="id" disabled value="<?php echo $id; ?>">
            </div>
            <div>
                <label for="ten">Tên xe</label>
                <input type="text" name="ten" value="<?php echo $ten; ?>">
            </div>
            <div>
                <label for="hinh">Chọn hình ảnh</label> <br>
                <input id="img" type="file" name="hinh" value="<?php echo $hinh; ?>"> 
            </div>
            <div>
                <label for="gia">Giá</label>
                <input type="text" name="gia" value="<?php echo $gia; ?>">
            </div>
            <input type="submit" name="submit" value="Cập nhật">
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
        </form>
    </div>
</body>
</html>