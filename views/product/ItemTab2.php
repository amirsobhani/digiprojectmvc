<?php
$fanni = $data[1];
?>
<h4>
    مشخصات فنی
</h4>
<span class="productName"> گوشي موبايل سامسونگ مدل Galaxy S8 G950FD دو سيم کارت </span>
<?php
foreach ($fanni as $attr_parent) {
    $children = $attr_parent['children'];
    ?>
    <div class="product-properties">
        <h4><i class="fa fa-caret-left" aria-hidden="true"></i><?= $attr_parent['title'] ?></h4>
        <?php
        foreach ($children as $child) {
            ?>
            <div class="pro-tab">
                <h5 class="properties-title"><?= $child['title'] ?></h5>
                <?php
                if ($child['value'] == '') {
                    ?>
                    <p class="properties-meta">--</p>
                    <?php
                }else{
//                    $value = unserialize($child['value']);
//                    $value = $child['value'];
//                    foreach ($value as $row){
//                        ?>
                        <p class="properties-meta"><?= $child['value'] ?></p>
                        <?php
                    }
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>

<!---
    <div class="product-properties">
        <h4><i class="fa fa-caret-left" aria-hidden="true"></i> مشخصات کلي</h4>
        <div class="pro-tab">
            <h5 class="properties-title">تعداد سيم کارت</h5>
            <p class="properties-meta">دو سيم کارت </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">قطع سيم کارت</h5>
            <p class="properties-meta">سايز نانو (8.8 × 12.3 ميلي‌متر) </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">ابعاد</h5>
            <p class="properties-meta"> 8 × 68.1 × 148.9 ميلي‌متر </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">وزن</h5>
            <p class="properties-meta">149 گرم </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">ساختار بدنه</h5>
            <p class="properties-meta">مجهز به حس‌گر اثر انگشت (Fingerprint Sensor) </p>
            <p class="properties-meta">فلز و شیشه (محافظ گوریلا گلس 5 روی قاب پشتی) </p>
            <p class="properties-meta">کاربرد شیار دوم برای سیم‌کارت یا کارت حافظه‌ی جانبی </p>
            <p class="properties-meta">دارای گواهینامه IP68 مقاوم در برابر گرد و غبار و آب تا عمق 1.5 متر و به مدت 30 دقیقه </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">وزن</h5>
            <p class="properties-meta">149 گرم </p>
        </div>
    </div>
    <div class="product-properties">
        <h4><i class="fa fa-caret-left" aria-hidden="true"></i>دوربین</h4>
        <div class="pro-tab">
            <h5 class="properties-title">رزولوشن عکس</h5>
            <p class="properties-meta"> 12.0 مگاپيکسل  </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">فناوري فوکوس</h5>
            <p class="properties-meta">Phase Detection  </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">فيلمبرداري</h5>
            <p class="properties-meta"> رزولوشن 2160 × 3840 و سرعت 30 فریم بر ثانیه (2160p@30FPS)  </p>
            <p class="properties-meta">رزولوشن 1080 × 1920 و سرعت 60 فریم بر ثانیه (1080p@60FPS)  </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">ساير قابليت‌هاي دوربين</h5>
            <p class="properties-meta">دارای دریچه‌ی دیافراگم f/1.7 </p>
            <p class="properties-meta">فاصله کنونی لنز 26 میلی‌متر (Focus Length 26 mm) </p>
            <p class="properties-meta">سایز سنسور 1/2.5 اینچ (''Sensor Size 1/2.5)  </p>
            <p class="properties-meta">ثبت تصاویر با پیکسل‎هایی به سایز 1.4 میکرومتر (1.4µm Pixel Size) </p>
        </div>
        <div class="pro-tab">
            <h5 class="properties-title">دوربين سلفي</h5>
            <p class="properties-meta">مجهز به فناوری فوکوس اتوماتیک (Autofocus)  </p>
            <p class="properties-meta">دارای دریچه‌ی دیافراگم f/1.7   </p>
            <p class="properties-meta">قابلیت استفاده از هر دو دوربین در هنگام مکالمه تصویری (Dual Video Call)   </p>
        </div>
    </div>
--->
<!--item-tab 2-->
