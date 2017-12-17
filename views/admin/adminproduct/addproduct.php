<style>
    .box::after{
        content: '';
        display: block;
        clear: both;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="form-group col-xs-8">
                        <label>عنوان محصول</label>
                        <input type="text" class="form-control" placeholder="عنوان محصول را وارد کنید">
                        <label>عنوان لاتین محصول</label>
                        <input type="text" class="form-control" placeholder="عنوان لاتین محصول را وارد کنید">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">ویرایشگر CK Editor
                                    <small>فارسی شده توسط علیرضا حسینی زاده</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                            title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form>
                                    <textarea id="editor1" name="editor1" rows="10" cols="80">این ویرایشگر راست چین و فارسی شده و تنظیمات آن به صورت اختصاصی تنظیم شده است...</textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-4">
                        <div class="form-group">
                            <label>فروشنده</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected="selected">یک گزینه را انتخاب کنید</option>
                                <option>مشهد</option>
                                <option>اصفهان</option>
                                <option>شیراز</option>
                                <option>اهواز</option>
                                <option>تبریز</option>
                                <option>کرج</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>گارانتی</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected="selected">یک گزینه را انتخاب کنید</option>
                                <option>مشهد</option>
                                <option>اصفهان</option>
                                <option>شیراز</option>
                                <option>اهواز</option>
                                <option>تبریز</option>
                                <option>کرج</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>دسته بندی</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected="selected">یک گزینه را انتخاب کنید</option>
                                <option>مشهد</option>
                                <option>اصفهان</option>
                                <option>شیراز</option>
                                <option>اهواز</option>
                                <option>تبریز</option>
                                <option>کرج</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>

