<!DOCTYPE html>
<html>
<head>
    <title>CÔNG TY CỔ PHẦN TIN HỌC ROSA </title>
    <!-- <base href="http://https://ismart-php.herokuapp.com/" /> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>


    <style>
/* CSS cho menu sản phẩm */
#product-menu {
    position: relative;
}

/* Ẩn hộp thoại khi không di chuột vào */
#product-submenu {
    display: none;
    position: absolute;
    background-color: white; /* Màu nền cho hộp thoại */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
    z-index: 1000; /* Đảm bảo hộp thoại nằm trên các phần tử khác */
    width: 200px;
}

/* Hiển thị hộp thoại khi di chuột vào thẻ a */
#product-menu:hover + #product-submenu,
#product-submenu:hover {
    display: block;
}
/* CSS cho các mục sản phẩm bên trong hộp thoại */
#product-submenu .item-child {
    display: flex;
    flex-direction: column; /* Hiển thị các mục theo chiều dọc */
}

#product-submenu .item-child a {
    padding: 10px;
    text-decoration: none;
    color: black; /* Màu chữ cho các mục */
    border-bottom: 1px solid #e0e0e0; /* Đường viền dưới mỗi mục */
}

#product-submenu .item-child a:hover {
    background-color: #f0f0f0; /* Màu nền khi di chuột vào mục */
}

    </style>
</head>

<body>
    <div id="site" >
        <div id="container" >
            <div id="header-wp">
                <!-- Phần Logo-->
                <div id="head-body" class="clearfix">
                 <div class="wp-inner">
                     <a href="?" title="" id="logo" class="fl-left"><img src="public/images/rosa.png" style="background:#F5F5F5 "pointer-events: none width=250 height=100></a> 
                        <div id="search-wp" class="fl-left">
                            <form method="post" action="">
                                <input type="hidden" name="mod" value="product">
                                <input type="hidden" name="action" value="search">
                                <input type="text" name="q" id="s" placeholder="CPU, RAM, SSD, LAPTOP, .....!">
                                <input type="submit" value="Tìm kiếm" id="sm-s" name="btn_search">
                            </form>
                        </div>
                        <div id="action-wp" class="fl-right">
                            <a href="tel:1900 64749" title="" id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">1900 6474</span>
                            </a>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="?mod=cart" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num"><?php if (!empty($_SESSION['cart']['info'])) echo $_SESSION['cart']['info']['num_order'] ?></span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">

                                    <a href="?mod=cart" class=""> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <span id="num">
                                        <?php
                                        if (!empty($_SESSION['cart']['info']))
                                            echo $_SESSION['cart']['info']['num_order'];
                                        else
                                            echo 0;
                                        ?>
                                    </span>
                                </div>
                                <?php
                                if (!empty($_SESSION['cart']['buy'])) {
                                ?>
                                    <div id="dropdown">
                                        <p class="desc">Có <span><?php if (!empty($_SESSION['cart']['info']))  echo $_SESSION['cart']['info']['num_order']; ?> sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <?php
                                            foreach ($_SESSION['cart']['buy'] as $item) {
                                            ?>
                                                <li class="clearfix">
                                                    <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="thumb fl-left">
                                                        <img src="admin/<?php echo $item['product_thumb']; ?>" alt="">
                                                    </a>
                                                    <div class="info fl-right">
                                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                                        <p class="price"><?php echo currency_format($item['original_price']) ?></p>
                                                        <p class="qty">Số lượng: <span><?php if (!empty($_SESSION['cart']['buy'])) echo $_SESSION['cart']['buy'][$item['product_id']]['qty']; ?></span></p>
                                                    </div>
                                                </li>
                                            <?php
                                            }

                                            ?>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right"><?php if (!empty($_SESSION['cart']['info'])) echo currency_format($_SESSION['cart']['info']['total']); ?></p>
                                        </div>
                                        <div class="action-cart clearfix">
                                            <a href="?mod=cart" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href="?mod=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Phần thư mục -->
            <div id="head-top" class="clearfix" >
                    <div class="wp-inner" >
                        <!-- <a href="" title=""id="payment-link" class="fl-left">Hình thức thanh toán</a> -->
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?mod=product" title="" id="product-menu">
                                        <span class="duan" style="display:inline-block; position: relative;">Sản phẩm</span>
                                    </a>
                                    <!-- Hộp thoại chứa sản phẩm -->
                                    <div class="sub-menu" id="product-submenu">
                                        <div class="item-child">
                                            <a href="?mod=product&action=catproductl&cat id=5"><strong style="color: black;">Linh kiện máy tính</strong></a>
                                            <a href="?mod=product&action=catproductl&cat id=1"><strong style="color: black;">LapTop</strong></a>
                                            <a href="?mod=product&action=catproductl&cat id=2"><strong style="color: black;">AI</strong></a>
                                            <a href="?mod=product&action=catproductl&cat id=3"><strong style="color: black;">Gaming</strong></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="?mod=post" title="">Đối tác của chúng tôi</a>
                                   
                                </li>
                                <li class="">
                                    <li>
                                    <a href="?mod=ai" title="" id="product-menu">
                                        <span class="duan" style="display:inline-block; position: relative;">Dự Án</span>
                                    </a>
                                    <!-- Hộp thoại chứa sản phẩm -->
                                    <div class="?mod=ai" id="product-submenu">
                                        <div class="item-child">
                                            <a href="mod=ai"><strong style="color: black;">Solutions</strong></a>
                                            <a href="mod=ai"><strong style="color: black;">AI Solutions</strong></a>
                                        </div>
                                    </div>
                                </li>
                                </li>
                                <!-- <li>
                                    <a href="?mod=page&page_id=2" title="">Danh sách đại lý </a>
                                </li> -->
                                <li>
                                    <a href="?mod=page&page_id=3" title="">Bảo hành </a>
                                </li>
                                <?php if (!isset($_SESSION['user'])) : ?>
                                <li>
                                    <a href="?mod=user" title="">Đăng nhập / Đăng ký</a>
                                </li>
                                <?php else : ?>
                                    <?php $user = $_SESSION['user']; ?>
                                    <li>
                                        <a href="/" title=""><?php echo $user['fullname'] ?></a>
                                    </li>
                                    <li>
                                        <a href="?mod=user&action=logout" title="">Đăng xuất</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Phân đoạn logo -->
             
    <div class="logo-container">
        <div class="logo-wrapper">
            <img src="admin/public/uploads/logo/1.png" alt="." class="logo">
            <img src="admin/public/uploads/logo/2.png" alt="." class="logo">
            <img src="admin/public/uploads/logo/3.png" alt="." class="logo">
            <img src="admin/public/uploads/logo/4.png" alt="."class="logo">
            <img src="admin/public/uploads/logo/5.jpg" alt="." class="logo"> 
            <img src="admin/public/uploads/logo/6.png" alt="."class="logo">
            <img src="admin/public/uploads/logo/7.png" alt="."class="logo">
            <img src="admin/public/uploads/logo/12.png" alt="."class="logo">
            <img src="admin/public/uploads/logo/9.png" alt="."class="logo">
            <img src="admin/public/uploads/logo/10.jpg" alt="."class="logo">
            <img src="admin/public/uploads/logo/11.png" alt="." class="logo">
            
        </div>
    </div>
<style>
/* Container cho các logo */

.logo-container {
    width: 150%;
    height: 80px; /* Chiều cao của vùng chứa */
    margin-right:0px;
    overflow: hidden; /* Ẩn phần logo ngoài vùng chứa */
    position: relative;
    background-color: #f0f0f0; /* Màu nền để dễ thấy logo */
}

/* Wrapper chứa các logo */
.logo-wrapper {
    display: flex;
    width: auto; /* Để chiều rộng tự động theo nội dung */
    height: 100%;
    position: absolute;
    animation: moveLeftRight 25s  linear infinite; /* Hiệu ứng di chuyển trái phải */
}

/* Các logo */
.logo {
    width: 120px; /* Đặt kích thước logo */
    height: 110;
    margin-right: 40px; /* Khoảng cách giữa các logo */
    animation :move 25s linear inginite;
    /* transform: translate3d(-2200px, 0px, 0px); transition: all 1s ease 0s; width: 210px; style="width: 110px; margin-right: 0px;" */
}

/* Hiệu ứng di chuyển từ phải sang trái */
@keyframes moveLeftRight {
    0% {
        transform: translateX(100%); /* Bắt đầu từ ngoài khung nhìn bên phải */
    }
    100% {
        transform: translateX(-100%); /* Di chuyển đến ngoài khung nhìn bên trái */
    }
}

/* Hiệu ứng di chuyển cho từng logo */
@keyframes move {
    10% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>

</body>
<script src="header.js"></script>
</html>
