<?php $selectedBadge = 3 ?>
<div class="ProductCard">
    <a href="#product" class="ProductCard-link"></a>
    <div class="ProductCard-header">
        <div class="ProductCard-imageWrapper">
            <img src="http://localhost:5173/public/images/product-<?php echo rand(0,1); ?>.png" width="652" height="560" alt="" class="ProductCard-image ProductCard-image--primary" loading="lazy">
        </div>
        <?php if (rand(0,1) && $selectedBadge === 1) { ?>
            <div class="ProductCard-primaryBadges">
                <div class="Badge Badge--circle">
                    -10%
                </div>
            </div>
        <?php } ?>
        <?php $option = rand(0, 2); ?>
        <?php if ($option === 0 && $selectedBadge === 3) { ?>
            <div class="ProductCard-tertiaryBadges">
                <div class="Badge Badge--rectangle" style="--background: #132736">Novinka</div>
            </div>
        <?php } elseif ($option === 1) { ?>
            <div class="ProductCard-tertiaryBadges">
                <div class="Badge Badge--rectangle" style="--background: #00519E">Doprodej</div>
            </div>
        <?php } else { ?>
            <div class="ProductCard-tertiaryBadges">
                <div class="Badge Badge--rectangle" style="--background: #D91242">Sleva -18%</div>
            </div>
        <?php } ?>

        <div class="ProductCard-variants">
            <p class="ProductCard-variants__title">Zvolte velikost:</p>
            <ul class="ProductCard-variants__itemList">
               <li><a href="">XS</a></li>
               <li><a href="">S</a></li>
               <li><a href="">M</a></li>
               <li><a href="">L</a></li>
               <li><a href="">XL</a></li>
               <li><a href="">XXL</a></li>
               <li><a href="">XXXL</a></li>
               <li><a href="">XXXXL</a></li>
            </ul>
        </div>

    </div>
    <div class="ProductCard-body">
        <div>
            <?php if (rand(0,1) && $selectedBadge === 2) { ?>
            <div class="ProductCard-secondaryBadges">
                <div class="Badge Badge--rectangle" style="--color: #5ce62e">
                    štítek test
                </div>
            </div>
            <?php } ?>
            <h2 class="ProductCard-title">
                <?php if (rand(0,1)) { ?>
                    MacBook Pro 15" 2,5 GHz s Retina displejem, 512 GB (2015)
                <?php } else { ?>
                    iPhone 5s
                <?php } ?>
            </h2>
        </div>
        <?php $enableStock = false ?>
        <?php if ($enableStock) { ?>
            <div class="ProductCard-stock">
                <?php if (rand(0,1)) { ?>
                <div class="u-fontMedium u-textColorGreen">Skladem &gt; 5 ks</div>
                <?php } else { ?>
                    <div class="u-fontMedium u-textColorOrange">Naskladníme do 24 hodin</div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="ProductCard-footer">
        <div class="ProductCard-footerContent">
            <div class="ProductCard-priceWrapper">
                <span class="ProductCard-price">76&nbsp;990&nbsp;Kč</span>
                <span class="ProductCard-priceOld">76&nbsp;990&nbsp;Kč</span>
            </div>
            <?php $enableQuantity = false ?>
            <?php if ($enableStock) { ?>
                <div class="ProductCard-quantity">
                    <a href="#basket" class="Btn Btn--secondary Btn--style1 Btn-0--block Btn-xs--block Btn-sm--block ProductCard-btn ">Do košíku</a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>