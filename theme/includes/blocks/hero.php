<?php
 $bg = $block["background_image"];
 $heading = $block["heading"];
 $tagline = $block["tagline"];
 $description = $block["description"];
 $button = $block["button"];
 $gif1 = $block["card"]["product_gif"];
 $prd_desc = $block["card"]["product_description"];
 $rating = $block["card"]["rating"];
?>
<div class="graphics">
    <video autoplay loop muted class="model" src="<?php echo wp_get_attachment_url(191)?>"></video>
    <video autoplay loop muted class="model" src="<?php echo wp_get_attachment_url(189)?>"></video>
    <video autoplay loop muted class="model" src="<?php echo wp_get_attachment_url(190)?>"></video>
</div>
<style>
    @media (max-width: 567px) {
        .hero{
            background-image: url(<?php echo  wp_get_attachment_image_url(195, "full")?>?>) !important ;
        }
    }
</style>
<!-- <div class="logo"><?php echo $heading; ?></div> -->
<section class="section hero" id="section1" style="background-image: url(<?php echo $bg;?>);">    

    <img class="shopify-tag-right" src="<?php echo wp_get_attachment_image_url(192, "full")?>" alt="">
    <img class="shopify-tag-left" src="<?php echo wp_get_attachment_image_url(175, "full")?>" alt="">
    <div class="inner">
        <div class="heading-m"><?php echo $heading; ?></div>
        <div class="card">
            <div class="card-content">
                <video autoplay loop muted class="model1" src="<?php echo wp_get_attachment_url(188)?>"></video>
                <div class="tagline-m"><?php echo $tagline?></div>
                <div class="card-description">
                    <?php echo $prd_desc;?>
                </div>
                <div class="rating">
                    <img src="<?php echo $rating;?>" alt="">&nbsp;(1000)
                </div>
            </div>
        </div>
        <div class="content">
            <div class="heading"><?php echo $heading; ?></div>
            <div class="tagline"><?php echo $tagline; ?></div>
            <div class="bottom">
                <a class="button" href="<?php echo $button["url"]?>">
                    <img src="<?php echo wp_get_attachment_image_url(28, "full")?>" alt="">
                     <?php echo $button["title"]?></a>
                <div class="description"><?php echo $description?></div>
            </div>
        </div>
        <a class="button-m" href="<?php echo $button["url"]?>">
            <img src="<?php echo wp_get_attachment_image_url(28, "full")?>" alt="">
            <?php echo $button["title"]?>
        </a>
    </div>
    <div class="scroll-down" >
        <div class="text">get a tour</div>
        <a href="#section2">
            <div class="icon">
                <img src="<?php echo wp_get_attachment_image_url(27, "full")?>" alt="">
            </div>
        </a>
    </div>
</section>