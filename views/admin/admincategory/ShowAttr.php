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

    .editCat {
        cursor: pointer;
    }

    .delcat {
        position: relative;
        right: -143px;
        top: -77px;
        float: left;
    }
</style>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
    $attr = $data['attr'];
    $categoryInfo = $data['categoryInfo'];
    $attrInfo = $data['attrInfo'];
    $getAttrInfo = $data['getAttrInfo'];
    $attrParent = $data['attrParent'];
    ?>
    <section class="content-header">
        <!--        <h1>-->
        <!--            جدول ها-->
        <!--            <small>پیشرفته</small>-->
        <!--        <!--        </h1>-->
        <ol class="breadcrumb" data-id="<?= $categoryInfo['id'] ?>">
            <li>
                <a href="<?= URL ?>/admincategory/showchild/<?= $categoryInfo['id'] ?>">
                    <?= $categoryInfo['title'] ?>
                </a>
            </li>
            <li>
                <?= $attrInfo[0]['title'] ?>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">مدیریت ویژگی ها</h3>

                        <div class="box-body">
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                ویژگی جدید
                                <i class="fa fa-plus"></i>
                            </a>

                        </div><!--modal btn--->

                        <div class="box-title">
                        </div>
                    </div><!-- /.box-header -->
                    <form action="<?= URL ?>admincategory/deleteAttr/<?= @$categoryInfo['id'] ?>/<?= @$attrInfo[0]['id'] ?>"
                          class="tableForm" method="post">
                        <button type="submit" class="btn btn-danger delcat"
                        ">
                        حذف
                        <i class="fa fa-trash"></i>
                        </button>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>عنوان ویژگی</th>
                                    <?php if (!isset($attrInfo[0]['title'])) { ?>
                                        <th>ویژگی های فرزند</th>
                                    <?php } ?>
                                    <?php if (isset($attrInfo[0]['title'])) { ?>
                                        <th>مقادیر پیش فرض</th>
                                    <?php } ?>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($attr as $row) {
                                    ?>
                                    <tr class="trTitle">
                                        <td class="tdId"><?= $row['id'] ?></td>
                                        <td class="td-title"><?= $row['title'] ?></td>
                                        <?php if (!isset($attrInfo[0]['title'])) { ?>
                                            <td>
                                                <a href="<?= URL ?>admincategory/ShowAttr/<?= $categoryInfo['id'] ?>/<?= $row['id'] ?>">
                                                    مشاهده ویژگی ها
                                                </a>
                                            </td>
                                        <?php } ?>
                                        <?php if (isset($attrInfo[0]['title'])) { ?>
                                            <td><a href="<?= URL ?>admincategory/AttrVal/<?= $row['id'] ?>">ویرایش</a></td>
                                        <?php } ?>
                                        <td>
                                            <a class="editAttr" data-toggle="modal" data-target="#modal-edit">
                                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="selCat">
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
                                    <th>ردیف</th>
                                    <th>عنوان ویژگی</th>
                                    <?php if (!isset($attrInfo[0]['title'])) { ?>
                                        <th>ویژگی های فرزند</th>
                                    <?php } ?>
                                    <?php if (isset($attrInfo[0]['title'])) { ?>
                                        <th>مقادیر پیش فرض</th>
                                    <?php } ?>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">افزودن ویژگی جدید</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="<?= URL ?>admincategory/addAttr/<?= @$categoryInfo['id'] ?>/<?= $attrInfo[0]['id'] ?>"
                              method="post">
                            <div class="col-xs-12">
                                <label>عنوان ویژگی :</label>
                                <input type="text" class="form-control" placeholder="عنوان ویژگی"
                                       name="title">
                            </div>
                            <div style="margin: 15px 0;" class="col-xs-12">
                                <label>ویژگی اصلی</label>
                                <label>
                                    <input type="checkbox" class="flat-red maincat"
                                        <?php
                                        if (!isset($attrInfo[0]['title'])) {
                                            ?>
                                            name="parent" value="0"
                                            <?php
                                        }
                                        ?>
                                    >
                                </label>
                            </div>
                            <div class="col-xs-12">
                                <input hidden name="idcategory" value="<?= $categoryInfo['id'] ?>">
                                <div>
                                    <label>انتخاب ویژگی مادر :</label>
                                    <select class="form-control select2 main-category" name="parent"
                                            style="width: 100%;">
                                        <?php
                                        foreach ($attrParent as $row) {
                                            if ($row['id'] == $attrInfo[0]['id']) {
                                                $x = 'selected';
                                            } else {
                                                $x = '';
                                            }
                                            ?>
                                            <option <?= $x ?> value="<?= $row['id']; ?>">
                                                <?= $row['title'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
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
</div><!--add modal--->

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ویرایش ویژگی</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form id="edit-form" action="" method="post">
                            <div class="col-xs-12">
                                <label>عنوان ویژگی :</label>
                                <input id="attr-title" value="" type="text" class="form-control"
                                       placeholder="عنوان ویژگی" name="title">
                                <input hidden value="" name="id" id="attr-id">
                            </div>
                            <div class="col-xs-12">
                                <input hidden name="idcategory" value="<?= $categoryInfo['id'] ?>">
                                <div style="margin: 15px 0;" class="col-xs-12">
                                    <label>ویژگی اصلی</label>
                                    <label>
                                        <input type="checkbox" class="flat-red maincat"
                                            <?php
                                            if (!isset($attrInfo[0]['title'])) {
                                                ?>
                                                name="parent" value="0"
                                                <?php
                                            }
                                            ?>
                                        >
                                    </label>
                                </div>
                                <div>
                                    <label>انتخاب ویژگی مادر :</label>
                                    <select class="form-control select2 main-category" name="parent"
                                            style="width: 100%;">
                                        <?php
                                        foreach ($attrParent as $row) {
                                            if ($row['id'] == $attrInfo[0]['id']) {
                                                $x = 'selected';
                                            } else {
                                                $x = '';
                                            }
                                            ?>
                                            <option <?= $x ?> value="<?= $row['id']; ?>">
                                                <?= $row['title'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
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
</div><!--edit modal--->
