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
</style>
<?php
$sellers = $data['seller'];
$gurantees = $data['gurantee'];
$category = $data['category'];
$colors = $data['color'];
?>
<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="form-group col-xs-8">
                        <label>عنوان محصول</label>
                        <input name="title" type="text" class="form-control" placeholder="عنوان محصول را وارد کنید">
                        <label>عنوان لاتین محصول</label>
                        <input name="en-title" type="text" class="form-control" placeholder="عنوان لاتین محصول را وارد کنید">
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
                                    <textarea id="editor1" name="introduction" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-4">
                        <div class="form-group">
                            <label>فروشنده</label>
                            <select class="form-control select2" multiple="multiple"
                                    data-placeholder="رنگ بندی محصول را انتخاب کنید" style="width: 100%;">
                                <?php
                                foreach ($sellers as $seller) {
                                    ?>
                                    <option name=sellerid[]
                                            value="<?= $seller['id'] ?>"><?= $seller['title'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>گارانتی</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected="selected">یک گزینه را انتخاب کنید</option>
                                <?php
                                foreach ($gurantees as $gurantee) {
                                    ?>
                                    <option><?= $gurantee['title'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>دسته بندی</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected="selected">یک گزینه را انتخاب کنید</option>
                                <?php
                                foreach ($category as $row) {
                                    ?>
                                    <option><?= $row['title'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>رنگ بندی</label>
                            <select class="form-control select2" multiple="multiple"
                                    data-placeholder="رنگ بندی محصول را انتخاب کنید"
                                    style="width: 100%;">
                                <?php
                                foreach ($colors as $color) {
                                    ?>
                                    <option name=colorid[] value="<?= $color['id'] ?>">
                                        <?= $color['title']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label>قیمت</label>
                            <input class="form-control" type="text" placeholder="قیمت محصول را به تومان وارد کنید"/>
                        </div>
                        <div class="discount-div">
                            <div>
                                <label>
                                    <input type="checkbox" class="flat-red discount-checkbox">
                                </label>
                                <label>حراج کردن این محصول</label>
                            </div>
                            <div>
                                <label class="discountlabel">درصد تخفیف</label>
                                <input class="form-control discount" disabled="disabled" type="text"
                                       placeholder="تخفیف را به درصد وارد کنید"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
</div>

