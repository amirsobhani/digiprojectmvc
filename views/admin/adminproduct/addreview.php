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
</style>
<?php
$review = $data['review'][0];
$productInfo = $data['productInfo'];
$productId = $data['idproduct'];
$edit = $data['edit'];
?>

<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form action="<?= URL ?>adminproduct/addreview/<?= @$review['id'] ?>" method="post">
                        <div class="form-group col-xs-9">
                            <label>عنوان نقد و بررسی</label>
                            <input value="<?php if ($edit == 'edit'){echo $review['title'];} ?>" name="title" type="text" class="form-control"
                                   placeholder="عنوان نقد محصول را وارد کنید">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">متن نقد و بررسی
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
                                    <textarea id="editor1" name="description" rows="10"
                                              cols="80"><?php if ($edit == 'edit'){echo $review['description'];} ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xs-3">
                            <div class="form-group">
                                <label>محصول</label>
                                <select name="category" class="form-control select2" style="width: 100%;"
                                        data-placeholder="یک محصول را برای این نقد انتخاب کنید">
                                    <option selected disabled>یک محصول برای این نقد انتخاب کنید</option>
                                    <?php
                                    foreach ($productInfo as $row) {
                                        ?>
                                        <option
                                            <?php
                                            if ($edit == 'edit') {
                                                if ($row['id'] == $productInfo[0]['id']) {
                                                    ?>
                                                    selected
                                                    <?php
                                                }
                                            } else {
                                                if ($row['id'] == $productId){
                                                    ?>
                                                    selected
                                                    <?php
                                                }
                                            }

                                            ?>
                                                value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <?php
                            if ($edit != '') {
                                ?>
                                <button class="btn btn-block btn-info btn-sm frm-submit">بروزرسانی نقد</button>
                                <?php
                            } else {
                                ?>
                                <button class="btn btn-block btn-info btn-sm frm-submit">اضافه کردن نقد جدید</button>
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

