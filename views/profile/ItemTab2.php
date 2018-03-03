<?php
$orderInfo = $data['orderInfo'];
?>
<div class="item-tab">
    <?php
    $i = 1;
    foreach ($orderInfo as $row) {
        ?>
        <table class="order">
            <thead>
            <tr>
                <td>ردیف</td>
                <td>کد</td>
                <td>تاریخ</td>
                <td>مبلغ کل</td>
                <td>وضعیت</td>
                <td>عملیات پرداخت</td>
                <td>نوع</td>
                <td>جزئیات</td>
            </tr>
            </thead>
            <tr>
                <td><?= $i ?></td>
                <td>DKC-<?= $row['id'] ?></td>
                <td>1395/11/5<br>19:42</td>
                <td><?= number_format($row['cart_price']) ?></td>
                <td class="pr-send">تحویل شده</td>
                <td class="button">
                    <a>
                        <span>پرداخت</span>
                    </a>
                </td>
                <td>سفارش</td>
                <td class="more-order-detail"><i class="fa fa-angle-down fa-3x"></i></td>
            </tr>
            <tr style="display: none;">
                <td colspan="8">
                    <div class="sub-order">
                        <h3 class="order-number">
                            مرسوله 1 از 1
                        </h3>
                        <table>
                            <thead>
                            <tr>
                                <td>کالا</td>
                                <td>تعداد</td>
                                <td>قیمت واحد</td>
                                <td>قیمت کل</td>
                                <td>تخفیف کل</td>
                                <td>مبلغ کل</td>
                            </tr>
                            </thead>
                            <?php
                            $cart = unserialize($row['cart']);
                            foreach ($cart as $cartItem) {
                                $total = ($cartItem['count'] * $cartItem['price']);
                                $discount = ($total*$cartItem['discount'])/100;
                                $totalPrice = $total - $discount;
                                ?>
                                <tr>
                                    <td>
                                        <a><?= $cartItem['title'] ?> <?= $cartItem['product_model'] ?></a><br>
                                        <?= $cartItem['colorTitle'] ?> | گارانتی <?= $cartItem['guaranteeTitle'] ?>
                                    </td>
                                    <td><?= $cartItem['count'] ?> عدد</td>
                                    <td><?= $cartItem['price'] ?></td>
                                    <td><?= $cartItem['count'] * $cartItem['price'] ?></td>
                                    <td><?= $discount ?></td>
                                    <td><?= $totalPrice ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                        <table class="order-track">
                            <thead>
                            <tr>
                                <td>رهگیری سفارش</td>
                            </tr>
                            </thead>
                            <tr>
                                <td>
                                    <div class="order-route">
                                        <div class="dashed approved">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <ul>
                                            <li class="<?php if ($row['status'] >= 1 ){echo 'approved';} ?>">
                                                <i class="fa fa-check"></i>
                                                <span class="state-circle"></span>
                                                <span class="state-title">
																		ثبت سفارش
																	</span>
                                            </li>
                                            <li class="<?php if ($row['status'] >= 2 ){echo 'approved';} ?>">
                                                <i class="fa fa-check"></i>
                                                <span class="state-circle"></span>
                                                <span class="state-title">
																		تایید سفارش
																	</span>
                                            </li>
                                            <li class="<?php if ($row['status'] >= 3 ){echo 'approved';} ?>">
                                                <i class="fa fa-check"></i>
                                                <span class="state-circle"></span>
                                                <span class="state-title">
																		ارسال سفارش به انبار
																	</span>
                                            </li>
                                            <li class="<?php if ($row['status'] >= 4 ){echo 'approved';} ?>">
                                                <i class="fa fa-check"></i>
                                                <span class="state-circle"></span>
                                                <span class="state-title">
																		تایید سفارش در انبار
																	</span>
                                            </li>
                                            <li class="<?php if ($row['status'] >= 5 ){echo 'approved';} ?>">
                                                <i class="fa fa-check"></i>
                                                <span class="state-circle"></span>
                                                <span class="state-title">
																		ارسال مرسوله
																	</span>
                                            </li>
                                        </ul>
                                        <div class="dashed">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <thead>
                            <tr>
                                <td>وضعیت ارسال سفارش</td>
                            </tr>
                            </thead>
                            <tr>
                                <td>
                                    <table class="tracking-order-table">
                                        <tr>
                                            <td>روش ارسال: تحویل اکسپرس دیجی‌کالا</td>
                                            <td>زمان ارسال :</td>
                                            <td>کد مرسوله:444</td>
                                        </tr>
                                        <tr>
                                            <td>آدرس تحویل : قم.خیابان صدوقی.خیابان یاسمن.پلاک120</td>
                                            <td>تحویل گیرنده : امیرحسین سبحانی</td>
                                            <td>شماره تماس: 32104 - 09198508964</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <?php
        $i++;
    }
    ?>
</div><!--item-tab 2-->
<!--<script>-->
<!--    $('.myOrder').click(function () {-->
<!--        var refresh = '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>';-->
<!--        var orderTable = $('.item-tab').eq(1).find('.order');-->
<!--        var url = 'profile/getOrders';-->
<!--        var data = {};-->
<!--        $.post(url, data, function (msg) {-->
<!--            orderTable.remove();-->
<!--            orderTable.html(refresh);-->
<!--            message(msg);-->
<!--        }, 'json');-->
<!--    });-->
<!---->
<!--    function message(msg) {-->
<!--        var i = 1;-->
<!--        $.each(msg, function (index, value) {-->
<!--            var cart = value['cart'];-->
<!--            cart =-->
<!--            var price = value['cart_price'];-->
<!--            var discount = value['cart_discount'];-->
<!--            var postPrice = value['post_price'];-->
<!--            var count = value['count'];-->
<!--            var messageTable = '<table class="order"><thead><tr><td>ردیف</td><td>کد</td><td>تاریخ</td><td>مبلغ کل</td><td>وضعیت</td><td>عملیات پرداخت</td><td>نوع</td><td>جزئیات</td></tr></thead><tr><td>'+i+'</td><td>DKC-'+value['']+'</td><td>1395/11/5<br>19:42</td><td>363,000</td><td class="pr-send">تحویل شده</td><td class="button"><a><span>پرداخت</span></a></td><td>سفارش</td><td class="more-order-detail"><i class="fa fa-angle-down fa-3x"></i></td></tr><tr style="display: none;"><td colspan="8"><div class="sub-order"><h3 class="order-number">مرسوله 1 از 1</h3><table><thead><tr><td>کالا</td><td>تعداد</td><td>قیمت واحد</td><td>قیمت کل</td><td>تخفیف کل</td><td>مبلغ کل</td></tr></thead><tr><td><a>مودم همراه بی‌سیم LTE تی پی-لینک مدل M7350</a><br>مشکی | گارانتی 3 ساله پارس ارتباط</td><td>1 عدد</td><td>355,000</td><td>355,000</td><td>0</td><td>355,000</td></tr></table><table class="order-track"><thead><tr><td>رهگیری سفارش</td></tr></thead><tr><td><div class="order-route"><div class="dashed approved"><span></span><span></span><span></span><span></span></div><ul><li class="approved"><i class="fa fa-check"></i><span class="state-circle"></span><span class="state-title">تایید سفارش</span></li><li class="approved"><i class="fa fa-check"></i><span class="state-circle"></span><span class="state-title"></span></li><li class="approved"><i class="fa fa-check"></i><span class="state-circle"></span><span class="state-title">تایید سفارش</span></li><li class="approved"><i class="fa fa-check"></i><span class="state-circle"></span><span class="state-title">تایید سفارش</span></li><li class="approved"><i class="fa fa-check"></i><span class="state-circle"></span><span class="state-title">تایید سفارش</span></li></ul><div class="dashed"><span></span><span></span><span></span><span></span></div></div></td></tr><thead><tr><td>وضعیت ارسال سفارش</td></tr></thead><tr><td><table class="tracking-order-table"><tr><td>روش ارسال: تحویل اکسپرس دیجی‌کالا</td><td>زمان ارسال : </td><td>کد مرسوله:444 </td></tr><tr><td>آدرس تحویل : قم.خیابان صدوقی.خیابان یاسمن.پلاک120</td><td>تحویل گیرنده : امیرحسین سبحانی</td><td>شماره تماس: 32104 - 09198508964</td></tr></table></td></tr></table></div></td></tr></table>';-->
<!--            i++;-->
<!--            $('.item-tab').eq(1).append(messageTable);-->
<!--        })-->
<!--    }-->
<!--</script>-->