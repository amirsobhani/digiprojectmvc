<style>
    .box-header a {
        float: left;
        margin: 5px 30px;
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
</style>
<!-- Content Wrapper. Contains page content -->
<?php
$parent = [];
if (isset($data['parent'])) {
    $parent = $data['parent'];
    $parent = array_reverse($parent);
}
$categoryInfo = [];
if (isset($data['categoryInfo'])) {
    $categoryInfo = $data['categoryInfo'];
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--        <h1>-->
        <!--            جدول ها-->
        <!--            <small>پیشرفته</small>-->
        <!--        </h1>-->
        <ol class="breadcrumb">
            <?php
            foreach ($parent as $row) {
                ?>
                <li>
                    <a href="<?= URL ?>admincategory/showchild/<?= $row['id'] ?>">
                        <?= $row['title'] ?>
                    </a>
                </li>
                <?php
            }
            ?>
            <li><a href="">
                    <?php
                    if (isset($categoryInfo['title'])) {
                        echo $categoryInfo['title'];
                    }
                    ?>
                </a>
            </li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">مدیریت دسته ها</h3>
                        <div class="box-body">
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                دسته جدید
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!--modal btn--->
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">افزودن دسته جدید</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <form action="<?= URL ?>admincategory\addcategory" method="post">
                                                    <div class="col-xs-12">
                                                        <label>عنوان دسته :</label>
                                                        <input type="text" class="form-control" placeholder="عنوان دسته"
                                                               name="title">
                                                    </div>
                                                    <div style="margin: 15px 0;" class="col-xs-12">
                                                        <label>دسته اصلی</label>
                                                        <label>
                                                            <input type="checkbox" class="flat-red" checked>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-12 main-category">
                                                        <label>انتخاب دسته مادر :</label>
                                                        <select class="form-control select2" name="parent" style="width: 100%;">
                                                            <option>انتخاب کنید</option>
                                                            <?php
                                                            $all_category = $data['all_category'];
                                                            foreach ($all_category as $row) {
                                                                ?>
                                                                <option value="<?= $row['id']; ?>">
                                                                    <?= $row['title'] ?>
                                                                </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-12 form-btn-submit">
                                                        <input class="btn btn-primary" type="submit" value="ذخیره">
                                                        <button type="button" class="btn btn-default pull-left"
                                                                data-dismiss="modal">خروج
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div><!--modal--->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان دسته</th>
                                <th>زیر دسته</th>
                                <th>انتخاب</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $child = $data['category'];
                            $category = $data['category'];
                            foreach ($child as $row) {
                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td>

                                        <a href="<?= URL ?>admincategory/showchild/<?= $row['id'] ?>">
                                            مشاهده زیر دسته
                                        </a>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="flat-red"/>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان دسته</th>
                                <th>زیر دسته</th>
                                <th>انتخاب</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>







