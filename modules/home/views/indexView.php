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
                        <video autoplay="" loop="" preload="" muted="" playsinline="">
                        <source src="public/uploads/slider/1.mp4">
                        </video>
                    </div>
                </div>
                <!--  -->
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

	<div class="blogs mt-4">
		<div class="container ">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h3>Tin tức</h3>
					</div>
				</div>
			</div>
            <div class="row blogs_container">
				<?php foreach($dataNews as $news):?>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(assets/upload/news/<?php echo $news->photo; ?>)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h5 class="blog_title"><?php echo $news->name;?></h5>
							<span class="blog_meta">viết bởi: <?php echo $news->createdby?><br/>
							Ngày <?php echo Date_format(Date_create($news->createdate), "d/m/Y");?></span>
							<a class="blog_more" href="#">Xem chi tiết</a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			
			<div class="col-md-2 float-right p-2 mr- font-italic text-right font-weight-bold"><a class="blog_more " href="?mod=post">Xem thêm >>></a></div>
		</div>
	</div>
            <!-- product -->
    <div class="col-lg-7 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center">
						<div class="section_title">
							<h2>Khung giờ vàng</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="index.php?controller=products&action=listsale">Mua ngay</a></div>
					</div>
				</div>
            <style>
                .deal_ofthe_week_col {
    /* Căn chỉnh nội dung bên trong */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.deal_ofthe_week_content {
    /* Căn chỉnh nội dung bên trong */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.section_title h2 {
    /* Kiểu dáng cho tiêu đề */
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.timer {
    /* Kiểu dáng cho bộ đếm thời gian */
    display: flex;
    gap: 20px;
}

.timer li {
    /* Kiểu dáng cho từng số đếm */
    width: 60px;
    height: 60px;
    border: 1px solid #ccc;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.timer_num {
    font-size: 24px;
    font-weight: bold;
}

.timer_unit {
    font-size: 14px;
    text-transform: uppercase;
}

.deal_ofthe_week_button {
    /* Kiểu dáng cho nút mua hàng */
    background-color: red;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 20px;
}

            </style>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Máy tính xách tay</h3>
                    <a href="/collections/all"><img src="admin/public/uploads/logo/on1.jpg"alt="Laptop" /></a>

                    </div>
                <?php
                if (!empty($list_product)) {
                ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_product as $item) {
                                if ($item['cat_id'] == 1 || $item['parent_id'] == 1) {
                            ?>
                                    <li>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="thumb">
                                            <img style="max-height:auto" src="admin/<?php echo $item['product_thumb']; ?>">
                                        </a>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                        <div class="price">
                                            <span class="new">
                                                <?php if (empty($item['price_sale'])) {
                                                    echo currency_format($item['original_price']);
                                                } else {
                                                    echo currency_format($item['price_sale']);
                                                }
                                                ?>
                                            </span>
                                            <span class="old"><?php echo currency_format($item['original_price']); ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <div style="text-align: center; ">
                                                <a href="?mod=cart&action=add&product_id=<?php echo $item['product_id']; ?>" title="Liên hệ" class="add-cart">Liên hệ</a>
                                            </div>
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                <?php  } ?>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                <h3 class="section-title">AI</h3>
                <a href="/collections/all"><img src="admin/public/uploads/logo/ai.jpg"alt="ai" /></a>
                </div>
                <?php if (!empty($list_product)) { ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_product as $item) {
                                if ($item['cat_id'] == 20 || $item['parent_id'] == 3) {
                            ?>
                                    <li>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="thumb">
                                            <img style="max-height:auto" src="admin/<?php echo $item['product_thumb']; ?>">
                                        </a>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                        <div class="price">
                                            <span class="new">
                                                <?php if (empty($item['price_sale'])) {
                                                    echo currency_format($item['original_price']);
                                                } else {
                                                    echo currency_format($item['price_sale']);
                                                }
                                                ?>
                                            </span>
                                            <span class="old"><?php echo currency_format($item['original_price']); ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <div style="text-align: center">
                                                <a href="?mod=cart&action=add&product_id=<?php echo $item['product_id']; ?>" title="Liên hệ"  class="add-cart" >Liên hệ</a>
                                            </div>
                                           
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left">Gaming</h3>
                    <a href="/collections/all"><img src="admin/public/uploads/logo/on2.jpg" alt="Recommend Gaming Gears" /></a>
                    </div>
                <?php if (!empty($list_product)) { ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_product as $item) {
                                if ($item['cat_id'] == 12) {
                            ?>
                                    <li>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="thumb">
                                            <img style="max-height:auto" src="admin/<?php echo $item['product_thumb']; ?>">
                                        </a>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                        <div class="price">
                                            <span class="new">
                                                <?php if (empty($item['price_sale'])) {
                                                    echo currency_format($item['original_price']);
                                                } else {
                                                    echo currency_format($item['price_sale']);
                                                }
                                                ?>
                                            </span>
                                            <span class="old"><?php echo currency_format($item['original_price']); ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <div style="text-align: center; ">
                                                <a href="?mod=cart&action=add&product_id=<?php echo $item['product_id']; ?>" title="Liên hệ" class="add-cart">Liên hệ</a>
                                            </div>
                                            
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left">Linh kiện máy tính</h3>
                    <a href="/collections/all"><img src="admin/public/uploads/logo/on3.jpg" alt="Linh kiện máy tính" /></a>
                </div>
                <?php if (!empty($list_product)) { ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_product as $item) {
                                if ($item['cat_id'] == 15 || $item['parent_id'] == 14) {
                            ?>
                                    <li>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="thumb">
                                            <img style="max-height:auto" src="admin/<?php echo $item['product_thumb']; ?>">
                                        </a>
                                        <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                        <div class="price">
                                            <span class="new">
                                                <?php if (empty($item['price_sale'])) {
                                                    echo currency_format($item['original_price']);
                                                } else {
                                                    echo currency_format($item['price_sale']);
                                                }
                                                ?>
                                            </span>
                                            <span class="old"><?php echo currency_format($item['original_price']); ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <div style="text-align: center; ">
                                                <a href="?mod=cart&action=add&product_id=<?php echo $item['product_id']; ?>" title="Liên hệ" class="add-cart">Liên hệ</a>
                                            </div>
                                            <!-- <a href="?mod=product&action=detail&product_id=<?php echo $item['product_id']; ?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a> -->
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php
get_footer();
?>
 
