<style>
    .continue-cart {
        width: 100%;
        background: #fff;
    }

    .continue-cart::after {
        content: "";
        display: block;
        clear: both;
    }

    .continue-cart .right {
        display: inline-block;
        float: right;
    }

    .continue-cart .left {
        display: inline-block;
        direction: rtl;
        background: #4CAF50;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
    }

    .continue-cart .right p {
        font-size: 11px;
        margin: 20px 0;
        direction: rtl;
    }

    .continue-cart .right h2 {
        direction: rtl;
        margin: 30px 0 5px;
    }

    .continue-cart .right h2 i {
        margin-left: 7px;
        color: #2196F3;
    }

    .cart-wrappper {
        margin: 0 10px;
    }

    #cart-div {
        background: #fff;
        margin-bottom: 15px;
    }

    .go-main {
        display: inline-block;
        direction: rtl;
        background-color: #969ba8;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
    }

    .reserv-alert {
        direction: rtl;
        font-size: 13px;
        color: red;
        display: inline-block;
        position: relative;
        top: -70px;
        right: -10px;
    }
</style><!--continue-cart--->
<style>
    .cart-table {
        width: 100%;
        margin-bottom: 30px;
    }

    .cart-table table {
        width: 100%;
        direction: rtl;
    }

    .cart-table table tr td {
        text-align: center;
        vertical-align: middle;
        border: 1px solid #eee;
    }

    .cart-table table tr td:first-child {
        text-align: right !important;
    }

    .cart-table table thead {
        line-height: 22px;
        background: #F7F9FA;
        text-align: center;
        font-size: 13px;
    }

    .cart-table table thead tr td {
        border: 1px solid #eee;
        padding: 10px 0;
    }

    .cart-table table thead tr td:first-child {
        text-align: center !important;
    }

    .cart-table table thead tr td:last-child {
        border-right: none;
    }

    .cart-table table thead tr td:nth-child(5) {
        border-left: none;
    }

    .product-table-img {
        display: inline-block;
        float: right;
    }

    .product-table-img img {
        width: 100px;
        margin: 30px 10px;
    }

    .product-table-meta {
        display: inline-block;
        float: right;
        margin: 30px 5px;
    }

    .product-table-meta h2 {
        font-size: 13px;
        width: 300px;
        line-height: 30px;
        font-weight: 800;
    }

    .product-table-meta h3 {
        font-size: 10px;
        line-height: 30px;
        font-weight: 800;
    }

    .product-table-color p {
        display: inline-block;
        font-size: 11px;
        line-height: 30px;
    }

    .product-table-color .color {
        width: 18px;
        height: 18px;
        display: inline-block;
        border-radius: 100%;
        position: relative;
        top: 5px;
    }

    .product-table-color span:last-child, .warranty {
        font-size: 12px;
        color: #777;
    }

    .cart-table .delete {
        border-left: 0;
        background: #ffedee;
        border-right: 0;
        color: #ed4848;
        width: 30px;
        cursor: pointer;
    }

    .unitprice {
        width: 25%;
    }

    .seperate {
        margin: 14px 0;
        border-bottom: 1px dashed #e9e9e9;
        height: 1px;
        margin-left: 15px;
    }

    .unitprice-discoount tr {
        line-height: 30px;
    }

    .unitprice-discoount tr td {
        border: none !important;
        padding-right: 15px;
        font-size: 13px;
    }

    .unitprice-discoount tr:last-child td {
        color: #00B12A;
        font-size: 21px;
    }

    .red {
        color: #ff6b6b;
    }

    .cart-table tr.gift td.last span {
        color: #ff6b6b;
        font-size: 19px;
        display: inline-block;
        margin-top: -12px;
        position: absolute;
        right: -7px;
        top: 50%;
        transform: rotate(-90deg);
        font-weight: 800;
    }

    .cart-table tr.gift td.last {
        position: relative;
    }
</style><!---cart-table--->
<style>
    .wrapper-shipping {
        background: #fff;
        padding: 20px;
    }

    .shipping {
        background-color: #fff;
        border: 1px solid #c0f0c1;
        width: 96%;
        margin: 10px auto;
        padding: 10px;
        cursor: pointer;
    }

    .shipping .right {
        float: right;
    }

    .shipping .ship-img {
        float: right;
    }

    .ship-img img {
        max-width: 85px;
    }

    .ship-title {
        float: right;
        direction: rtl;
        margin: 0 20px;
    }

    .ship-title h2 {
        font-size: 15px;
        line-height: 25px;
    }

    .ship-title p {
        font-size: 13px;
        line-height: 25px;
        color: #777;
    }

    .shipping .left {
        line-height: 25px;
        padding-left: 40px;
    }

    .shipping .left p {
        font-size: 14px;
    }

    .shipping .left span {
        margin: 12px;
        white-space: nowrap;
        color: #4caf50;
        font-size: 17px;
    }

    .next-shipment {
        height: 70px;
        background-color: #fff;
    }

    .next-shipment-btn {
        display: inline-block;
        line-height: 30px;
        font-size: 14px;
        background-color: #3ca3f4;
        color: #fff;
        border-radius: 2px;
        padding: 5px 10px;
        margin-left: 25px;
        cursor: pointer;
    }

    .factor-pack {
        direction: rtl;
        font-size: 13px;
        padding: 15px 0;
    }

    .factor-pack i {
        float: right;
        margin-left: 10px;
        margin-top: 9px;
        color: #2396f3;
    }

    .factor-pack p {
        display: inline-block;
    }

    .factor-pack form {
        display: inline-block;
    }

    .factor-pack form span input {
        position: relative;
        top: 4px;
        right: -3px;
    }

    .factor-pack form span {
        margin-right: 10px;
    }

    .factor-message-green {
        direction: rtl;
        padding: 12px 10px;
        background: #f7fff7;
        color: #4caf50;
        border: 1px solid #c0f0c1;
        font-size: 14px;
    }

    .factor-message-brown {
        display: none;
        direction: rtl;
        padding: 12px 10px;
        background: #fffcda;
        color: #7C6A26;
        border: 1px solid #E2C868;
        font-size: 14px;
    }

    .factor-message-green i, .factor-message-brown i {
        float: right;
        margin-left: 10px;
    }

    .shipping-route {
        margin: 20px 0 60px;
    }

    .shipping-route::after {
        content: "";
        display: block;
        clear: both;
    }

    .return-cart {
        float: right;
    }

    .return-cart span {
        background-color: #969BA8;
        padding: 5px 15px;
        color: #fff;
        border-radius: 2px;
        font-size: 13px;
        cursor: pointer;
    }

    .next-step span {
        padding: 5px 15px;
        color: #fff;
        border-radius: 2px;
        font-size: 13px;
        cursor: pointer;
        background-color: #4CAF50;
    }
</style><!---shipping--->
<style>
    .address-head {
        direction: rtl;
    }

    .address-head::after {
        content: "";
        display: block;
        clear: both;
    }

    .add {
        display: inline-block;
        float: right;
        padding: 10px;
        margin: 18px 15px;
        color: #FFFFFF;
        background-color: #999 !important;
        font-size: 13px;
        cursor: pointer;
        box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
    }

    .address-title {
        display: inline-block;
        line-height: 22px;
        padding: 5px 0;
        margin: 20px 0;
        float: right;
    }

    .address-title i {
        float: right;
        margin-left: 10px;
        color: #2396f3;
    }

    .address-title h2 {
        float: right;
    }
</style><!---address-head--->
<style>
    .complete-price {
        width: 590px;
        border: 1px solid #c0f0c1;
        margin-bottom: 30px;
    }

    .complete-price::after {
        content: "";
        display: block;
        clear: both;
    }

    .price {
        height: 55px;
        line-height: 55px;
        padding: 0 40px 0 0;
        border-bottom: 1px solid #c0f0c1;
    }

    .discount {
        display: inline-block;
        text-align: center;
        float: right;
        min-width: 200px;
        font-size: 13px;
        padding: 5px;
        line-height: 20px;
        position: relative;
        top: 7px;
        direction: rtl;
    }

    .discount::after {
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 9px 0 10px 8px;
        border-color: transparent transparent transparent #fff;
        position: absolute;
        left: 5px;
        top: 11px;
    }

    .discount span:first-child {
        background: #FF7272;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }

    .discount span:last-child {
        background: #FF5252;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }

    .lable {
        display: inline-block;
        direction: rtl;
        color: #818181;
        font-size: 14px;
        width: auto;
        margin-left: 60px;
    }

    .lable-price {
        display: inline-block;
        float: left;
        direction: rtl;
        font-size: 20px;
    }

    .toman {
        font-size: 12px;
        margin: 0 15px;
    }

    .pay-price {
        height: 55px;
        line-height: 55px;
        width: 100%;
        float: left;
        background-color: #F7FFF7;
    }

    .green {
        color: #4caf50 !important;
    }
</style><!---complete-price-->
<div id="main" onclick="close()">
    <div id="content">
        <?php
        require('Breadcrumb.php');
        require('OrderRoute.php');

        $province = $data['province'];

        ?>

        <div class="address-head">
            <div class="address-title">
                <i class="fa fa-caret-left" aria-hidden="true"></i>
                <h2>
                    انتخاب آدرس
                </h2>
            </div>
            <div onclick="modal()" class="add dk-box">
                افزودن آدرس جدید
            </div>
        </div><!---address-head--->

        <style>
            .address {
                display: inline-block;
                float: right;
                width: 490px;
                background-color: #FBFDFC;
                position: relative;
            }

            .address-name {
                line-height: 50px;
                padding: 0 15px;
            }

            .address-name h3 {
                display: inline-block;
                direction: rtl;
                float: right;
            }

            .address-name .fa-close {
                cursor: pointer;
                color: red;
                margin-right: 35px;
            }

            .address-name .fa-pencil {
                color: #2396f3;
            }

            .address-location {
                direction: rtl;
                border-bottom: 1px solid #f0f0f0;
            }

            .address-location::after {
                content: "";
                display: block;
                clear: both;
            }

            .address-location ul li {
                line-height: 50px;
                float: right;
                width: 40%;
                display: inline-block;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .location {
                background-color: #fff;
                padding: 0 15px;
            }

            .complete-address {
                direction: rtl;
                border-bottom: 1px solid #f0f0f0;
                line-height: 50px;
                font-size: 14px;
                text-align: center;
            }

            .map-hint {
                line-height: 33px;
                color: #7c6a26;
                background: #fffcda;
                display: inline-block;
                padding: 0 10px;
                border-radius: 4px;
                cursor: pointer;
            }

            .tell {
                direction: rtl;
                font-size: 13px;
                line-height: 50px;
            }

            .phone {
                display: inline-block;
                margin-right: 10px;
            }

            .emergency {
                display: inline-block;
                margin-right: 50px;
            }

            .address-select {
                background: #f7fff7;
                border-top: 1px solid #c0f0c1;
                padding: 0 15px;
                line-height: 50px;
                direction: rtl;
                text-align: center;
                font-size: 14px;
            }

            .address-select label {
                width: 14px;
                height: 14px;
                display: inline-block;
                transition: none;
                position: relative;
                border-radius: 100%;
                right: -2px;
                top: 4px;
                background: #fff;
                border: 1px solid #ccc;
            }

            .address-select label.checked, .sel-post label.checked {
                background: #2196f3;
                border: 1px solid transparent;
            }

            .address-select label::after, .sel-post label::after {
                position: absolute;
                top: 5px;
                left: 5px;
                content: "";
                background: #fff;
                width: 2px;
                height: 2px;
                border-radius: 100%;
                border: 1px solid #fff;
            }

            .address-select input {
                cursor: pointer;
                position: relative;
                right: 20px;
                top: 2px;
                opacity: 0;
                z-index: 2;
            }
        </style><!----inner Address---->
        <style>
            .addressScroll {
                height: 305px;
                margin-bottom: 10px;
                position: relative;
            }

            .next-address {
                width: 50px;
                height: 305px;
                float: right;
                position: absolute;
                right: -60px;
            }

            .next-address i {
                text-align: center;
                display: block;
                line-height: 305px;
                color: #B8B8B8B8;
                cursor: pointer;
                box-shadow: -3px 0px 10px rgba(0, 0, 0, 0.2);
                height: 100%;
            }

            .prev-address {
                width: 50px;
                height: 305px;
                float: left;
                position: absolute;
                left: -60px;
            }

            .prev-address i {
                text-align: center;
                display: block;
                line-height: 305px;
                color: #B8B8B8B8;
                cursor: pointer;
                box-shadow: 3px 0px 10px rgba(0, 0, 0, 0.2);
                height: 100%;
            }

            .add-address {
                margin-right: 10px;
                float: right;
                width: 140px;
                border: 5px dashed #cdcdcd;
                box-sizing: border-box;
                min-height: 305px;
                cursor: pointer;
                position: relative;
            }

            .add-address span {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) rotate(-90deg);
                white-space: nowrap;
                color: #9ea4b0;
                font-size: 25px;
                min-height: 32px;
                direction: rtl;
            }

            #address-bar {
                overflow: hidden;
                float: right;
                width: 1190px;
                height: 303px;
            }

            #address-bar::after {
                content: "";
                display: block;
                clear: both;
            }

            #address-bar ul li {
                float: right;
                margin-left: 10px;
            }

            .main-ul {
                float: right;
                width: 1500px;
                overflow: hidden;
                height: 100%;
            }

            .postal-code {
                display: block;
                margin: 8px 0px;
                line-height: 33px;
                color: #7c6a26;
                background: #fffcda;
                padding: 0 10px;
                border-radius: 4px;
                cursor: pointer;
            }
        </style><!-----addressScroll----->
        <?php
        $address = $data['address'];

        require('AddressScroll.php');
        require('ShippingType.php');
        ?>

        <div class="shipping-route">
            <div class="return-cart">
                <a href="cart">
                   <span>
					بازگشت به سبد خرید
				    </span>
                </a>
            </div>
            <div class="next-step">
                <a href="payment">
                    <span>
					ثبت اطلاعات و ادامه خرید
				    </span>
                </a>
            </div>
        </div>
    </div><!---Content--->
</div>
<style>
    .subModal {
        display: none;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 80;
    }

    .modal {
        display: none;
        width: 570px;
        background: #fff;
        margin: 0 auto;
        position: fixed;
        top: 14%;
        left: 31%;
        z-index: 100;
        border-radius: 4px;
        border: 1px solid #eee;
    }

    .familyname, .cityInfo, .address-input, .phone-number, .postalCode {
        text-align: right;
        margin: 20px 35px;
        direction: rtl;
    }

    .familyname input, .postalCode input {
        font-family: iran-sans;
        border: 1px solid #999;
        border-radius: 3px;
        width: 336px;
        padding-right: 10px;
    }

    .postalCode input {
        width: 394px !important;
    }

    .cityInfo select {
        width: 180px;
        height: 28px;
        border: 1px solid #999;
        border-radius: 2px;
        font-family: iran-sans;
        margin-left: 25px;
    }

    .address-input textarea {
        width: 405px;
        height: 90px;
        font-family: iran-sans;
        border: 1px solid #999;
        padding: 5px 10px;
        font-size: 14px;
        resize: vertical;
    }

    .address-input label {
        vertical-align: top;
    }

    .phone-number input {
        font-family: iran-sans;
        border: 1px solid #999;
        border-radius: 3px;
        width: 144px;
        padding-right: 10px;
    }

    .submit button {
        font-family: iran-sans;
        border: 1px solid #999;
        border-radius: 3px;
        padding-right: 10px;
        float: right;
        margin: 10px 30px 30px;
        cursor: pointer;
        padding: 5px 15px;
        color: #fff;
        background: #2396f3;
    }

    .close {
        text-align: right;
        padding: 10px;
    }

    .close span {
        color: #888;
        border: 1px solid #999;
        border-radius: 100%;
        width: 17px;
        height: 17px;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }

    .forceClose {
        display: none !important;
    }
</style>
<div class="subModal"></div>
<div class="modal">
    <form method="post">
        <div class="close" onclick="close()">
            <span>
                <i aria-hidden="true" class="fa fa-close"></i>
            </span>
        </div>
        <div class="familyname">
            <label>نام و نام خانوادگی :</label>
            <input name="user_name" placeholder="نام و نام خانوادگی خود را وارد کنید">
        </div>
        <div class="cityInfo">
            <label>استان :</label>
            <select class="province" name="province">
                <option>انتخاب استان</option>
                <?php
                foreach ($province as $row) {
                    ?>
                    <option onclick="city(<?= $row['id'] ?>)"
                            value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                    <?php
                }
                ?>
            </select>
            <label>شهر :</label>
            <select name="city" class="cityList">
                <option>انتخاب شهر</option>
            </select>
        </div>
        <div class="postalCode">
            <label>کد پستی :</label>
            <input name="postal_code" placeholder="کد پستی خود را وارد کنید">
        </div>
        <div class="address-input">
            <label>آدرس :</label>
            <textarea name="address" rows="3" placeholder="آدرس خود را وارد کنید . . ."></textarea>
        </div>
        <div class="phone-number">
            <label>تلفن ثابت :</label>
            <input name="phone" placeholder="شماره تلفن">
            <label>تلفن همراه :</label>
            <input name="mobile" placeholder="شماره همراه">
        </div>
    </form>
    <div class="submit">
        <button onclick="submitAddress()">ثبت آدرس</button>
    </div>
</div>

<script>


    function city(province) {
        var url = 'shipping/getCity/';
        var data = {'province': province};
        $('.cityList option').remove();
        $.post(url, data, function (msg) {
            $.each(msg, function (index, value) {
                var city = value['name'];
                var cityId = value['id'];
                var cityTag = '<option name="city" value="' + cityId + '">' + city + '</option>';
                $('.cityList').append(cityTag);
            })
        }, 'json')
    }

    function submitAddress() {
        var url = 'shipping/addAddress/' + editAddressId;
        var data = $('.modal form').serializeArray();
        $.post(url, data, function (msg) {
            window.location = 'shipping';
        });
        $('.modal').fadeOut(100);
        $('.subModal').css('display', 'none');
    }

    $('.close').click(function () {
        $('.modal').css('display', 'none');
        $('.subModal').css('display', 'none');
    });

    $('.subModal').click(function () {

        $('.modal').fadeOut(100);
        $('.subModal').css('display', 'none');
    });

    function modal() {
        editAddressId = '';
        $('.modal form').trigger('reset');
        $('.modal').fadeIn(200);
        $('.subModal').css('display', 'block');

        $('select[name = province]').val('انتخاب استان');
        $('select[name = city]').val('انتخاب شهر');
    }

    function factorN(tag) {
        $('.factor-message-green').fadeOut(0);
        $('.factor-message-brown').fadeIn(50);
    }

    function factorY(tag) {
        $('.factor-message-brown').fadeOut(0);
        $('.factor-message-green').fadeIn(50);
    }
</script><!---factor message--->
<script>
    var input = $('.address-select').find('input');
    input.click(function () {
        if ($(this).is(':checked')) {
            $('.address-select label').removeClass('checked');
            $(this).parent().find('label').addClass('checked');
        }
    });

    var postInput = $('.sel-post').find('input');
    postInput.click(function () {
        if ($(this).is(':checked')) {
            $('.sel-post label').removeClass('checked');
            $(this).parent().find('label').addClass('checked');
        }
    });
</script><!----address-select---->
<script>
    function addressScroll(direction, tag) {

        var slideTag = $(tag);
        var addressScrollUl = $('#address-bar').find('.main-ul');
        var liLength = addressScrollUl.find('.main-li').length;
        var liWidth = parseInt(addressScrollUl.find('.main-li').outerWidth());
        var ulWidthSize = ((liLength) * (liWidth));
        var maxMargin = (liLength - 3) * liWidth;
        if (maxMargin == 0 || maxMargin < 0) {
            maxMargin = 0;
        }
        var marginRight = parseFloat(addressScrollUl.css('margin-right'));
        addressScrollUl.css("width", ulWidthSize);

        if (direction == 'left') {
            marginRight = marginRight - liWidth;
            if ((-marginRight) > maxMargin) {
                marginRight = (-maxMargin);
            }
        }
        if (direction == 'right') {
            marginRight = marginRight + liWidth;
            if (marginRight > 0) {
                marginRight = 0;
            }
        }
        addressScrollUl.animate({'marginRight': marginRight}, 1000);
    }

    $('.next-address').click(function () {
        addressScroll('left', this);
    });
    $('.prev-address').click(function () {
        addressScroll('right', this);
    });
</script><!-----addressScroll----->
