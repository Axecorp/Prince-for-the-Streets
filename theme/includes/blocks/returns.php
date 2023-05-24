<?php
$counter = 1;
?>
<style>
    @media (max-width: 567px) {
        .returns{
            background-image: url(<?php echo  wp_get_attachment_image_url(197, "full")?>?>) !important ;
            background-position: top !important;
        }
    }
</style>
<section class="section returns" id="section2" style="background-image: url(<?php echo ($block["background_image"]);?>);">
    
    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"];?></h2>
        <div class="stats">
            <div class="top gradient-text">up to</div>
            <div class="numbers gradient-text"><?php echo $block["numbers"];?></div>
            <div class="stat gradient-text"><?php echo $block["stat"];?></div>
        </div>
        <div class="mobile-flex">
            <div class="description-blurb">
                <div class="heart">
                    <svg class="normal" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.325 1C11.846 1 10.4265 1.65661 9.5 2.69421C8.5735 1.65661 7.154 1 5.675 1C3.057 1 1 2.96172 1 5.45845C1 8.52261 3.89 11.0193 8.2675 14.8131L9.5 15.875L10.7325 14.805C15.11 11.0193 18 8.52261 18 5.45845C18 2.96172 15.943 1 13.325 1Z" stroke="white"/>
                    </svg>
                    <svg class="clicked" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.325 1C11.846 1 10.4265 1.65661 9.5 2.69421C8.5735 1.65661 7.154 1 5.675 1C3.057 1 1 2.96172 1 5.45845C1 8.52262 3.89 11.0193 8.2675 14.8131L9.5 15.875L10.7325 14.805C15.11 11.0193 18 8.52262 18 5.45845C18 2.96172 15.943 1 13.325 1Z" fill="white" stroke="white"/>
                    </svg>
                </div>
                <div class="title"><?php echo $block["description_blurb"]["title"]?></div>
                <div class="testimony"><?php echo $block["description_blurb"]["testimony"]?></div>
                <div class="description"><?php echo $block["description_blurb"]["description"]?></div>
            </div>
            <div class="cta"> 
                <div class="peeker"><div class="peeker-wrap"><?php echo $block["cta"]["question"];?></div></div>
                <div class="box">
                    <div class="box-wrap">
                        <div class="cross"><svg fill="#000000" viewBox="0 0 24 24" id="cross" xmlns="http://www.w3.org/2000/svg" class="icon multi-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary-stroke" d="M19,19,5,5M19,5,5,19" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg></div>
                        <div class="question"><?php echo $block["cta"]["question"];?></div>
                        <div class="colors">Color -&nbsp;
                            <span class="color-text-wrap">
                            <?php foreach($block["cta"]["colors"] as $color){?>
                                <span class="color-text"><?php echo $color["name"];?></span>
                                <?php } ?>
                            </span>
                            <span class="colors-wrap">
                                <?php foreach($block["cta"]["colors"] as $color){?>
                                    <span class="color" style="background-color: <?php echo $color["color"];?>;"></span>
                                <?php } ?>
                            </span>
                        </div>
                        <div class="cta-main-text"><?php echo $block["cta"]["main_text"];?></div>
                    </div>
                </div>
                <a href="<?php echo $block["cta"]["button"]["link"]["url"];?>" class="button">
                    <div class="icon"><img src="<?php echo $block["cta"]["button"]["icon"];?>" alt=""></div>
                    <div class="link"><?php echo $block["cta"]["button"]["link"]["title"];?></div>
                </a>
            </div>
        </div>
        <div class="smallprints">
            <?php foreach($block["gallery"] as $item){?>
                <div class="smallprint <?php if ($counter == 4){ echo "show-model"; }?>">
                    <img src="<?php echo $item["smallprint"];?>" alt="">
                </div>
            <?php 
            $counter += 1;
        } ?>
        <?php $counter = 1;?>
        </div>
        <div class="media">
            <?php foreach($block["gallery"] as $item){?>
                <?php if($item["media_type"] == "image"){?>
                    <div class="media-item <?php if ($counter == 4){ echo "hide"; }?>">
                        <img src="<?php echo $item["image"];?>" alt="">
                    </div>
                <?php } elseif($item["media_type"] == "video"){?>
                    <div class="media-item video">
                        <video autoplay loop muted src="<?php echo $item["video"];?>">Your browser does not support the video tag.</video>
                    </div>
                <?php } 
                $counter += 1;
                ?>
            <?php } 
            $counter = 1;?>
        </div>
        <div class="scroll-down">
            <a href="#section3">
                <div class="icon">
                    <img src="<?php echo $block["scroll_down_button"]["icon"]?>" alt="">
                </div>
            </a>
            <div class="text"><?php echo $block["scroll_down_button"]["text"]?></div>
        </div>
    </div>
</section>