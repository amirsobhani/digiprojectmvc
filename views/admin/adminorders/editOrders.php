<style>
    .box::after {
        content: '';
        display: block;
        clear: both;
    }

    .discount {
        display: inline-block;
        width: 50%;
        float: left;
    }

    .discount-div {
        margin: 20px 0;
    }

    .frm-submit {
        margin: 15px 0;
    }

    .pro-img span img {
        width: 150px;
        height: 150px;
        margin: 15px 0;
        float: left;
    }

    .form-group {
        width: 75%;
        margin: 0 auto;
        text-align: center;
    }
</style>
<style>
    .order {
        width: 100%;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .order > thead {
        background: #eee;
    }

    .order > thead > td {
        border: 1px solid #e1e1e1;
        line-height: 22px;
        font-size: 12px;
        text-align: center;
        padding: 10px 0;
        color: #6b6b6b;
        background: #f8f9fb;
    }

    .order tr td {
        border: 1px solid #e1e1e1;
        line-height: 22px;
        font-size: 12px;
        text-align: center;
        padding: 10px 0;
    }

    .more-order-detail {
        color: #6b6b6b;
        cursor: pointer;
    }

    .more-order-detail i {
        position: relative;
        top: 9px;
    }

    .button a {
        display: inline-block;
        padding: 5px 10px;
        border: 1px solid #e2e2e2;
        border-radius: 4px;
        cursor: pointer;
    }

    .sub-order {
        margin: 50px;
    }

    .sub-order h3 {
        text-align: right;
        margin: 10px 0;
    }

    .sub-order table {
        width: 100%;
    }

    .sub-order table thead {
        background-color: #ebecee !important;
    }

    .statusSel select {
        width: 82%;
        border: 1px solid #c4c4c4;
    }

</style><!----Order--->
<?php
$order = $data['order'];
$status = $data['statusInfo'];
?>

<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form action="<?= URL ?>adminproduct/addproduct/<?= @$product['id'] ?>" method="post"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>نام خریدار</label>
                            <input disabled name="title" type="text" class="form-control"
                                   value="<?= $order['user_family'] ?>">
                        </div>
                        <div class="form-group">
                            <label>سبد خرید</label>
                            <table class="order">
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
                                $cart = unserialize($order['cart']);
                                foreach ($cart as $cartItem) {
                                    $total = ($cartItem['count'] * $cartItem['price']);
                                    $discount = ($total * $cartItem['discount']) / 100;
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
                                <tr>
                                    <td colspan="2">قیمت کل سبد خرید</td>
                                    <td colspan="4"> <?= $order['cart_price'] ?> تومان</td>
                                </tr>
                                <tr>
                                    <td colspan="2">وضعیت مرسوله</td>
                                    <td colspan="4" class="statusSel">
                                        <select>
                                            <?php
                                            foreach ($status as $row) {
                                                ?>
                                                <option
                                                    <?php
                                                    if ($row['id'] == $order['status']) {
                                                        ?>
                                                        selected
                                                        <?php
                                                    }
                                                    ?>
                                                ><?= $row['title'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">.
                        </div>
                </div>
                </form>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>

