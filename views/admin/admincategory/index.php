<style>
    .box-header a{
        float: left;
        margin: 5px 30px;
    }
    .box-header i{
        margin-right: 5px;
    }
    .modal-dialog{
        width: 300px!important;
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
                                                <form action="admin/admincategory/index" method="post">
                                                    <div class="col-xs-12">
                                                        <label>عنوان دسته :</label>
                                                        <input type="text" class="form-control" placeholder="عنوان دسته" name="title">
                                                    </div>
                                                    <div style="margin: 15px 0;" class="col-xs-12">
                                                        <label>دسته اصلی</label>
                                                        <label>
                                                            <input type="checkbox" class="flat-red" checked name="parent">
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-12 main-category">
                                                        <label>انتخاب دسته مادر :</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">تهران</option>
                                                            <option>مشهد</option>
                                                            <option>اصفهان</option>
                                                            <option>شیراز</option>
                                                            <option>اهواز</option>
                                                            <option>تبریز</option>
                                                            <option>کرج</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-primary">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">انصراف</button>
                                        <button type="button" class="btn btn-primary">ذخیره</button>
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

                                        <a
                                            <?php
                                            if (isset($data['parent'])) {
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
<script>
    $(document).ready(function () {
        $('#tarikh').persianDatepicker({
            altField: '#tarikhAlt',
            altFormat: 'X',
            format: 'D MMMM YYYY HH:mm a',
            observer: true,
            timePicker: {
                enabled: true
            },
        });
    });
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        });

        //Colorpicker
        $('.my-colorpicker1').colorpicker();
        //color picker with addon
        $('.my-colorpicker2').colorpicker();

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>







