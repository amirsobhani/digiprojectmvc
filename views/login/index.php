
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

                        <div class="box-title">
                        </div>
                    </div><!-- /.box-header -->
                    <form action="<?= URL ?>admincategory/deletecategory/<?= @$categoryInfo['id'] ?>" class="tableForm"  method="post">
                        <button type="submit" class="btn btn-danger delcat"">
                        حذف
                        <i class="fa fa-trash"></i>
                        </button>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>عنوان دسته</th>
                                    <th>زیر دسته</th>
                                    <th>ویژگی ها</th>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $child = $data['category'];
                                $category = $data['category'];
                                foreach ($child as $row) {
                                    ?>
                                    <tr class="trTitle">
                                        <td class="tdId"><?= $row['id'] ?></td>
                                        <td class="td-title"><?= $row['title'] ?></td>
                                        <td>

                                            <a href="<?= URL ?>admincategory/showchild/<?= $row['id'] ?>">
                                                مشاهده زیر دسته
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= URL ?>admincategory/ShowAttr/<?= $row['id'] ?>">
                                                مشاهده ویژگی ها
                                            </a>
                                        </td>
                                        <td>
                                            <a class="editCat" data-toggle="modal" data-target="#modal-edit">
                                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="selCat">
                                            <input name="id[]" value="<?= $row['id'] ?>" type="checkbox" class="flat-red"/>
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
                                    <th>ویژگی ها</th>
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






        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">فرم های عمودی</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="ایمیل">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">رمز عبور</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="رمز عبور">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> مرا به خاطر بسپار
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">انصراف</button>
                    <button type="submit" class="btn btn-info pull-right">ورود</button>
                </div>
        </div>