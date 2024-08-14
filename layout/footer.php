<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                
                <h4 class="title"> CÔNG TY CỔ PHẦN TIN HỌC ROSA </h4>
                <p class="desc">CÔNG TY CỔ PHẦN TIN HỌC ROSA luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <img src="public/images/rosa.png" alt="">
                <div id="payment">
                    <!-- <div class="thumb">
                        <img src="public/images/img-foot.png" alt="">
                    </div> -->
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h4 class="title">Thông tin cửa hàng</h4>
                
                <ul class="list-item">
                    <li>
                        <p>(028)39293770 - (028)39293765 </p>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@gmail.com" title="">support@gmail.com</a>
                    </li>

                    <b>CHI NHÁNH HÀ NỘI</b>
                    <li>
                        <p>Tầng 4, Tòa nhà Viet Tower, số 01 phố Thái Hà, P.Trung Liệt, Q. Đống Đa, TP Hà Nội</p>
                    </li>
                    
                    <b>TRỤ SỞ CHÍNH & TTBH HCM</b>
                    <li>
                        <p>150 Ter, đường Bùi Thị Xuân, phường Phạm Ngủ Lão, Quận 1, TP. Hồ Chí Minh</p>
                    </li>
                   
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h4 class="title">Chính sách mua hàng</h4>
                <ul class="list-item">
                    <li>
                        <a href="?mod=page&page_id=2" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="" title="">Giao hàng - lắp đặt</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách thanh toán </a>
                    </li>
                    <!-- <div class="thumb">
                        <img src="public/images/1.png" alt="">
                    </div>  -->
                </ul>
            </div>
                

            <div class="block" id="newfeed">
                <h4 class="title">Bảng tin</h4>
                <p class="desc">Đăng ký với chúng tôi để nhận được thông tin ưu đãi sớm nhất</p>
                <div id="form-reg">
                    <form method="POST" action="">
                        <input type="email" name="email" id="email" placeholder="Nhập email tại đây">
                        <button type="submit" id="sm-reg">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <div id="foot-bot">
        <div class="wp-inner">
        <p style="color: #FFFFFF">&copy; <span id="current-year"> Bản quyền thuộc về thuộc về công ty cổ phần tin học </span> <a href="https://ROSA.com//" ref="nofollow" style="color: #FFFFFF" target="_blank">ROSA</a></p>
        </div>
    </div>
    <!-- <div id="foot-bot">
    <p class="ftCopyright">
						© Bản quyền thuộc về <a href="http:.vn/" ref="nofollow" style="color: #9a9b9e" target="_blank">Microstar</a>.
					</p> -->

</div>
</div>

<div id="menu-respon">
    <a href="?page=home" title="" class="logo"></a>
    <div id="menu-respon-wp">
        <ul class="" id="main-menu-respon">
            <li>
                <a href="?" title>Trang chủ</a>
            </li>
            <?php
                    foreach ($list_category as $item) {
                        if ($item['parent_id'] == 0) {
                    ?>
                <li>
                    <a href="?mod=product&action=cat_product&cat_id=<?php echo $item['cat_id'] ?>" title=""><?php echo $item['cat_title'] ?></a>
                    <?php
                    if ($item['is_child'] == 1) {
                    ?>
                        <ul class="sub-menu">
                            <?php
                            foreach ($list_category as $item2) {
                                if ($item2['parent_id'] == $item['cat_id']) {
                            ?>
                                    <li>
                                        <a href="?mod=product&action=cat_product&cat_id=<?php echo $item2['cat_id']; ?>" title=""><?php echo $item2['cat_title'] ?></a>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php
                    }
                    ?>
                </li>
            <?php
            }
        }
            ?>
            <li>
                <a href="?mod=post" title>Danh sách đối tác</a>
            </li>
            
            <li>
                <a href="?mod=page&page_id=1" title>Giới thiệu</a>
            </li>
            
            <li>
                <a href="?mod=page&page_id=4" title>Liên hệ</a>
            </li>
        </ul>
    </div>
</div>
<div id="btn-top"><img src="public/images/icon-to-top.png" alt="" /></div>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "141073229093751");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v18.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>

</html>