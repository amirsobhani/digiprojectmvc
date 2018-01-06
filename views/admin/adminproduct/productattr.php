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
//$attr = $data['attr'];
//$attrId = [];
//foreach ($attr as $row) {
//    array_push($attrId, $row['id']);
//}
//print_r($attrId);
foreach ($productAttr as $row) {
    if (isset($row['value'])) {
        $edit = 'edit';
    }
}
?>


<div class="content-wrapper">
    <section class="content-header">
        <label><?= $productInfo['title'] ?></label>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <?php
                    if ($edit == 'edit') {
                    ?>
                    <form action="<?= URL ?>adminproduct/ProductAttr/<?= $productInfo['id'] ?>/<?= $edit ?>"
                          method="post">
                        <?php
                        }else{
                        ?>
                        <form action="<?= URL ?>adminproduct/ProductAttr/<?= $productInfo['id'] ?>/" method="post">
                            <?php
                            }
                            ?>
                            <div class="form-group col-xs-9">
                                <?php
                                foreach ($productAttr as $row) {
                                    ?>
                                    <div class="attr">
                                        <label><?= $row['title'] ?></label>
                                        <input type="hidden" value="<?= $row['id'] ?>" name="id[]">
                                        <input type="text" class="form-control" value="<?= $row['value'] ?>"
                                               name="value<?= $row['id'] ?>">
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

