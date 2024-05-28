<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/xemdanhsach.css">
    <title>Xem danh sách đăng ký</title>
</head>
<body>
    <div><a class="btn_back" href="../index.php">Quay lại</a></div>
    <div class="container">
        <h3 class="title"> Danh sách đăng ký mua xe </h3>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Mã hợp đồng</th>
                        <th>Họ và tên</th>
                        <th>CCCD</th>
                        <th>Số điện thoại</th>
                        <th>Loại xe</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody id="contract-list">
                <?php
                    //Kết nối CSDL
                    include("config.php");
                    //Câu lệnh select
                    $sql = "SELECT * FROM khachhang";
                    $result = $conn->query($sql);   
                    //Đổ dữ liệu lên bảng
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo"
                                <tr>
                                    <td>HD".$row['id']."</td>
                                    <td>$row[hovaten]</td>
                                    <td>$row[cccd]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[loaixe]</td>
                                    <td>
                                    <a class='btn danger' style='margin-right: 0;'href='xoahopdong.php?id=$row[id]'>Đã xử lý</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="u1" class="ax_default box_1">
        <div id="u1_text" class="text ">
        <p><span>@Copyright by PhuHuu16122023.All rights reserved</span></p>
        </div>
    </div>
</body>
</html>