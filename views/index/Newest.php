<div class="scroll-slider dk-box">
    <h3>جدیدترین ها</h3>
    <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
    </div>
    <div class="scroll-main">
        <ul>
            <?php
            $result = $data[4];
            foreach ($result as $row) {
            ?>
                <li>
                    <a href="<?= URL ?>product/index/<?= $row['id']; ?>" class="scroll-product">
                        <img style="width: 150px;" src="public/img/product gallery/<?= $row['id']; ?>/product220.jpg"/>
                        <span class="product-meta">
                            <?= $row['title']; ?>
                        </span>
                        <div class="product-price">
                            <span class="product-price-old"> <?= $row['price']; ?></span>
                            <span class="product-price-new"><?= $row['price_total']; ?> تومان</span>
                        </div>

                    </a>
                </li>
            <?php
            }
            ?>
<!--            <li>-->
<!--                <a class="scroll-product">-->
<!--                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>-->
<!--                    <span class="product-meta">-->
<!--گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>-->
<!--                    <div class="product-price">-->
<!--                        <span class="product-price-old">2,700,000</span>-->
<!--                        <span class="product-price-new">2,809,000 تومان</span>-->
<!--                    </div>-->
<!---->
<!--                </a>-->
<!--            </li>-->
        </ul>
    </div>
    <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
    </div>

</div><!--Scroll Slider-->