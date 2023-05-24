<style>
    @media (max-width: 567px) {
        .conversion{
            background-image: url(<?php echo  wp_get_attachment_image_url(198, "full")?>?>) !important ;
            background-position: top !important;
        }
    }
</style>
<section class="section conversion" id="section3"  style="background-image: url(<?php echo ($block["background_image"]);?>);">

    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"];?></h2>
        <div class="stats">
            <div class="top gradient-tex">up to</div>
            <div class="numbers gradient-tex"><?php echo $block["numbers"];?></div>
            <div class="stat gradient-tex"><?php echo $block["stat"];?></div>
        </div>
        <div class="blurb">
            <div class="box">
                <div class="title"><?php echo $block["blurb"]["title"]?></div>
                <div class="dropdowns">
                    <img src="<?php echo $block["blurb"]["dropdowns"]?>" alt="">
                </div>
                <div class="description">
                    <?php echo $block["blurb"]["description"]?>
                </div>
            </div>
            <a href="<?php echo $block["blurb"]["button"]["link"]["url"];?>" class="button">
                <div class="icon"><img src="<?php echo $block["blurb"]["button"]["icon"];?>" alt=""></div>
                <div class="link"><?php echo $block["blurb"]["button"]["link"]["title"];?></div>
            </a>
        </div>
        <div class="scroll-down">
            <a href="#section4">
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_url(27, "full")?>" alt="">
                </div>
            </a>
            <div class="text"><?php echo $block["scroll_down"]?></div>
        </div>
    </div>
</section>