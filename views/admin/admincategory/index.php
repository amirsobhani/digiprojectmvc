
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
                                        <a
                                            <?php
                                            if (isset($row['id'])) {
                                                ?>
                                                href="<?= URL ?>admincategory/showchild/<?= $row['id'] ?>"
                                                <?php
                                            } else {
                                                ?>
                                                href="#";
                                                <?php
                                            }
                                            ?>
                                        >
                                            مشاهده زیر دسته
                                        </a>
                                    </td>
                                    <td>
                                        <input type="checkbox"/>
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




