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
        color: red;
        margin-right: 35px;
    }

    .address-name .fa-pencil {
        color: #2396f3;
        cursor: pointer;
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

    .address-select label.checked {
        background: #2196f3;
        border: 1px solid transparent;
    }

    .address-select label::after {
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
?>
<div class="addressScroll">
    <div id="address-bar">
        <ul class="main-ul">
            <?php
            foreach ($address as $row) {
                ?>
                <li class="main-li">
                    <div class="address">
                        <div class="address-name">
                            <h3><?= $row['user_name'] ?></h3>
                            <i onclick="deleteAddress(<?= $row['id'] ?>)" class="fa fa-close" aria-hidden="true"></i>
                            <i onclick="editAddress(<?= $row['id'] ?>)" class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <div class="location">
                            <div class="address-location">
                                <ul>
                                    <li class="state">
                                        استان :
                                        <span>
								<?= $row['provinceName'] ?>
							</span>
                                    </li>
                                    <li class="city">
                                        شهر :
                                        <span>
								<?= $row['cityName'] ?>
							</span>
                                    </li>
                                    <!--                                    <li class="distric">-->
                                    <!--                                        محله :-->
                                    <!--                                        <span>-->
                                    <!--								--->
                                    <!--							</span>-->
                                    <!--                                    </li>-->
                                </ul>
                            </div>
                            <div class="complete-address">
                                <span class="1st">آدرس :</span>
                                <span class="2st">قم.خیابان صدوقی.خیابان یاسمن.پلاک120</span>
                                <div class="postal-code">
                                    کد پستی :<?= $row['postal_code'] ?>
                                </div>
                            </div>
                            <div class="tell">
                                <div class="phone">
                                    شماره تلفن ثابت :
                                    <span>
							<?= $row['phone'] ?>
						</span>
                                </div>
                                <div class="emergency">
                                    شماره تلفن ضروری :
                                    <span>
							<?= $row['mobile'] ?>
						</span>
                                </div>
                            </div>
                        </div>
                        <div class="address-select">
                            <input type="radio" name="address">
                            <label class=""></label>
                            <span class="address-txt">
							به این آدرس ارسال می‌شود .
				</span>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <li class="main-li">
                <div class="add-address" onclick="modal()">
						<span>
							<i class="fa fa-plus" aria-hidden="true"></i>
							افزودن آدرس جدید
						</span>
                </div>
            </li>
        </ul>
    </div><!-----addressScroll----->
    <div class="next-address" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
    </div>
    <div class="prev-address" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
    </div>
</div><!-----addressScroll----->
<script>
    function deleteAddress(addressId) {
        var url = 'shipping/deleteAddress';
        var data = {'addressId': addressId};
        $.post(url, data, function (msg) {
            window.location = 'shipping';
        })
    }

    var editAddressId = '';

    function editAddress(addressId) {
        editAddressId = addressId;
        var url = 'shipping/editAddress/' + addressId;
        var data = {};
        $.post(url, data, function (msg) {
            $('input[name = user_name]').val(msg['user_name']);
            $('select[name = province]').val(msg['province']);
            $('select[name = city]').val(msg['city']);
            $('input[name = postal_code]').val(msg['postal_code']);
            $('textarea[name = address]').val(msg['address']);
            $('input[name = phone]').val(msg['phone']);
            $('input[name = mobile]').val(msg['mobile']);

            var province = msg['province'];
            var cityid = msg['city'];
            $('.cityList option').remove();

            $('.province option').each(function (index) {
                var value = $(this).attr('value');
                if (value == province) {
                    $(this).attr('selected', 'selected');
                    var url = 'shipping/getCity';
                    var data = {'province': value};
                    $.post(url, data, function (msg) {
                        $.each(msg, function (index, value) {
                            var city = value['name'];
                            var cityId = value['id'];
                            var selected = '';
                            if (cityid == cityId) {
                                var selected = 'selected';
                            }
                            var cityTag = '<option name="city" value="' + cityId + '"' + selected + '>' + city + '</option>';
                            $('.cityList').append(cityTag);
                            $('.cityList option[value = cityid]').val('selected', 'selected');
                        })
                    }, 'json');
                }
            });
            $('.modal').fadeIn(200);
            $('.subModal').css('display', 'block');
        }, 'json');
    }
</script><!-----edit address----->
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