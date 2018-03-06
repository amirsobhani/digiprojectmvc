<style>
    #conten {
        background-color: #EEEFF1;
        width: 100%;
        float: right;
        padding-bottom: 40px;
    }

    .register-wrapper {
        width: 1190px;
        margin: 15px auto;
        border-radius: 4px;
    }

    .register-box-icon {
        width: 100%;
        height: 155px;
        background-color: #FAFCFC;
        direction: rtl;
        text-align: center;
        font-family: iran-sans;
    }

    .register-box-icon h1 {
        color: #7A7A7A;
        font-size: 18px;
        margin-top: 12px;
    }

    .register-box-icon i {
        margin-top: 30px;
        color: #c4c4c4;
    }

    .register {
        background-color: #fff;
        width: 1190px;
        height: 300px;
        padding: 50px 0;
    }

    #right-register {
        width: 50%;
        margin: 0 auto;
    }

    .inside-register {
        width: 75%;
        margin: 0 auto;
    }

    .inside-register input {
        font-family: iran-sans;
        direction: rtl;
        text-align: right;
    }

    .email-register {
        float: right;
        width: 100%;
        margin-bottom: 10px;
    }

    .email-register label {
        direction: rtl;
        float: right;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 40px;
        margin-left: 10px;
    }

    .email-register input {
        float: left;
        line-height: 35px;
        width: 60%;
        color: #acacac;
        text-align: right;
        direction: rtl;
        border: 1px solid #f0f1f2;
        border-radius: 2px;
        outline: none;
        padding: 0 17px;
    }

    .pass-register {
        float: right;
        width: 100%;
        margin-bottom: 10px;
    }

    .pass-register label {
        direction: rtl;
        float: right;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 40px;
    }

    .pass-register input {
        float: left;
        line-height: 35px;
        width: 60%;
        color: #acacac;
        text-align: right;
        direction: rtl;
        border: 1px solid #f0f1f2;
        border-radius: 2px;
        outline: none;
        padding: 0 17px;
    }

    .agreement {
        direction: rtl;
    }

    .agreement label {
        font-family: iran-sans;
        font-size: 13px;
        margin: 15px 0;
        display: block;
        line-height: 25px;
    }

    .lastNews {
        position: relative;
    }

    .lastNews label {
        font-family: iran-sans;
        font-size: 13px;
        margin: 15px 0;
        display: block;
        line-height: 25px;
        direction: rtl;
    }

    .submit button {
        background-color: #208DE6;
        color: #fff;
        font-family: iran-sans;
        line-height: 40px;
        text-align: center;
        width: 150px;
        border-radius: 4px;
        box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
        cursor: pointer;
    }

    #left-register {
        border-right: 1px solid #f0f1f2;
        display: block;
        float: right;
        padding-right: 55px;
        width: 35%;
    }

    #left-register ul li {
        line-height: 45px;
        float: right;
    }

    #left-register ul li span {
        direction: rtl;
        float: right;
        display: block;
        color: #6d717a;
        font-family: iran-sans;
        font-size: 14px;
    }

    #left-register ul li i {
        float: right;
        line-height: 45px;
        color: #6d717a;
        margin-left: 20px;
        font-size: 22px;
    }

    .check-box {
        display: block;
        float: right;
        margin-left: 10px;
        z-index: 2;
        position: relative;
        cursor: pointer;
        opacity: 0;
    }

    .active-check {
        width: 17px;
        height: 17px;
        display: block;
        float: right;
        border: 1px solid #eee;
        position: absolute;
        border-radius: 2px;
    }

    .active-check i {
        color: #fff;
        margin-right: 1px;
    }

    .active-check-cheked {
        background-color: #208DE6;
        border-radius: 2px;
        border: none;
    }

    .info-bar {
        float: left;
    }

    .error {
        width: 50%;
        margin: 20px auto;
        line-height: 60px;
        border: 1px solid #ef5662;
        color: #ef5662;
        border-radius: 4px;
    }

    .success {
        width: 50%;
        margin: 20px auto;
        line-height: 60px;
        border: 1px solid #46a349;
        color: #46a349;
        border-radius: 4px;
    }

</style>

<div id="conten">
    <div class="register-wrapper">
        <div class="register-box-icon">
            <i class="fa fa-sign-in fa-5x" aria-hidden="true"></i>
            <h1>تغییر رمز عبور</h1><!--register-box-icon-->
            <?php
            if (isset($_GET['error'])){
                ?>
                <div class="error">
                    <h2><?= $_GET['error'] ?></h2>
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($_GET['success'])){
                ?>
                <div class="success">
                    <h2><?= $_GET['success'] ?></h2>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="register">
            <div id="right-register">
                <div class="inside-register">
                    <form action="profile/UpdatePass" method="post">
                        <div class="email-register">
                            <label>رمز عبور فعلی</label>
                            <input name="oldPass" type="password" placeholder="رمز عبور فعلی را وارد کنید"/>
                        </div>
                        <div class="pass-register">
                            <label>رمز عبور جدید</label>
                            <input name="1NewPass" type="password" placeholder="رمز عبور جدید را وارد کنید"/>
                        </div>
                        <div class="pass-register">
                            <label>تاییدیه رمز عبور جدید</label>
                            <input name="2NewPass" type="password" placeholder="رمز عبور جدید را مجددا وارد کنید"/>
                        </div>
                        <div class="submit">
                            <button type="submit">ورود</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.menu-li').hover(function () {
        $(this).find('.submenu1').slideDown(200);
    }, function () {
        $(this).find('.submenu1').slideUp(200);
    })
    $('.submenu1-li').hover(function () {
        $(this).find('.submenu2').fadeIn(100);
    }, function () {
        $(this).find('.submenu2').fadeOut(100);
    })

    $('.menu-li').hover(function () {
        $(this).addClass('active-li');
        $('.submenu1').css("background-color", "#fff");
    }, function () {
        $(this).removeClass('active-li');
        $('.submenu1').css("background-color", "rgb(247,248,250)");
    })

</script><!--Menu jQuery-->
<script>
    $('.check-box').click(function () {
        if ($(this).is(':checked')) {
            $(this).parent().find('.active-check').addClass('active-check-cheked');
        }
        else {
            $(this).parent().find('.active-check').removeClass('active-check-cheked');
        }
    });
</script>