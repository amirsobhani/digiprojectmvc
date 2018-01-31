<style>
    .continue-cart {
        width: 100%;
        background: #fff;
    }

    .continue-cart::after {
        content: "";
        display: block;
        clear: both;
    }

    .continue-cart .right {
        display: inline-block;
        float: right;

    }

    .continue-cart .left {
        display: inline-block;
        direction: rtl;
        background: #4CAF50;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
        cursor: pointer;
    }

    .continue-cart .right p {
        font-size: 11px;
        margin: 20px 0;
        direction: rtl;
    }

    .continue-cart .right h2 {
        direction: rtl;
        margin: 30px 0 5px;
    }

    .continue-cart .right h2 i {
        margin-left: 7px;
        color: #2196F3;
    }

    .cart-wrappper {
        margin: 0 10px;
    }

    #cart-div {
        background: #fff;
        margin-bottom: 15px;
    }

    .go-main {
        display: inline-block;
        direction: rtl;
        background-color: #969ba8 !important;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
    }

    .reserv-alert {
        direction: rtl;
        font-size: 13px;
        color: red;
        display: inline-block;
        position: relative;
        top: -70px;
        right: -10px;
    }
</style><!--continue-cart--->
<style>
    .cart-table {
        width: 100%;
        margin-bottom: 30px;
    }

    .cart-table table {
        width: 100%;
        direction: rtl;
    }

    .cart-table table tr td {
        text-align: center;
        vertical-align: middle;
        border: 1px solid #eee;
    }

    .cart-table table tr td:first-child {
        text-align: right !important;
    }

    .cart-table table thead {
        line-height: 22px;
        background: #F7F9FA;
        text-align: center;
        font-size: 13px;
    }

    .cart-table table thead tr td {
        border: 1px solid #eee;
        padding: 10px 0;
    }

    .cart-table table thead tr td:first-child {
        text-align: center !important;
    }

    .cart-table table thead tr td:last-child {
        border-right: none;
    }

    .cart-table table thead tr td:nth-child(5) {
        border-left: none;
    }

    .product-table-img {
        display: inline-block;
        float: right;
    }

    .product-table-img img {
        width: 100px;
        margin: 30px 10px;
    }

    .product-table-meta {
        display: inline-block;
        float: right;
        margin: 30px 5px;
    }

    .product-table-meta h2 {
        font-size: 13px;
        width: 300px;
        line-height: 30px;
        font-weight: 800;
    }

    .product-table-meta h3 {
        font-size: 10px;
        line-height: 30px;
        font-weight: 800;
    }

    .product-table-color p {
        display: inline-block;
        font-size: 11px;
        line-height: 30px;
    }

    .product-table-color .color {
        width: 18px;
        height: 18px;
        display: inline-block;
        border-radius: 100%;
        position: relative;
        top: 5px;
        border: 1px solid #999;
    }

    .product-table-color span:last-child, .warranty {
        font-size: 12px;
        color: #777;
    }

    .cart-table .delete {
        border-left: 0;
        background: #ffedee;
        border-right: 0;
        color: #ed4848;
        width: 30px;
        cursor: pointer;
    }

    .unitprice {
        width: 25%;
    }

    .seperate {
        margin: 14px 0;
        border-bottom: 1px dashed #e9e9e9;
        height: 1px;
        margin-left: 15px;
    }

    .unitprice-discoount tr {
        line-height: 30px;
    }

    .unitprice-discoount tr td {
        border: none !important;
        padding-right: 15px;
        font-size: 13px;
    }

    .unitprice-discoount tr:last-child td {
        color: #00B12A;
        font-size: 21px;
    }

    .red {
        color: #ff6b6b;
    }

    .cart-table tr.gift td.last span {
        color: #ff6b6b;
        font-size: 19px;
        display: inline-block;
        margin-top: -12px;
        position: absolute;
        right: -7px;
        top: 50%;
        transform: rotate(-90deg);
        font-weight: 800;
    }

    .cart-table tr.gift td.last {
        position: relative;
    }
</style><!---cart-table--->
<style>
    .complete-price {
        width: 590px;
        border: 1px solid #c0f0c1;
        margin-bottom: 30px;
    }

    .complete-price::after {
        content: "";
        display: block;
        clear: both;
    }

    .price {
        height: 55px;
        line-height: 55px;
        padding: 0 40px 0 0;
        border-bottom: 1px solid #c0f0c1;
    }

    .discount {
        display: inline-block;
        text-align: center;
        float: right;
        min-width: 200px;
        font-size: 13px;
        padding: 5px;
        line-height: 20px;
        position: relative;
        top: 7px;
        direction: rtl;
    }

    .discount::after {
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 9px 0 10px 8px;
        border-color: transparent transparent transparent #fff;
        position: absolute;
        left: 5px;
        top: 11px;
    }

    .discount span:first-child {
        background: #FF7272;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }

    .discount span:last-child {
        background: #FF5252;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }

    #discount {
        background: #FF5252;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }

    .lable {
        display: inline-block;
        direction: rtl;
        color: #818181;
        font-size: 14px;
        width: auto;
        margin-left: 20px;
    }

    .lable-price {
        display: inline-block;
        float: left;
        direction: rtl;
        font-size: 20px;
    }

    .toman {
        font-size: 12px;
        margin: 0 15px;
        float: left;
    }

    .pay-price {
        height: 55px;
        line-height: 55px;
        width: 100%;
        float: left;
        background-color: #F7FFF7;
    }

    .green {
        color: #4caf50 !important;
    }

    .fa-refresh {
        margin: 100px auto;
        display: block;
        color: #777;
    }
</style><!---complete-price-->

<div id="main">
    <?php
    $cart = $data['cart'];
    $cartPrice = $data['cartPrice'];
    $cartDiscount = $data['cartDiscount'];
    ?>
    <div id="content">
        <?php require('Breadcrumb.php'); ?>
        <div id="cart-div" class="dk-box">
            <div class="cart-wrappper">
                <div class="continue-cart">
                    <div class="right">
                        <h2><i class="fa fa-caret-left" aria-hidden="true"></i>سبد خرید شما در دیجی‌کالا</h2>
                        <p>افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست. برای ثبت سفارش باید مراحل بعدی
                            خرید را تکمیل نمایید.</p>
                    </div>
                    <a class="left dk-box" href="user">
						<span>
							ادامه ثبت سفارش
						</span>
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    </a>
                </div><!--continue-cart--->
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <td>شرح محصول</td>
                            <td>فروشنده</td>
                            <td>تعداد</td>
                            <td>قیمت واحد</td>
                            <td>قیمت کل</td>
                            <td></td>
                        </tr>
                        </thead>
                        <?php
                        foreach ($cart as $row) {
                            ?>
                            <tr>
                                <td>
                                    <div class="product-table">
                                        <div class="product-table-img">
                                            <img src="public/img/product gallery/<?= $row ['id'] ?>/product220.jpg">
                                        </div>
                                        <div class="product-table-meta">
                                            <h2>
                                                <?= $row['title'] ?>  <?= $row['product_model'] ?>
                                            </h2>
                                            <h3>
                                                <?= $row['en_title'] ?>
                                            </h3>
                                            <div class="product-table-color">
                                                <p>رنگ : <?= $row['colorTitle'] ?></p>
                                                <span class="color" style="background: <?= $row['hex'] ?>"></span>
                                                <span><?php
                                                    ?></span>
                                            </div>
                                            <p class="warranty">
                                                گارانتی : <?= $row['guaranteeTitle'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td> دیجی کالا</td>
                                <td>
                                    <div class="number-select">
                                        <select>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {
                                                ?>
                                                <option onclick="refCart(<?= $i ?>,<?= $row ['cartId'] ?>)"
                                                        value="<?= $i ?>"
                                                    <?php
                                                    if ($i == $row['count']) {
                                                        ?>
                                                        selected
                                                        <?php
                                                    }
                                                    ?>
                                                ><?= $i ?></>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <?= number_format($row['price'], 0, '/', ',') ?>
                                    <span class="toman">
									تومان
								</span>
                                </td>
                                <td class="unitprice">
                                    <?= number_format($row['count'] * $row['price'], 0, '/', ',') ?>
                                    <span class="toman">
									تومان
								</span>
                                </td>
                                <td class="delete" onclick="removeProductCart(<?= $row['cartId'] ?>)">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <!--                        <tr>-->
                        <!--                            <td>-->
                        <!--                                <div class="product-table">-->
                        <!--                                    <div class="product-table-img">-->
                        <!--                                        <img src="public/img/scroll%20slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg">-->
                        <!--                                    </div>-->
                        <!--                                    <div class="product-table-meta">-->
                        <!--                                        <h2>-->
                        <!--                                            گوشی موبایل سامسونگ مدل Galaxy S8 G950FD دو سیم کارت-->
                        <!--                                        </h2>-->
                        <!--                                        <h3>-->
                        <!--                                            Samsung Galaxy S8 G950FD Dual SIM Mobile Phone-->
                        <!--                                        </h3>-->
                        <!--                                        <div class="product-table-color">-->
                        <!--                                            <p>رنگ :</p>-->
                        <!--                                            <span class="color" style="background: #ADD8E6"></span>-->
                        <!--                                            <span>آبی روشن</span>-->
                        <!--                                        </div>-->
                        <!--                                        <p class="warranty">-->
                        <!--                                            گارانتی : 18ماه گارانتی مایکروتل-->
                        <!--                                        </p>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </td>-->
                        <!--                            <td> دیجی کالا</td>-->
                        <!--                            <td>-->
                        <!--                                <div class="number-select">-->
                        <!--                                    <select>-->
                        <!--                                        <option selected="selected" value="1">1</option>-->
                        <!--                                        <option value="2">2</option>-->
                        <!--                                        <option value="3">3</option>-->
                        <!--                                        <option value="4">4</option>-->
                        <!--                                        <option value="5">5</option>-->
                        <!--                                        <option value="6">6</option>-->
                        <!--                                        <option value="7">7</option>-->
                        <!--                                        <option value="8">8</option>-->
                        <!--                                        <option value="9">9</option>-->
                        <!--                                        <option value="10">10</option>-->
                        <!--                                    </select>-->
                        <!--                                </div>-->
                        <!--                            </td>-->
                        <!--                            <td>-->
                        <!--                                2,599,000-->
                        <!--                                <span class="toman">-->
                        <!--									تومان-->
                        <!--								</span>-->
                        <!--                            </td>-->
                        <!--                            <td class="unitprice">-->
                        <!--                                2,599,000-->
                        <!--                                <span class="toman">-->
                        <!--									تومان-->
                        <!--								</span>-->
                        <!--                            </td>-->
                        <!--                            <td class="delete">-->
                        <!--                                <i class="fa fa-close" aria-hidden="true"></i>-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                        <!--                        <tr class="gift">-->
                        <!--                            <td>-->
                        <!--                                <div class="product-table">-->
                        <!--                                    <div class="product-table-img">-->
                        <!--                                        <img src="public/img/mci-internet-gift-card---1gb-797044.jpg">-->
                        <!--                                    </div>-->
                        <!--                                    <div class="product-table-meta">-->
                        <!--                                        <h2>-->
                        <!--                                            کارت هدیه اینترنت همراه اول حجم 1 گیگابایت-->
                        <!--                                        </h2>-->
                        <!--                                        <h3>-->
                        <!--                                            MCI Internet Gift Card - 1GB-->
                        <!--                                        </h3>-->
                        <!--                                        <div class="product-table-color">-->
                        <!--                                            <p>رنگ :</p>-->
                        <!--                                            <span class="color" style="background: blue"></span>-->
                        <!--                                            <span>آبی</span>-->
                        <!--                                        </div>-->
                        <!--                                        <p class="warranty">-->
                        <!--                                            گارانتی : سرویس ویژه دیجی کالا ۷ روز تضمین تعویض کالا-->
                        <!--                                        </p>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </td>-->
                        <!--                            <td> دیجی کالا</td>-->
                        <!--                            <td>-->
                        <!--                                <div class="number-select">-->
                        <!--                                    <select>-->
                        <!--                                        <option selected="selected" value="1">1</option>-->
                        <!--                                    </select>-->
                        <!--                                </div>-->
                        <!--                            </td>-->
                        <!--                            <td>-->
                        <!--                                10,000-->
                        <!--                                <span class="toman">-->
                        <!--									تومان-->
                        <!--								</span>-->
                        <!--                            </td>-->
                        <!--                            <td class="unitprice">-->
                        <!--                                <div>-->
                        <!--                                    <table class="unitprice-discoount">-->
                        <!--                                        <tr>-->
                        <!--                                            <td>قیمت کل :</td>-->
                        <!--                                            <td>-->
                        <!--                                                10,000-->
                        <!--                                                <span class="toman">تومان</span>-->
                        <!--                                            </td>-->
                        <!--                                        </tr>-->
                        <!--                                        <tr>-->
                        <!--                                            <td class="red">(-) تخفیف هدیه :</td>-->
                        <!--                                            <td class="red">-->
                        <!--                                                10,000-->
                        <!--                                                <span class="toman">تومان</span>-->
                        <!--                                            </td>-->
                        <!--                                        </tr>-->
                        <!--                                        <tr>-->
                        <!--                                            <td colspan="2">-->
                        <!--                                                <div class="seperate"></div>-->
                        <!--                                            </td>-->
                        <!--                                        </tr>-->
                        <!--                                        <tr>-->
                        <!--                                            <td colspan="2" style="text-align: center !important;">رایگان</td>-->
                        <!--                                        </tr>-->
                        <!--                                    </table>-->
                        <!--                                </div>-->
                        <!--                            </td>-->
                        <!--                            <td class="last">-->
                        <!--								<span>-->
                        <!--									هدیه-->
                        <!--								</span>-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                    </table>
                </div>
                <div class="complete-price">
                    <div class="price">
                        <div class="discount">
                            <span>مجموع تخفیف</span>
                            <span id="discount"><?= number_format($cartDiscount, 0, '/', ',') ?> </span>
                            <span>تـومان</span>
                        </div>
                        <span class="lable">جمع کل خرید شما :</span>
                        <span class="toman">تومان</span>
                        <span class="lable-price" id="totalPrice">
      <?= number_format($cartPrice, 0, '/', ',') ?>
    </span>
                    </div>
                    <div class="pay-price">
                        <span class="lable green">مبلغ قابل پرداخت :</span>
                        <span class="toman green">تومان</span>
                        <span class="lable-price green" id="finalPrice">
                            <?= number_format($cartPrice - $cartDiscount, 0, '/', ',') ?>

    </span>
                    </div>
                </div>
                <div class="continue-cart">
                    <div class="right go-main dk-box">
                        <a href="<?= URL ?>">
                            <span style="color: #fff">
							بازگشت به  صفحه اصلی
						    </span>
                        </a>
                    </div>
                    <a class="left dk-box" href="user">
						<span>
							ادامه ثبت سفارش
						</span>
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    </a>
                    <div class="reserv-alert">
                        <p>کالاهای موجود در سبد شما ثبت و رزرو نشده اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید >></p>
                    </div>
                </div><!--continue-cart--->
            </div>
        </div>
        <?php require('LikeProduct.php'); ?>
    </div><!---Content--->
</div>
<script>
    function removeProductCart($idproduct) {
        var url = 'cart/deleteProductCart/' + $idproduct;
        var data = {};
        var refresh = '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>';
        var cartTable = $('.cart-table table tbody');

        $.post(url, data, function (msg) {
            cartTable.html(refresh);
            Cart(msg);
            cartTable.find('.fa-refresh').remove();
        }, 'json')
    }

    function refCart(value, id) {
        var url = 'cart/refCart/';
        var data = {'value': value, 'id': id};
        var refresh = '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>';
        var cartTable = $('.cart-table table tbody');

        $.post(url, data, function (msg) {
            cartTable.html(refresh);
            Cart(msg);
            cartTable.find('.fa-refresh').remove();
        }, 'json')
    }

    function Cart(msg) {

        var cartInfo = msg[0];
        var cartPrice = msg[1];
        var cartDiscount = msg[2];

        $.each(cartInfo, function (index, value) {
            var str = '';
            var i = 1;
            var selected = '';
            var count = value['count'];
            var guarantee = value['guaranteeTitle'];
            var color = value['colorTitle'];
            var hex = value['hex'];
            var seller = value['sellerTitle'];
            for (i; i <= 10; i++) {
                if (i == count) {
                    selected = 'selected';
                } else {
                    selected = '';
                }
                str = str + "<option onclick='refCart(" + i + ", " + value['cartId'] + ")' value=" + i + " " + selected + ">" + i + "</option>";
            }

            var trTag = '<tr><td><div class="product-table"><div class="product-table-img"><img src="public/img/product gallery/' + value['id'] + '/product220.jpg"></div><div class="product-table-meta"><h2>' + value['title'] + '  ' + value['product_model'] + '</h2><h3>' + value['en_title'] + '</h3><div class="product-table-color"><p> رنگ :  ' + color + ' </p><span class="color" style="background: ' + hex + '"></span><span></span></div><p class="warranty">گارانتی : ' + guarantee + '</p></div></div></td><td> دیجی کالا</td><td><div class="number-select"><select>' + str + '</select></div></td><td class="price-example">' + value['price'] + '<span class="toman">تومان</span></td><td class="unitprice">' + value['count'] * value['price'] + '<span class="toman">تومان</span></td><td class="delete" onclick="removeProductCart(' + value['cartId'] + ')"><i class="fa fa-close" aria-hidden="true"></i></td></tr>';
            $('.cart-table table tbody').append(trTag);


            finalPrice = cartPrice - cartDiscount;

            $('#finalPrice').html(finalPrice);

            $('#totalPrice').html(cartPrice);

            $('#discount').html(cartDiscount);

        });

    }
</script>