<?php
    include("sanpham/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e8cc84c15b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Website Buy Car</title>
</head>
<body>
    <header class="header">
        <nav>
            <ul class="nav_link">
                <li class="link">
                    <a href="#home">Home</a>
                </li> 
                <li class="link">
                    <a href="#trending">Trending</a>
                </li> 
                <li class="link">
                    <a href="#sanpham">Sản phẩm</a>
                </li>
                <li class="link">
                    <a href="#about">About me</a>
                </li> 
            </ul>
        </nav>
        <div class="header_container" id="home">
            <h1>
                Chào mừng bạn đến thế giới của những chiếc siêu xe!
            </h1>
        </div>
    </header>

    <section class="section_container" id="trending">
        <h2>Trending 2023</h2>
        <div class="trending_gird">
            <div class="trending_card">
                <img src="img/Lamborghini Aventador.webp" alt="trending">
                <p><em>Lamborghini Aventador có giá 550.542 USD. Ảnh: Motorbiscuit.</em></p>
                <div class="trending_detail">
                    <p>Chiếc xe này được trang bị động cơ V12, sản sinh công suất 769 mã lực. Động cơ V12 6,5 lít đã có 11 năm thống trị rất tốt. Năm ngoái,
                     nó đã nhận được phiên bản Ultimate Edition, ở cả dạng coupe và roadster.
                    </p>
                </div>
            </div>
            <div class="trending_card">
                <img src="img/Ferrari 812 GTS.jpg" alt="trending">
                <p><em>Ferrari 812 GTS có giá 410.516 USD. Ảnh: Motorbiscuit.</em></p>
                <div class="trending_detail">
                    <p>
                        Ferrari 812 GTS đại diện cho hình thức cổ điển của thương hiệu. Xe được trang bị động cơ V12, hút khí tự nhiên, nằm ở phía trước, tạo ra công suất 789 mã lực.
                        Chiếc Ferrari truyền thống này có thể đạt tốc độ 211 dặm/giờ (338 km/h). Đây là một chiếc xe thú vị bạn có thể mua.
                    </p>
                </div>
            </div>
            <div class="trending_card">
                <img src="img/RR phantom.webp" alt="trending">
                <p><em>Rolls-Royce Phantom có giá 457.750 USD. Ảnh: Motorbiscuit.</em></p>
                <div class="trending_detail">
                    <p>
                        Không phải là một cỗ máy thể thao mà là một chiếc sedan sang trọng hơn đối với những người rất giàu có, đó là một chiếc xe gia đình tuyệt vời.
                        Phantom tiêu chuẩn hơi chật chội, tuy nhiên cũng có một phiên bản mở rộng với thêm không gian cho hành khách ngồi phía sau.
                        Xe này được trang bị động cơ V12 tăng áp kép sản sinh công suất 563 mã lực. Về mức giá, có thể coi đây là chiếc sedan rẻ và sang trọng nhất hiện nay.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="tab-content" id="sanpham">
        <div class="section_header">
            <h2>Giá các loại mới nhất năm 2023</h2>
        </div>
        <a class="submit" href="sanpham/them.php">Thêm sản phẩm</a>
    </div>

    <div class="sell_gird">
        <?php
            include("sanpham/config.php");
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);
            $i=1;
            if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                echo    "<div class='sell_card'>";
                echo        "<h2>".$row['ten']."</h2>"; ?>
                            <img src="img/<?php echo $row['hinh'] ?>" />  
                <?php
                echo        "<div class='sell_price'>";
                echo            "<h2>".$row['gia']." VND</h2>";
                echo        "</div>";
                echo        "<a class='btn_primary' href='sanpham/sua.php?id=$row[id]'>Sửa</a>
                            <a class='btn_danger' style='margin-right: 0;'href='sanpham/xoa.php?id=$row[id]' onclick=\"return confirm('Có chắc xóa nội dung này');\">Xóa</a>  
                            <a class='btn_easy' style='margin-right: 0;'href='sanpham/dangky.php?id=$row[id]'>Đăng ký mua</a>
                            ";
                echo    "</div>";
            }
            }
            $conn->close();
            ?>
    </div>  
    <footer id="about">
        <div class="footer_container">
            <div class="footer_col">
                <h5>Website buy Car</h5>
                <p>
                Chào mừng bạn đến với Website của tôi. Nơi đây sẽ cung cấp các giá cả về các loại siêu xe mà bạn cần.Xin cảm ơn.
                </p>
            </div>
            <div class="footer_col">
                <h4>About Us</h4>
                <div class="footer_icon">
                    <span>
                        <a href="#"><i class="ri-tiktok-fill"></i></a>
                    </span>
                    <span>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                    </span>
                    <span>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </span>
                    <span>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                    </span>
                </div>
            </div>
            <div class="footer_col">
                <h4>Địa chỉ</h4>
                <p style="margin-bottom: 1rem;" ><i id="icon_map" class='fas fa-map-marker-alt' style='font-size:24px;color:red'></i>
                    Trụ sở: 45 Nguyễn Khắc Nhu, P. Cô Giang, Q.1, TP. HCM
                </p>
                <p style="margin-bottom: 1rem;"><i id="icon_map" class='fas fa-map-marker-alt' style='font-size:24px;color:red'></i>
                    Cơ sở 2: 233A Phan Văn Trị, P.11, Q. Bình Thạnh, TP. HCM
                </p>
                <p style="margin-bottom: 1rem;"><i id="icon_map" class='fas fa-map-marker-alt' style='font-size:24px;color:red'></i>
                    Cơ sở 3: 69/68 Đặng Thùy Trâm, P. 13, Q. Bình Thạnh, TP. HCM
                </p>
            </div>
            <div class="footer_col">
                <h4>Xem danh sách</h4>
                <span>
                    <p>Xem tại đây</p>
                    <a href="sanpham/xemdanhsach.php"><i class="fa-solid fa-cart-shopping" style='font-size:24px;color:red'></i></a>
                </span>
            </div>
        </div>
        <div class="footer_bar">
            @Copyright by PhuHuu16122023.All rights reserved
        </div>
    </footer>
</body>
</html>
