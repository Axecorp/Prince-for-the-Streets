<section class="section shopify" id="section5" >
    <!-- <img src="<?php echo $block["made_for_shopify_tag"]?>" alt="" class="shopify-tag"> -->
    <div class="inner">
        <div class="heading" style="background: url(<?php echo $block["heading_background"]?>);">
            <?php echo $block["heading"];?>
        </div>
        <div class="content">
            <div class="left">
                <div class="subheading">
                    <?php echo $block["subheading"]?>
                </div>
                <div class="smallprints-shopify">
                    <?php 
                    $i = 0;
                    foreach($block["gallery"] as $item){
                        $i+=1; ?>
                        <div class="smallprint-shopify <?php if($i == 4){ echo "big-link-trigger"; }?>">
                            <img src="<?php echo $item["smallprint"];?>" alt="">
                        </div>
                    <?php
                } ?>
                </div>
                <div class="listed-description">
                    <?php echo $block["listed_description"]?>
                </div>
            </div>
            <div class="right">
                <?php foreach($block["gallery"] as $item){?>
                    <?php if($item["media_type"] == "image"){?>
                        <div class="media-item-shopify image">
                            <img src="<?php echo $item["image"];?>" alt="">
                        </div>
                    <?php } elseif($item["media_type"] == "video"){?>
                        <div class="media-item-shopify video">
                            <video autoplay loop muted src="<?php echo $item["video"];?>">Your browser does not support the video tag.</video>
                        </div>
                    <?php } elseif($item["media_type"] == "link"){?>
                        <div class="media-item-shopify big-link">
                            <img src="<?php echo $item["background_image"]?>" alt="">
                            <a href="<?php echo $item["link"]["url"];?>" class="button-3d">
                                <div class="icon"><svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.01404 19.136C1.68077 19.9203 0 18.959 0 17.4122V2.58766C0 1.04082 1.68077 0.0795102 3.01404 0.863785L15.6149 8.27605C16.9295 9.04935 16.9295 10.9505 15.6149 11.7238L3.01404 19.136Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="link"><?php echo $item["link"]["title"];?></div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="about">
            <div class="heading-m" style="background: url(<?php echo $block["heading_background"]?>);">
                <?php echo $block["heading"];?>
            </div>
            <div class="about-heading">about us ...</div>
            <p class="about-description">
                <?php echo $block["description"]?>
            </p>
        </div>
        <a href="<?php echo $block["button"]["url"];?>" class="button">
            <div class="icon"><img src="<?php echo wp_get_attachment_image_url(28, "full")?>" alt=""></div>
            <div class="link"><?php echo $block["button"]["title"];?></div>
        </a>
    </div>
</section>