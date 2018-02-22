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
        display: inline-block;
    }

    .scroll-slider h3:first-child {
        float: right;
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

    .scroll-slider div:first-child {
        background-color: #f7f9fa;
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
    #ShippingType {
        padding: 0 10px 10px 10px;
        background: #fff;
        margin: 15px 0;
    }

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

    .product-pack {
        margin: 15px 0;
    }

    .shipping-notice {
        background-color: #fff;
        direction: rtl;
        padding: 10px;
        background: url("public/img/express_delivery_dk_48_icon.png") no-repeat 1125px 0 #fff;
    }

    .shipping-notice span {
        margin-right: 45px;
        font-size: 12px;
    }

    .payment-price {
        background: #f7fff7;
        padding: 10px;
        border: 1px solid #f0f1f2;
        border-radius: 3px;
    }

    .payment-price h3:first-child {
        float: right;
    }

    .payment-price h3:last-child {
        display: inline-block;
        direction: rtl;
        color: green;
    }

    .coupon {
        margin: 25px 8px;
        direction: rtl;
        font-size: 13px;
    }

    .coupon p {
        display: inline-block;
    }

    .coupon span {
        width: 110px;
        display: inline-block;
        line-height: 30px;
        margin: 18px 0 40px 0;
        font-family: iran-sans;
        background-color: #208DE6;
        border: 1px solid #ebeced;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        text-align: center;
    }

    .coupon input {
        height: 22px;
        vertical-align: middle;
        margin: 0 15px;
    }
</style><!---ShippingType--->
<?php
$cart = $data ['cart'];
$cartPrice = $data ['cartPrice'];
$cartDiscount = $data ['cartDiscount'];
$cartFinalPrice = $cartPrice - $cartDiscount;
$postInfo = $data['postInfo'];
?>
<form id="order" action="payment/setOrder" method="post">
    <div id="ShippingType">
        <div class="product-pack">
            <div class="shipment-selection">
                <i class="fa fa-caret-left" aria-hidden="true"></i>
                <h2>
                    لیست مرسوله‌ها
                </h2>
            </div>
            <div class="scroll-slider">
                <div>
                    <h3>هزینه ارسال :</h3>
                    <h3><?= $postInfo['price'] ?> تومان</h3>
                </div>
                <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x"
                                                                           aria-hidden="true"></i></div>
                <div class="scroll-main">
                    <ul>
                        <?php
                        foreach ($cart as $row) {
                            ?>
                            <li>
                                <a class="scroll-product">
                                    <img src="public/img/product gallery/<?= $row['id'] ?>/product220.jpg">
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
            <div class="shipping-notice">
            <span>این مرسوله توسط دیجی کالا و از طریق تحویل
                <b style="color: #0d32ed"><?= $postInfo['post_type'] ?></b>
 به شما تحویل داده خواهد شد.
 <b style="color: #0d32ed"><?= $postInfo['introduction'] ?></b>
            </span>
            </div>
            <div class="coupon">
                <p>در صورت داشتن کد تخفیف آن را وارد کنید</p>
                <input name="coupon">
                <span onclick="coupon()">اعمال کد تخفیف</span>
            </div>
            <div class="payment-price">
                <h3>جمع کل قابل پرداخت</h3>
                <h3><span class="finalPay"><?= $cartFinalPrice + $postInfo['price'] ?></span> تومان</h3>
            </div>
        </div>
    </div>
    <?php
//    $cart = serialize($cart);
    $postInfo = serialize($postInfo);

    ?>
    <input hidden name="cartPrice" value="<?= $cartPrice ?>">
    <input hidden name="cartDiscount" value="<?= $cartDiscount ?>">
    <input hidden name="postInfo" value="<?= $postInfo ?>">
    <textarea  name="cartInfo"><?= $cart ?></textarea>
</form>
<script>
    function setOrder() {
        $('#order').submit();
    }


    function coupon() {
        var code = $('input[name="coupon"]').val();
        var url = 'payment/coupon';
        var data = {'coupon': code};
        $.post(url, data, function (msg) {
            console.log(msg);
            $('.finalPay').text(msg);
        }, 'json')
    }

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