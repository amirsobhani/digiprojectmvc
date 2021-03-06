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
    .delPro{
        position: relative;
        right: -179px;
        top: -78px;
        float: left;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<?php
$productReview = $data['productReview'];
$idproduct = $data['idproduct'];
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
            <!--                    <a href="--><?//= URL ?><!--admincategory/showchild/--><?//= $row['id'] ?><!--">-->
            <!--                        --><?//= $row['title'] ?>
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
                        <h3 class="box-title">مدیریت محصولات ها</h3>

                        <div class="box-body">
                            <a href="<?= URL ?>adminproduct/addreview/<?= $idproduct ?>" class="btn btn-success">
نقد و بررسی جدید
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!--modal btn--->
                        <div class="box-title">
                        </div>
                    </div><!-- /.box-header -->
                    <form action="<?= URL ?>adminproduct/deleteReview" class="tableForm"  method="post">
                        <input name="idproduct" value="<?= $idproduct ?>" hidden>
                        <button type="submit" class="btn btn-danger delPro"">
                        حذف
                        <i class="fa fa-trash"></i>
                        </button>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>کد نقد</th>
                                    <th>عنوان نقد و بررسی</th>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($productReview as $row) {
                                    ?>
                                    <tr class="trTitle">
                                        <td class="tdId"><?= $row['id'] ?></td>
                                        <td class="td-title"><?= $row['title'] ?></td>
                                        <td>
                                            <a href="<?= URL ?>adminproduct/editReview/<?= $row['id'] ?>/edit">
                                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="selPro">
                                            <input name="id[]" value="<?= $row['id'] ?>" type="checkbox"
                                                   class="flat-red"/>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>کد نقد</th>
                                    <th>عنوان نقد و بررسی</th>
                                    <th>ویرایش</th>
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