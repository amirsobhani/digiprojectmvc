<style>
    .scroll-slider {
        width: 100%;
        height: 310px;
        background-color: #fff;
        overflow: hidden;
        position: relative;
    }

    .scroll-slider h3 {
        direction: rtl;
        line-height: 35px;
        padding: 0 13px;
        font-family: iran-sans;
        font-size: 13px;
    }

    .scroll-next {
        width: 50px;
        height: 275px;
        float: right;
    }

    .scroll-prev {
        width: 50px;
        height: 275px;
        float: left;
        position: absolute;
        top: 35px;
        left: 0;
        background-color: #fff;
        box-shadow: 0px 15px 15px #888888;
    }

    .scroll-slider i {
        text-align: center;
        display: block;
        line-height: 275px;
        color: #B8B8B8B8;
        background-color: #fff;
        cursor: pointer;
    }

    .scroll-main {
        height: 90%;
        overflow: hidden;
        margin-right: 50px;
    }

    .scroll-main ul {
        height: 100%;
        width: 1160px;
        float: right;
        overflow: hidden;
    }

    .scroll-main ul li {
        width: 250px;
        height: 100%;
        float: right;
        padding: 0px 20px;
        position: relative;
        text-align: center;
    }

    .scroll-product {
        text-align: center;
        display: inline-block;
        height: 90%;
        padding-top: 25px;
        margin: 0 auto;
    }

    .scroll-product img {
        margin: 30px auto;
        max-width: 150px;
        float: right;
        display: block;
    }

    .scroll-product .product-meta {
        direction: rtl;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 20px;
        width: 40%;
        display: block;
        text-align: center;
        padding: 20px 0;
        color: #153574;
    }

    .scroll-product .product-price {
        line-height: 25px;
        text-align: center;
        font-family: iran-sans;
        font-size: 13px;
        direction: rtl;
        width: 40%;
    }

    .product-price-old {
        background-color: #ccc;
        width: 100%;
        display: block;
        text-decoration-line: line-through;
        margin: 5px 0;
    }

    .product-price-old {
        background-color: #a6d45b;
        width: 100%;
        display: block;
    }
</style><!--Scroll Slider-->
<style>
    #ShippingType .head {
        line-height: 22px;
        padding: 5px 0;
        margin: 10px 0;
    }

    #ShippingType .head i, .shipment-selection i {
        float: right;
        margin-left: 10px;
        color: #2396f3;
    }

    #ShippingType .head h2, .shipment-selection h2 {
        direction: rtl;
    }

    .shipment-selection {
        background-color: #fff;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        line-height: 22px;
    }

    .sel-post {
        float: right;
        border-left: 1px solid #c0f0c1;
        height: 50px;
        margin-left: 10px;
        line-height: 50px;
        text-align: center;
        font-size: 14px;
    }

    .sel-post input {
        cursor: pointer;
        position: relative;
        right: -15px;
        top: 2px;
        opacity: 0;
        z-index: 2;
    }

    .sel-post label {
        width: 14px;
        height: 14px;
        display: inline-block;
        transition: none;
        position: relative;
        border-radius: 100%;
        right: 7px;
        top: 4px;
        background: #fff;
        border: 1px solid #ccc;
    }
</style><!---ShippingType--->
<?php
$post = $data['post'];
$cart = $data['cart'];
?>

<div id="ShippingType">
    <div class="head">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
        <h2>
            انتخاب شیوه ارسال
        </h2>
    </div>
    <div class="product-pack">
        <div class="shipment-selection">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
            <h2>
                لیست مرسوله‌ها
            </h2>
        </div>
        <div class="scroll-slider">
            <h3>محصولاتی که در این مرسوله ارسال می‌شوند: </h3>
            <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x"
                                                                       aria-hidden="true"></i></div>
            <div class="scroll-main">
                <ul>
                    <?php
                    foreach ($cart as $row) {
                        ?>
                        <li>
                            <a class="scroll-product">
                                <img src="public/img/product gallery/<?= $row['idproduct'] ?>/product220.jpg">
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x"
                                                                        aria-hidden="true"></i></div>
        </div><!--Scroll Slider-->
        <div class="wrapper-shipping">
            <?php
            $first = 1;
            foreach ($post as $row) {
                ?>
                <div class="shipping">
                    <div class="right">
                        <div class="sel-post">
                            <input data-post="<?= $row['id'] ?>" type="radio" <?php if ($first == 1) {
                                echo 'checked';
                            } ?> name="post">
                            <label class="<?php if ($first == 1) {
                                echo 'checked';
                            } ?>"></label>
                        </div>
                        <div class="ship-img">
                            <img src="<?= $row['img'] ?>"/>
                        </div>
                        <div class="ship-title">
                            <h2><?= $row['post_type'] ?></h2>
                            <p>
                                <?= $row['introduction'] ?>
                            </p>
                        </div>

                    </div>
                    <div class="left">
                        <p>
                            هزینه ارسال
                        </p>
                        <span class="ship-price">
<?= $row['price'] ?>
                        </span>
                    </div>
                </div>
                <?php $first = 0;
            } ?>
        </div>
        <div class="next-shipment">
					<span class="next-shipment-btn">
						تایید و ثبت مرسوله
					</span>
        </div>
        <div class="factor-pack">
            <i class="fa fa-caret-left"></i>
            <p>
                آیا مایل هستید به همراه این سفارش فاکتور (فقط اقلام عرضه شده توسط دیجی کالا) ارسال شود؟
            </p>
            <form>
						<span class="factor-pack-radio">
							<input type="radio" checked name="factor-pack" value="no" autocomplete="on"
                                   onclick="factorY(this)">خیر
						</span>
                <span class="factor-pack-radio">
							<input type="radio" name="factor-pack" value="yes" autocomplete="off"
                                   onclick="factorN(this)">آره
						</span>
            </form>
        </div>
        <div class="factor-message-green">
            <i class="fa fa-tree" aria-hidden="true"></i>
            <p>
                از شما سپاسگزاریم که با عدم دریافت فاکتور کاغذی به سبز ماندن زمین کمک می کنید.
            </p>
        </div>
        <div class="factor-message-brown">
            <i class="fa fa-tree" aria-hidden="true"></i>
            <p>
                بیاییم با عدم دریافت فاکتور کاغذی به سبز ماندن زمین کمک کنیم.
            </p>
        </div>
    </div>
</div>
<script>
    sessionPost();

    $('.sel-post input').click(function () {
        sessionPost();
    });

    function sessionPost() {
        var dataPost = $('.sel-post').find('input:checked').attr('data-post');
        var url = 'shipping/sessionPost' + dataPost;
        var data = {};
        $.post(url, data, function (msg) {
//            console.log(msg);
        })
    }
</script>
<script>
    function scroll(direction, tag) {

        var slideTag = $(tag);
        var sliderScrollUl = slideTag.parent('.scroll-slider').find('ul');
        var liLength = sliderScrollUl.find('li').length;
        var liWidth = parseInt(sliderScrollUl.find('li').outerWidth());
        var ulWidthSize = (liLength) * (liWidth);
        var maxMargin = (liLength - 4) * liWidth;
        var marginRight = parseFloat(sliderScrollUl.css('margin-right'));
        sliderScrollUl.css("width", ulWidthSize);
        if (maxMargin == 0 || maxMargin < 0) {
            maxMargin = 0;
        }
        if (direction == 'left') {
            marginRight = marginRight - liWidth;
            if ((-marginRight) > maxMargin) {
                marginRight = (-maxMargin) - 80;
            }
        }
        if (direction == 'right') {
            marginRight = marginRight + liWidth;
            if (marginRight > 0) {
                marginRight = 0;
            }
        }
        sliderScrollUl.animate({'marginRight': marginRight}, 1000);
    }

    $('.scroll-next').click(function () {
        scroll('left', this);
    });
    $('.scroll-prev').click(function () {
        scroll('right', this);
    });


</script><!--Scroll Slider-->