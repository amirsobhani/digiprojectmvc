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
        margin: 40px 0 0;
    }

    .attr {
        margin: 15px 0;
    }
</style>
<?php
$productAttr = $data['productAttr'];
$productInfo = $data['productInfo'];
?>


<div class="content-wrapper">
    <section class="content-header">
<label><?= $productInfo['title'] ?></label>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form action="<?= URL ?>adminproduct/ProductAttr" method="post">
                        <div class="form-group col-xs-9">
                            <?php
                            foreach ($productAttr as $row) {
                                ?>
                                <div class="attr">
                                    <label><?= $row['title'] ?></label>
                                    <input type="text" class="form-control" name="attr[]">
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="form-group col-xs-3">
                            <button class="btn btn-block btn-info btn-sm frm-submit">ذخیره ویژگی ها</button>
                        </div>
                    </form>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
</div>

