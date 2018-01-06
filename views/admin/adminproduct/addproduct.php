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
    .frm-submit{
        margin: 15px 0;
    }
</style>
<?php
$sellers = $data['seller'];
$gurantees = $data['gurantee'];
$category = $data['category'];
$colors = $data['color'];
$product = $data['product'];

$productSellers = explode(',', $product['seller']);
$productgurantees = explode(',', $product['guarantee']);
$productcolors = explode(',', $product['color']);
?>


<?php

if (isset($product['title'])) {
    $edit = 1;
} else {
    $edit = 0;
}

?>
<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form action="<?= URL ?>adminproduct/addproduct/<?= @$product['id'] ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-xs-9">
                            <label>عنوان محصول</label>
                            <input value="<?= $product['title'] ?>" name="title" type="text" class="form-control"
                                   placeholder="عنوان محصول را وارد کنید">
                            <label>عنوان لاتین محصول</label>
                            <input value="<?= $product['en_title'] ?>" name="en-title" type="text"
                                   class="form-control"
                                   placeholder="عنوان لاتین محصول را وارد کنید">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">معرفی اجمالی محصول
                                        <small>این بخش بعنوان معرفی اجمالی محصول نشان داده می شود</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse"
                                                data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-info btn-sm" data-widget="remove"
                                                data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea id="editor1" name="introduction" rows="10"
                                              cols="80"><?= $product['introduction'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xs-3">
                            <div>
                                <label>مدل محصول</label>
                                <input value="<?= $product['product_model'] ?>" name="productmodel"
                                       class="form-control"
                                       type="text" placeholder="مدل محصول را وارد کنید"/>
                            </div>
                            <div class="form-group">
                                <label>فروشنده</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="multiple"
                                        name=sellerid[]
                                        data-placeholder="رنگ بندی محصول را انتخاب کنید" style="width: 100%;">
                                    <?php
                                    foreach ($sellers as $seller) {
                                        ?>
                                        <option
                                            <?php
                                            foreach ($productSellers as $productSeller) {
                                                if ($productSeller == $seller['id']) {
                                                    ?>
                                                    selected="selected"
                                                    <?php
                                                }
                                            }
                                            ?>
                                                value="<?= $seller['id'] ?>"><?= $seller['title'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>گارانتی</label>
                                <select class="form-control select2" multiple="multiple" style="width: 100%;"
                                        name="gurantees[]"
                                        data-placeholder="گارانتی محصول را انتخاب کنید">
                                    <?php
                                    foreach ($gurantees as $gurantee) {
                                        ?>
                                        <option
                                            <?php
                                            foreach ($productgurantees as $productgurantee) {
                                                if ($productgurantee == $gurantee['id']) {
                                                    ?>
                                                    selected="selected"
                                                    <?php
                                                }
                                            }
                                            ?>

                                                value="<?= $gurantee['id'] ?>"><?= $gurantee['title'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select name="category" class="form-control select2" style="width: 100%;"
                                        data-placeholder="یک دسته برای محصول انتخاب کنید">
                                    <option selected disabled>یک دسته برای محصول انتخاب کنید</option>
                                    <?php
                                    foreach ($category as $row) {
                                        ?>
                                        <option
                                            <?php
                                            if ($product['idcategory'] == $row['id']) {
                                                ?>
                                                selected
                                                <?php
                                            }
                                            ?>
                                                value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>رنگ بندی</label>
                                <select class="form-control select2" multiple="multiple" name=colorid[]
                                        data-placeholder="رنگ بندی محصول را انتخاب کنید"a
                                        style="width: 100%;">
                                    <?php
                                    foreach ($colors as $color) {
                                        ?>
                                        <option
                                            <?php
                                            foreach ($productcolors as $productcolor) {
                                                if ($productcolor == $color['id']) {
                                                    ?>
                                                    selected="selected"
                                                    <?php
                                                }
                                            }
                                            ?>
                                                value="<?= $color['id'] ?>">
                                            <?= $color['title']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label>تعداد موجود</label>
                                <input value="<?= $product['tedad_mojood'] ?>" name="tedad" class="form-control"
                                       type="text"
                                       placeholder="تعداد کالای موچود در انبار را وارد کنید"/>
                            </div>
                            <div>
                                <label>قیمت (تومان)</label>
                                <input value="<?= $product['price'] ?>" name="price" class="form-control"
                                       type="text"
                                       placeholder="قیمت محصول را به تومان وارد کنید"/>
                            </div>
                            <div>
                                <label>بارگزاری تصویر شاخص</label>
                                <input type="file" name="image">
                            </div>
                            <?php
                            if ($edit == 1) {
                                ?>
                                <button class="btn btn-block btn-info btn-sm frm-submit">بروزرسانی محصول</button>
                                <?php
                            } else {
                                ?>
                                <button class="btn btn-block btn-info btn-sm frm-submit">اضافه کردن محصول</button>
                                <?php
                            }
                            ?>
                        </div>
                    </form>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
</div>

