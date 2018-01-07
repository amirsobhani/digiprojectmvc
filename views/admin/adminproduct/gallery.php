<style>
    .box-header a {
        float: left;
        margin: 5px 15px;
    }

    .box-header i {
        margin-right: 5px;
    }

    .modal-dialog {
        width: 300px !important;
    }

    .form-btn-submit {
        margin-top: 20px;
    }

    .editPro {
        cursor: pointer;
    }

    .delPro {
        position: relative;
        right: -57px;
        top: -43px;
        float: left;
    }
    .new-img{
        display: inline-block;
        float: left;
    }
    .new-img input{
        position: relative;
        top: 78px;
        right: 0;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<?php
$gallery = $data['gallery'];
$productInfo = $data['productInfo'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--        <h1>-->
        <!--            جدول ها-->
        <!--            <small>پیشرفته</small>-->
        <!--        </h1>-->
        <ol class="breadcrumb">
            <!--            --><?php
            //            foreach ($parent as $row) {
            //                ?>
            <!--                <li>-->
            <!--                    <a href="--><? //= URL ?><!--admincategory/showchild/-->
            <? //= $row['id'] ?><!--">-->
            <!--                        --><? //= $row['title'] ?>
            <!--                    </a>-->
            <!--                </li>-->
            <!--                --><?php
            //            }
            //            ?>
            <!--            <li><a href="">-->
            <!--                    --><?php
            //                    if (isset($categoryInfo['title'])) {
            //                        echo $categoryInfo['title'];
            //                    }
            //                    ?>
            <!--                </a>-->
            <!--            </li>-->
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">مدیریت تصاویر گالری</h3>
                        <div class="new-img">
                            <form action="<?= URL ?>adminproduct/gallery/<?= $productInfo['id'] ?>" enctype="multipart/form-data" method="post">
                                <input type="file" name="image">
                                <button class="btn btn-success">
                                    <i class="fa fa-plus"></i>
                                    تصویر جدید
                                </button>
                            </form>
                        </div>
                    </div><!-- /.box-header -->
                    <form action="<?= URL ?>adminproduct/deleteGallery/<?= $productInfo['id'] ?>" class="tableForm" method="post">
                        <button type="submit" class="btn btn-danger delPro">
                        حذف
                        <i class="fa fa-trash"></i>
                        </button>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>تصویر</th>
                                    <th>انتخاب</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                foreach ($gallery as $row) {
                                ?>
                                <tr class="trTitle">
                                    <td class="tdId"><?= $i ?></td>
                                    <td class="td-title">
                                        <img src="<?= URL ?>public/img/product gallery/<?= $productInfo['id'] ?>/gallery/thumbnail/<?= $row['img'] ?>">
                                    </td>
                                    <td class="selPro">
                                        <input name="id[]" value="<?= $row['id'] ?>" type="checkbox"
                                               class="flat-red"/>

                                    </td>
                                    <?php
                                    $i++;
                                    }
                                    ?>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ردیف</th>
                                    <th>تصویر</th>
                                    <th>انتخاب</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-table -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>