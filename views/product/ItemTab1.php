<?php
    $description = $data[0];
?>
<!--    <h2>-->
<!--        <i class="fa fa-caret-left" aria-hidden="true"></i>-->
<!---->
<!--    </h2>-->
<!--    <p>-->
<!--        چندسالی می‌شود که عادت کرده‌ایم، گوشی‌های سامسونگ را از روی کلید‌های زیر نمایشگرشان بشناسیم؛ اما گلکسی اس ۸ با اینکه همان زبان طراحی گوشی‌های جدید سامسونگ را دارد، معادلاتمان را در مورد گوشی‌های سامسونگ به هم زد. نمایشگری کشیده و براق که رنگ‌ها در آن دلربایی می‌کنند، تمام چیزی است که قاب جلویی اس ۸ را پوشانده است. علاوه‌بر سنت‌شکنی به‌موقع سامسونگ در اس ۸، این گوشی را می‌توان مظهر طراحی لوکس برای گوشی‌های هوشمند این روزهای بازار دانست. زیبایی تنها بخشی از چیزی است که قرار است اس ۸ به رخ بکشد؛ در پس این ظاهر زیبا، سامسونگ برای سورپرایز کردنتان، ویژگی‌هایی را قرار داده است که در موردشان بیشتر خواهید خواند.-->
<!--    </p>-->
    <div class="tabList">
        <?php

        foreach ($description as $row){
            ?>

            <div class="tabListChild">
                <h3>
                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                   <?= $row['title'] ?>
                </h3>
                <div class="tabContent">
                    <?= $row['description']; ?>
                </div>
            </div>

        <?php
        }
        ?>
    </div><!--tabLists-->
<!--item-tab 1-->

<script>
    $('.tabListChild h3').click(function(){
        var tabContent = $(this).parent().find('.tabContent');
        var i = $(this).find('i');
        var tabDisplay = tabContent.css('display');
        if(tabDisplay == 'block'){
            i.removeClass('fa-minus-square');
            i.addClass('fa-plus-square');
            tabContent.slideUp(200);
        }else{
            i.removeClass('fa-plus-square');
            i.addClass('fa-minus-square');
            tabContent.slideDown(200);
        }
    });




</script><!--item-tab 1-->