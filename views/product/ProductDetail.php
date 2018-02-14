<section id="productDetail" class="dk-box">
    <div class="product-gallery">
        <div class="product-toolbar">
            <ul>
                <li><i class="fa fa-share-alt" aria-hidden="true"></i></li>
                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-bell-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-line-chart" aria-hidden="true"></i></li>
            </ul>
        </div>
        <div class="product-img">
            <img id="product-pic"
                 src="public/img/product gallery/<?= $productInfo['id']; ?>/product350.jpg"
                 data-magnify-src="public/img/product gallery/<?= $productInfo['id']; ?>/product1280.jpg"/>
        </div>
        <div class="thumb-gallery">
            <a class="more-img">
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            </a>
            <ul class="img-gallery">
                <?php
                $gallery = $data[1];
                foreach ($gallery as $row) {
                    if ($row['3d'] == 0) {
                        ?>
                        <li>
                            <a class="product-list-img">
                                <img src="public/img/product gallery/<?= $row['idproduct'] ?>/gallery/thumbnail/<?= $row['img'] ?>"/>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul><!--img-gallery-->
        </div>
    </div><!--product-gallery-->
    <div class="product-info">
        <header>
            <div class="info-header">
                <?php
                $result = $data[0];
                ?>
                <h1>
                    <?= $result['title']; ?>
                    <?= $result['product_model']; ?>

                    <span>
										Samsung Galaxy S8 Plus SM-G955FD Dual SIM Mobile Phone
					    </span>
                </h1>

            </div>
            <div class="star">
                <div class="ratedStar" style="width: 52%;"></div>
                <div class="starText">از<span>86</span>رای</div>
            </div>
        </header>
        <div class="product-config">
            <div class="config-right">
                <div class="product-color">
                    <p>انتخاب رنگ</p>
                    <ul class="color-list">
                        <?php
                        $firstColor = 1;
                        $all_color = $result['all_color'];
                        foreach ($all_color as $color) {
                            ?>
                            <li <?php if ($firstColor == 1) {
                                echo 'class="active"';
                            } ?> data-id="<?= $color['id'] ?>">
							<span class="product-back-color " style="background-color: <?= $color['hex'] ?>;">
								<i class="fa fa-check color-check <?php if ($firstColor == 1) {
                                    echo 'activecheck';
                                } ?>" aria-hidden="true"></i>
							</span>
                                <span data-id="28" class="color-name per-text"><?= $color['title'] ?></span>
                            </li>
                            <?php
                            $firstColor = 0;
                        }
                        ?>

                    </ul>
                </div>
                <div class="guarantee">
                    <p>انتخاب گارانتی</p>
                    <div class="guarantee-list">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p>گارانتی مورد نظر را انتخاب کنید</p>
                        <i class="fa fa-angle-down down" aria-hidden="true"></i>
                        <i class="fa fa-angle-up up" aria-hidden="true"></i>
                        <ul class="subSelList" id="guarantee">
                            <?php
                            $all_guarantees = $result ['guarantee'];
                            $firstGuarantee = 1;
                            foreach ($all_guarantees as $guarantee) {
                                ?>
                                <li <?php if ($firstGuarantee == 1) {
                                    echo 'class="active"';
                                } ?> data-id="<?= $guarantee['id'] ?>">
                                    <?= $guarantee['title'] ?>
                                </li>
                                <?php
                                $firstGuarantee = 0;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="seller">
                    <p>انتخاب فروشنده</p>
                    <div class="seller-list">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p>فروشنده مورد نطر را انتخاب کنید</p>
                        <i class="fa fa-angle-down down" aria-hidden="true"></i>
                        <i class="fa fa-angle-up up" aria-hidden="true"></i>
                        <ul class="subSelList" id="seller">
                            <?php
                            $firstSeller = 1;
                            $all_seller = $result['seller'];
                            foreach ($all_seller as $seller) {
                                ?>
                                <li <?php if ($firstSeller == 1) {echo 'class="active"';} ?> data-id="<?= $seller['id'] ?>">
                                    <?= $seller['title']; ?>
                                </li>
                                <?php
                                $firstSeller = 0;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="product-price">
                    <div class="digi-bon">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <span class="bon-number">2</span>
                        <p>دیجی بن</p>
                    </div>
                    <?php
                    if ($productInfo['special'] == 1) {
                        require('DiscountPrice.php');
                    }
                    ?>
                    <div class="product-active-price">
                        <p>قیمت</p>
                        <span class="price">
                            <?php
                            if ($productInfo['special'] == 1) {
                                echo $productInfo['total_price'];
                            } else {
                                echo $productInfo['price'];
                            }
                            ?>
                        </span>
                        <h5>تومان</h5>
                    </div>
                    <div class="add-cart" onclick="addToCart(<?= $productInfo['id']; ?>)">
                        <div class="cart">
                            <i class="fa fa-cart-plus fa-flip-horizontal" aria-hidden="true"></i>
                            <span>افزودن به سبد خرید</span>
                        </div>
                        <div class="trunk-service">
                            <img src="public/img/1505548046badge.png"/>
                        </div>
                    </div>
                </div>
            </div><!--config-right-->
            <div class="config-left">
                <div class="product-detail">
                    <ul>
                        <li>
                            <span class="product-detail-title">تعداد سیم کارت :</span>
                            دو سیم کارت
                        </li>
                        <li>
                            <span class="product-detail-title">حافظه داخلی :</span>
                            64 گیگابایت
                        </li>
                        <li>
                            <span class="product-detail-title">حس گر ها :</span>
                            قطب‌نما (Compass)¡ شتاب‌سنج (Accelerometer)¡ مجاورت (Proximity)¡ فشارسنج (Barometer)¡
                            شمارنده ضربان قلب (Heart Rate)¡ سنجش اکسيژن خون (SPO2)¡ ژيروسکوپ (Gyro)¡ عنبيه چشم (Iris
                            Scanner)¡ اثرانگشت روي قاب پشتي (FingerPrint|Rear-Mounted)
                        </li>
                        <li>
                            <span class="product-detail-title">شبکه های ارتباطی :</span>
                            2G¡ 3G¡ 4G
                        </li>
                        <li>
                            <span class="product-detail-title">رزولوشن عکس :</span>
                            12.0 مگاپيکسل
                        </li>
                    </ul>
                </div>
            </div><!--config-left-->
            <div class="devider"></div>
            <div id="product-serives">
                <ul>
                    <li><a></a><i class="fa fa-truck fa-2x" aria-hidden="true"></i><span>تحویل اکسپرس</span>
                    </li>
                    <li><a></a><i class="fa fa-calendar fa-2x" aria-hidden="true"></i><span>7 روز ضمانت بازگشت</span>
                    </li>
                    <li><a></a><i class="fa fa-credit-card fa-2x" aria-hidden="true"></i><span>پرداخت در محل</span>
                    </li>
                    <li><a></a><i class="fa fa-money fa-2x" aria-hidden="true"></i><span>تضمین بهترین قیمت</span>
                    </li>
                    <li><a></a><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i><span>ضمانت اصل بودن</span>
                    </li>
                </ul>
            </div> <!--Services-->
        </div>
    </div><!--product-info-->
</section>

<style>
    .product-detail {
        direction: rtl;
        line-height: 25px;
        margin-top: 30px;
    }

    .product-detail-title {
        font-size: 13px;
        color: #555;
    }

    .product-detail ul li {
        font-size: 10px;
        color: #999;
    }

    .product-detail ul {
        list-style: inside;
    }
</style><!--product-detail-->
<style>
    .devider {

    }

    .devider::after {
        content: " ";
        width: 100%;
        display: inline-block;
        margin-top: 35px;
        border-top: 2px solid #ccc;
    }

    .trunk-service {
        width: 40%;
        display: inline-block;
        margin-right: 10px;
    }

    .trunk-service img {
        width: 100%;

    }

    .cart {
        cursor: pointer;
        display: inline-block;
        line-height: 45px;
        width: 55%;
        background-color: rgb(70, 163, 73);
        color: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    .add-cart {
        direction: rtl;
    }

    .add-cart i {
        padding: 15px;
        background-color: rgb(92, 173, 95);
        color: #fff;
    }

    .add-cart span {
        margin-right: 15px;
    }

    .price {
        color: #00B12A;
        margin-right: 15px;
        font-weight: bolder;
        font-size: 20px;
    }

    .product-active-price h5 {
        display: inline-block;
        margin-right: 15px;
        font-size: 12px;
        color: #00B12A;
        vertical-align: middle;
    }

    .product-active-price p {
        display: inline-block;
    }

    .product-active-price {
        direction: rtl;
        margin-top: 45px;
    }

    .digi-bon {
        text-align: right;
        direction: rtl;
        margin-top: 45px;
        color: #999;
        font-size: 13px;
    }

    .fa-check {
        margin-right: 10px;
    }

    .guarantee-list p, .seller-list p {
        margin-right: 10px;
    }

    .guarantee-list .down, .seller-list .down {
        float: left;
        margin: 9px 10px;
    }

    .guarantee-list .up, .seller-list .down {
        display: none;
        float: left;
        margin: 9px 10px;
    }

    .subSelList li {
        padding-right: 15px;
    }

    .subSelList li:hover {
        background-color: #FAFBFC;
    }

    .subSelList {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #eee;
        width: 100%;
        margin-top: 4px;
        border-radius: 3px;
        z-index: 2;
    }

    .guarantee i, .seller i {
        display: inline-block;
        color: #999;
    }

    .guarantee p, .seller p {
        display: inline-block;
    }

    .guarantee, .seller {
        direction: rtl;
        margin-top: 40px;
        position: relative;
    }

    .guarantee-list, .seller-list {
        cursor: pointer;
        font-size: 14px;
        width: 100%;
        background-color: #FAFBFC;
        border: 1px solid #eee;
        border-radius: 3px;
        margin-top: 15px;
        line-height: 35px;
    }

    .product-config {
        width: 100%;
    }

    .config-right {
        float: right;
        width: 55%;
    }

    .config-left {
        float: left;
        width: 31%;
    }

</style><!--product-config-->
<style>
    .product-back-color {
        border-radius: 100%;
        width: 25px;
        height: 25px;
        display: inline-block;
        text-align: center;
        position: relative;
        cursor: pointer;
    }

    .product-back-color i {
        margin: 0 auto;
        line-height: 25px;
        color: #777;
        display: none;
        position: absolute;
        left: 4px;

    }

    .color-list {
        margin-top: 15px;
        text-align: right;
    }

    .color-list li {
        direction: rtl;
        display: inline-block;
        background-color: #eee;
        padding: 1px 13px;
        border-radius: 3px;
        border: 1px solid #dfe5e8;
        margin-left: 15px;
        margin-bottom: 8px;
    }

    .color-name {
        margin-right: 10px;
        position: relative;
        top: -8px;
        color: #777;
    }

    .product-color p {
        direction: rtl;
        margin-top: 20px;
    }

    .activecheck {
        display: block !important;
    }
</style><!--product-color--->
<script>
    function addToCart($productId) {
        var sellerId = $('#seller .active').attr('data-id');
        var colorId = $('.color-list .active').attr('data-id');
        var guranteeId = $('#guarantee .active').attr('data-id');

        var url = '<?= URL ?>product/addToCart/' + $productId + '/' + sellerId + '/' + colorId + '/' + guranteeId + '';
        var data = {};
        $.post(url, data, function (msg) {
//            tab.html(msg);
        });
    }


    $('.product-back-color ').click(function () {
        $('.product-back-color ').find('i').removeClass('activecheck');
        $(this).find('i').addClass('activecheck');
    });


</script><!--product-color--->
<style>
    #productDetail {
        width: 1190px;
        margin: 0 auto;
        background-color: #fff;
    }

    #productDetail::after {
        content: " ";
        display: block;
        clear: both;
    }

    .product-gallery {
        float: right;
        width: 430px;
    }

    .product-toolbar {
        width: 100%;
        line-height: 90px;
        vertical-align: middle;
    }

    .product-toolbar ul li {
        display: inline-block;
        color: #999;
        margin-right: 15px;
    }

    .product-img {
        width: 100%;
        text-align: center;
        padding: 20px 0;
    }

    .product-img img {
        width: 350px;
        height: 350px;
    }

    .thumb-gallery {
        width: 100%;
        margin-bottom: 40px;
    }

    .thumb-gallery::after {
        content: " ";
        display: block;
        clear: both;
    }

    .img-gallery {
        width: 265px;
        height: 75px;
        overflow: hidden;
    }

    .product-list-img {
        display: block;
        width: 75px;
        height: 68px;
        cursor: pointer;
        float: left;
        text-align: center;
        border: 1px solid #e5e5e5;
        margin: 0 5px 10px;
    }

    .product-list-img img {
        margin-top: 8px;
        width: 50px;
        height: 50px;
    }

    .more-img {
        margin-right: 10px;
        float: right;
        width: 75px;
        height: 68px;
        display: block;
        cursor: pointer;
        border: 1px solid #e5e5e5;
        text-align: center;
        line-height: 68px;
    }

    .product-info {
        float: left;
        width: 720px;
        margin: 15px;
    }

    .product-info header {
        background-color: #F5F6F7;
        border-radius: 4px;
    }

    .product-info header::after {
        content: " ";
        display: block;
        clear: both;
    }

    .info-header {
        float: right;
        text-align: right;
        direction: rtl;
        width: 510px;
        margin: 10px 20px;

    }

    .info-header h1 {
        font-size: 20px;
        line-height: 30px;
    }

    .info-header h1 span {
        font-size: 12px !important;
        display: block;
    }

    .star {
        width: 100px;
        height: 14px;
        float: left;
        margin: 17px 20px 0;
        text-align: center;
        background: url(public/img/stars.png) repeat-x scroll 0 -14px;
    }

    .ratedStar {
        height: 14px;
        background: url(public/img/stars.png) repeat-x scroll 0 0;
    }

    .starText {
        text-align: right;
        font-size: 13px;
        margin-top: 12px;
    }

    .starText span {
        margin: 0 3px;
    }
</style><!----productDetail----->
<style>
    #slider-vr {
        width: 890px;
        height: 380px;
        position: relative;
    }

    #slider-vr-img {
        width: 700px;
        height: 100%;
        float: right;
    }

    #slider-vr-title {
        width: 190px;
        height: 100%;
    }

    #product-serives {
        width: 838px;
        height: 80px;
        position: relative;
        left: -48px;
    }

    #product-serives li {
        width: 18%;
        height: 80px;
        display: inline-block;
    }

    #product-serives li i {
        float: right;
        line-height: 80px;
        color: #9F9F9F;
    }

    #product-serives li span {
        font-size: 11px;
        line-height: 80px;
        direction: rtl;
        float: right;
        margin-right: 10px;
    }
</style><!--Services-->
