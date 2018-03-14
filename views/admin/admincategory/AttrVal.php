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
        margin: 15px 0;
    }

    .pro-img span img {
        width: 150px;
        height: 150px;
        margin: 15px 0;
        float: left;
    }

    .form-group {
        width: 50%;
        margin: 0 auto;
        padding: 30px 0;
    }

    .pos-neg {
        margin: 40px 0;
    }

    .pos-neg::after {
        clear: both;
        content: " ";
        display: block;
    }

    .pos-neg label {
        margin: 10px 0;
        font-size: 13px;
    }

    .fa-minus-circle {
        cursor: pointer;
    }

    .fa-plus-circle {
        cursor: pointer;
    }

    .pos {
        margin: 10px 0;
    }

    .pos label {
        color: #4EAF52;
    }

    .pos input {
        width: 100%;
        height: 32px;
        padding: 6px 12px;
        font-size: 13px;
        background-color: #fff;
        border: 1px solid #ccc;
        width: 85%;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form action="" method="post"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>توضیحات :</label>
                            <p>
                                برای اضافه کردن ویژگی های بیشتر بر روی + و برای حذف یک ویژگی، بر روی - کلیک کنید.
                            </p>
                            <div class="pos-neg">
                                <div class="right">
                                    <?php
                                    if (isset($comment['posotive'])) {
                                        $posotive = unserialize($comment['posotive']);
                                        foreach ($posotive as $pos) {
                                            ?>
                                            <div class="pos">
                                                <label>
                                                    ویژگی
                                                </label>
                                                <input name="posotive[]" maxlength="25" value="<?= $pos ?>">
                                                <i class="fa fa-plus-circle" onclick="plus(plus, this)"></i>
                                                <i class="fa fa-minus-circle" onclick="minus(plus, this)"></i>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="pos">
                                            <label>ویژگی</label>
                                            <input name="posotive[]" maxlength="25">
                                            <i class="fa fa-plus-circle" onclick="plus(plus, this)"></i>
                                            <i class="fa fa-minus-circle" onclick="minus(plus, this)"></i>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
</div>
<script>
    var negative;


    function plus(mood, tag) {
        if (mood == plus) {
            var addInputPlus = '<div class="pos"><label>  ویژگی  </label><input name="posotive[]" maxlength="25"><i class="fa fa-plus-circle" onclick="plus(plus, this)"></i>  <i class="fa fa-minus-circle" onclick="minus(plus, this)"></i>  </div>';
            $(tag).parents('.right').append(addInputPlus);
        }
    }

    function minus(mood, tag) {
        var ngL = $('.neg').length;
        var psL = $('.pos').length;

        if (mood == plus) {
            if (psL > 1) {
                $(tag).parent('.pos').remove();
            }
        } else {
            if (ngL > 1) {
                $(tag).parent('.neg').remove();
            }
        }
    }
</script>
