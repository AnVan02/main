<?php
get_header();
?>
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <?php
                    foreach ($list_slider as $item) {
                    ?>
                        <div class="item">
                            <img src="admin/<?php echo $item['slider_thumb']; ?>" alt="">
                        </div>
                    <?php } ?>
                    <!-- video phân header -->
                    <div class="carouselSlide slick-slide" data-slick-index="14" aria-hidden="true" style="width: 1860px;" tabindex="-1" role="option" aria-describedby="slick-slide014">
                        <img src="admin/public/uploads/cpu/5.jpg">
                    </div>
                </div>
                <!--  -->
                <section id="bannersHome" class="blockSection hidden-xs">
                <section id="bannersHome" class="blockSection hidden-xs">

                
    <section id="bannersHome" class="blockSection hidden-xs">

                
         </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-1.png">
                            </div>
                            <h3 class="title">Bảo hành 1 năm </h3>
                            <p class="desc">Sản phẩm chính hãng với bảo hành tối thiểu 1 năm</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-2.png">
                            </div>
                            <h3 class="title">Thanh toán dễ dàng</h3>
                            <p class="desc">Có nhiều cách thanh toán</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-3.png">
                            </div>
                            <h3 class="title">30 ngày đổi trả hàng</h3>
                            <p class="desc">Có thể đổi trả hàng bị lôi trong 30 ngày </p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-4.png">
                            </div>
                            <h3 class="title">Thời gian làm việc </h3>
                            <p class="desc">8h sáng - 5h30 chiều </p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-5.png">
                            </div>
                            <h3 class="title">Số holine</h3>
                            <p class="desc">19001616</p>
                        </li>
                    </ul>
                </div>
            </div>
	<!-- Blogs -->
     <style>
    .featurette-divider {
    margin: 5rem 0;
    /* Space out the Bootstrap <hr> more */
  }
  
  /* Thin out the marketing headings */
  .featurette-heading {
    font-weight: 100;
    line-height: 1;
    letter-spacing: -.05rem;
  }
    </style>
    <!-- post cty -->
    <main>
        <article class="blog-post">
            <div class="blog-image">
                <img src="admin/public/uploads/post/name.jpg" alt="Hình ảnh bài viết">
            </div>
            <div class="blog-content">
                <h2>THÔNG BÁO CHÍNH THỨC TỪ CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN.</h2>
                <p>Kể từ ngày 25/07/2024,tập đoàn Achieve Technologe SDL BHD chính thức trở thành nhà phân phối khu vực của intel (intel Authorizel Distributor) tại thị trường Việt Nam.</p>
                <p>Được sự uỷ thác và tín nhiệm từ tập đoàn achieva:</p>
                <p>Công Ty Cổ Phần Tin Học Viết Sơn chính thức trở thành đối tác đại diện với mục tiêu thúc đẩy hoạt động kinh doanh và phân phối sản phâm Intel tại thị trường Việt Nam </p>
                <p>Chúng tôi cam kết sẽ luôn mang lại những giá trị tốt nhất cho tất cả Quý đôi tác kinh doanh cũng như Quý Khách Hàng đã lựa chọn sản phẩm Intel và Công ty Viết Sơn.</p>
               
                    --------------------------------------------
                <h3>Viết Sơn - Leading Distributor in the Internet of Every Things</h3>
               <p>Chi Nhánh HCM: 150Ter Bùi Thị Xuân, P.Phạm Ngũ Lão, Quận 1, TP.HCM</p>
               <p>Chi Nhánh HN: tầng 4,số 1 Thái Hà-Trung Liệt, Đông Đa, Hà Nội</p>
               <button>Xem thêm >></button>
            </div>
        </article>
    </main>
    <style>
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

main {
    padding: 20px;
}

.blog-post {
    display: flex;
    align-items: flex-start;
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.blog-image {
    flex: 0 0 400px; /* Đặt kích thước cố định cho phần hình ảnh */
    margin-right: 30px; /* Khoảng cách giữa ảnh và nội dung */
}

.blog-image img {
    max-width: 100%; /* Đảm bảo ảnh không vượt quá kích thước của phần chứa */
    height: auto;
    border-radius: 5px;
}

.blog-content {
    flex: 10; /* Chiếm phần còn lại của không gian */
}

h2 {
    margin-top: 0;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
    
     
    <!-- New posh2 -->
    <main>
        <?php
        // Giả sử bạn có một mảng các bài viết blog
        $blogs = [
            [
                "title" => "ASUS Z790 SERIES – THỐNG LĨNH CÔNG NGHỆ!!!",
                "content" => "Tặng set 3 quạt TUF Gaming TF120 ARGB trị giá 1,860,000đ khi mua Bo mach chủ Asus Z790 series + tản nhiệt AIO ROG 360 Series.",
                "content"=>"",
                "image" => "admin/public/uploads/post/blog2.jpg", // Đường dẫn đến ảnh bên trái
                "image_position" => "left" // Vị trí của ảnh
            ],
            [
                "title" => "AOC CQ32G3SE/74 ",
                "content" => "Màn hình cong Gaming AOC 31.5″ với độ phân giải Quad HD (2560 x 1440), đem tới hình ảnh ấn tượng cùng tốc độ phản hồi 1ms, tần số quét 165Hz, công nghệ FreeSync Premium và HDR10. Được trang bị tấm nền VA, màn hình CQ32G3SE sẽ đem lại góc nhìn 178/178.",
                "image" => "admin/public/uploads/post/blog1.jpg", // Đường dẫn đến ảnh bên phải
                "image_position" => "right" // Vị trí của ảnh
            ],
            // Thêm các bài viết khác nếu có
        ];

        // Vòng lặp qua các bài viết và hiển thị chúng
        foreach ($blogs as $blog) {
            echo "<article class='blog-{$blog['image_position']}'>";
            echo "<img src='{$blog['image']}' alt='Hình ảnh cho {$blog['title']}' class='blog-img'>";
            echo "<div class='content'>";
            echo "<h2>{$blog['title']}</h2>";
            echo "<p>{$blog['content']}</p>";
            echo "</div>";
            echo "</article>";
        }
        ?>
    </main>
    <style>
   body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

main {
    padding: 20px;
}

article {
    background-color: #fff;
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    display: flex;
    align-items: flex-start;
}

.blog-left {
    flex-direction: row; /* Hình ảnh bên trái, nội dung bên phải */
}

.blog-right {
    flex-direction: row-reverse; /* Hình ảnh bên phải, nội dung bên trái */
}

.blog-img {
    /* max-width: 500px; */
    height: auto;
    margin: 0 20px;
}

.content {
    flex: 1;
}

h2 {
    margin-top: 0;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>

    <!-- new post 3 -->
    <main>
        <div class="blog-container">
            <?php
            // Giả sử bạn có một mảng các bài viết blog
            $blogs = [
                [
                    "title" => "CPU-I3-10105F-SRH8V",
                    "MSP" => "CPU-I3-10105F-SRH8V",
                    "content" => "CPU Intel Core i3-10105F là phiên bản nâng cấp của I3-10100F với xung nhịp tăng nhẹ và hiệu suất hơn..",
                    "image" => "admin/public/uploads/cpu/4.jpg", // Đường dẫn đến ảnh bên trái
                    "image_position" => "left" // Vị trí của ảnh
                ],
                [
                    "title" => "AMD RYZEN THREADRIPPER 7970X",
                    "MSP" => "Ryzen Threadripper 7970X",
                    "content" => " Cải thiện hiệu suất một cách vượt trội và giúp giải phóng sức mạnh để tối đa hóa khả năng kết xuất..",
                    "image" => "admin/public/uploads/cpu/name.jpg", // Đường dẫn đến ảnh bên phải
                    "image_position" => "right" // Vị trí của ảnh
                ],
            ];

            // Vòng lặp qua các bài viết và hiển thị chúng
            foreach ($blogs as $blog) {
                echo "<article class='blog-{$blog['image_position']}'>";
                echo "<img src='{$blog['image']}' alt='Hình ảnh cho {$blog['title']}' class='blog-img'>";
                echo "<div class='content'>";
                echo "<h2>{$blog['title']}</h2>";
                echo "<p><em>{$blog['MSP']}</em></p>";
                echo "<p>{$blog['content']}</p>";
                echo "</div>";
                echo "</article>";
            }
            ?>
            </div>
        </main>
    <style>
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

main {
    padding: 20px;
}

.blog-container {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Khoảng cách giữa các bài viết */
}

article {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    flex: 1;
    box-sizing: border-box;
    display: flex;
    align-items: flex-start;
}

.blog-left {
    flex-direction: row; /* Hình ảnh bên trái, nội dung bên phải */
}

.blog-right {
    flex-direction: row-reverse; /* Hình ảnh bên phải, nội dung bên trái */
}

.blog-img {
    max-width: 100px;
    height: auto;
    margin: 0 20px;
}

.content {
    flex: 1;
}

h2 {
    margin-top: 0;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    
    </style>

            <!-- New product-->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">CPU AMD RYZEN 9 7900X3D  <span class="text-muted"> 7900X3D</span></h2>
                    <p class="lead"> Cải thiện hiệu suất một cách vượt trội và giúp giải phóng sức mạnh để tối đa hóa khả năng kết xuất và các công việc liên quan đến đồ họa..</p>
                </div>
                <div class="col-md-2 float-right p-2 mr- font-italic text-right font-weight-bold"><a class="blog_more " href="?mod=product&action=detail&product_id=29">Xem thêm >>> </a></div>

                <div class="col-md-5">
                    <img src= "public/images/img-pro-08.jpg">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">CPU-INTEL3-10105F-SRH8V<span class="text-muted">SRH79</span></h2>
                    <p class="lead">CPU Intel Core i3-10105F là phiên bản nâng cấp của I3-10100F với xung nhịp tăng nhẹ...</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="public/images/img-pro-06.jpg">
                </div>
                <div class="col-md-2 float-right p-2 mr- font-italic text-right font-weight-bold"><a class="blog_more " href="?mod=product&action=detail&product_id=28">Xem thêm >>> </a></div>
            </div>
            <hr class="featurette-divider">
        </div>
        <style>
      .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    user agent stylesheet
    div {
        display: block;
        unicode-bidi: isolate;
    }
    body {
        color: #5a5a5a;
    }
        </style>

<!-- p -->
<?php
    get_footer();
?>
 
