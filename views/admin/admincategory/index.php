<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            جدول ها
            <small>پیشرفته</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li><a href="#">جدول</a></li>
            <li class="active">پیشرفته</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">جدول داده مثال ۲</h3>
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
                            $category = $data['category'];
//                            $child = $data['child'];
                            foreach ($category as $row) {
                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td>
                                          مشاهده زیر دسته
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




