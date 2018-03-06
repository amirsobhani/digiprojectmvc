<style>
    #content {
        width: 1190px;
        margin: 0 auto;
        height: 100%;
    }

    #main {
        background-image: url(public/img/1503990105pattern42.png);
        background-color: rgb(238, 239, 241);
        width: 100%;
        height: auto;
    }

    body {
        font-family: iran-sans;
    }

    .person-detail {
        background: #fff;
        direction: rtl;
        padding: 10px 25px;
    }

    .section {
        margin: 10px auto;
        font-size: 14px;
        width: 40%;
        line-height: 32px;
    }

    .section input {
        font-family: iran-sans;
        float: left;
        border: 1px solid #b3b3b3;
        border-radius: 2px;
        line-height: 30px;
        width: 70%;
        padding-right: 7px;
    }

    .sex label {
        margin-left: 70px;
    }

    .cityInfo label {
        margin-left: 32px;
    }

    .cityInfo select {
        height: 32px;
        width: 35.66%;
        font-family: iran-sans;
        border: 1px solid #b3b3b3;
        border-radius: 2px;
    }

    .feed label {
        margin: 10px 0 0 23px;
        font-size: 14px;
        width: 40%;
        line-height: 32px;
    }

    .person-detail button {
        width: 110px;
        line-height: 40px;
        margin: 18px 0 40px 0;
        font-family: iran-sans;
        background-color: #46a349;
        border: 1px solid #ebeced;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
    }

    .cancel {
        width: 110px;
        line-height: 40px;
        margin: 18px 0 40px 0;
        font-family: iran-sans;
        background-color: #999;
        border: 1px solid #ebeced;
        border-radius: 4px;
        color: #fff;
        display: inline-block;
        text-align: center;
    }

    .feed, .sex, .cityInfo {
        width: 40%;
        margin: 10px auto;
    }

    form {
        background-color: #fff;
        color: #777;
    }
</style>
<style>
    #main {
        background-image: url(public/img/1503990105pattern42.png);
        background-color: #eee;
        padding: 10px 0;
    }

    #content {
        width: 1190px;
        margin: 0 auto;
    }

    body {
        font-family: iran-sans;
    }

    .dk-box {
        background-color: #fff;
        border: 1px solid #ebeced;
        -ms-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
        -ms-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        overflow: hidden;
    }

    .breadcrumb {
        position: relative;
        overflow: hidden;
        line-height: 30px;
        font-family: iran-sans;
        font-size: 13px;
        color: #7C7C7C;
        margin: 5px 0;
        width: 100%;
        content: " ";
        display: block;
        clear: both;
    }

    #breadcrumb {
        content: " ";
        display: block;
        clear: both;
        margin-bottom: 10px;
        padding: 0 10px;
    }

    .breadcrumb li {
        float: right;
        cursor: pointer;
    }

    .breadcrumb li:hover {
        color: #000;
    }

    .breadcrumb i {
        margin: 0px 10px;
    }

</style><!--breadcrumb-->
<?php
$province = $data['province'];
$userInfo = $data['userInfo'];

?>
<script src="public/persian-datepicker/js/persian-datepicker.js"></script>
<link href="public/persian-datepicker/css/persian-datepicker.css" rel="stylesheet" type="text/css">

<div id="main">
    <div id="content">
        <div id="breadcrumb" class="dk-box">
            <ul class="breadcrumb">
                <li><i class="fa fa-angle-left"></i><a>فروشگاه اینترنتی دیجی کالا</a></li>
                <li><a>تکمیل اطلاعات حساب کاربری</a></li>
            </ul>
        </div><!--breadcrumb-->
        <form method="post" action="profile/UpdateProfile">
            <div class="person-detail">
                <div class="section">
                    <label>نام و نام خانوادگی :</label>
                    <input name="family" value="<?= $userInfo['family'] ?>">
                </div>
                <div class="section">
                    <label>کد ملی :</label>
                    <input name="melliCode" value="<?= $userInfo['code_melli'] ?>">
                </div>
                <div class="section">
                    <label>تلفن :</label>
                    <input name="tel" value="<?= $userInfo['tel'] ?>">
                </div>
                <div class="section">
                    <label>موبایل :</label>
                    <input name="mobile" value="<?= $userInfo['mobile'] ?>">
                </div>
                <div class="section">
                    <label>تاریخ تولد :</label>
                    <input id="date" name="birthday" value="<?= $userInfo['birthday'] ?>">
                </div>
                <div class="sex">
                    <label>جنسیت :</label>
                    <input type="radio" name="sex" value="مرد"
                        <?php
                        if ($userInfo['sex'] == 'مرد') {
                            ?>
                            checked
                            <?php
                        }
                        ?>
                    ><span>مرد</span>
                    <input
                        <?php
                        if ($userInfo['sex'] == 'زن') {
                            ?>
                            checked
                            <?php
                        }
                        ?>
                            type="radio" name="sex" value="زن"><span>زن</span>
                </div>
                <div class="cityInfo">
                    <label>محل سکونت :</label>
                    <select class="province" name="province">
                        <option>انتخاب استان</option>
                        <?php
                        foreach ($province as $row) {
                            ?>
                            <option
                                <?php
                                if ($userInfo['province'] == $row['name']) {
                                    ?>
                                    selected
                                    <?php
                                }
                                ?>
                                    onclick="city(<?= $row['id'] ?>)"
                                    value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select name="city" class="cityList">
                        <option>انتخاب شهر</option>
                        <?php
                        if (isset($userInfo)) {
                            ?>
                            <option selected><?= $userInfo['city'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="section">
                    <label>شماره کارت :</label>
                    <input name="creditCard" value="<?= $userInfo['credit_card'] ?>">
                </div>
                <div class="feed">
                    <label>اشتراک در خبرنامه :</label>
                    <input value="1"
                        <?php
                        if ($userInfo['feed'] == 1) {
                            ?>
                            checked
                            <?php
                        }
                        ?>
                            type="checkbox" name="feed">
                </div>
                <div class="section">
                    <label>پست الکترونیک :</label>
                    <input name="email" value="<?= $userInfo['email'] ?>">
                </div>
                <div style="text-align: center;" class="section">
                    <button>ثبت اطلاعات</button>
                    <a class="cancel" href="profile">
                        <span>انصراف</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $('#date').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy/mm/dd',
        minDate: '1310/01/01'
    });

    function city(province) {
        var url = 'profile/getCity';
        var data = {'province': province};
        $('.cityList option').remove();
        $.post(url, data, function (msg) {
            $.each(msg, function (index, value) {
                var city = value['name'];
                var cityId = value['id'];
                var cityTag = '<option name="city" value="' + city + '">' + city + '</option>';
                $('.cityList').append(cityTag);
            })
        }, 'json')
    }
</script>