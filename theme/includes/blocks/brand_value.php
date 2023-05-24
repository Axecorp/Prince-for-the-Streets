<section class="section brand-value"  id="section4">

    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"];?></h2>
        <div class="screen">
            <div class="dots">
                <svg class="desktop" width="54" height="14" viewBox="0 0 54 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="7" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                    <circle cx="27" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                    <circle cx="47" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                </svg>
            </div>
            <div class="hearts">
                <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                </svg>
                <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                </svg>
                <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                </svg>
            </div>
            <div class="screen-wrap">
                <?php 
                $i = 1;
                foreach($block["backgrounds"] as $bg){?>
                    <img src="<?php echo $bg["background"]?>" alt="" class="bg" id="bg<?php echo $i;?>">    
                <?php 
                $i++;    
                } ?>
            </div>
        </div>
        <div class="blurb">
            <div class="box">
                <div class="title">
                    <?php echo $block["blurb"]["title"]?>
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
        <div class="numbers">
            <?php echo $block["numbers"]?>
        </div>
        <div class="scroll-down" href="#section5">
            <div class="text"><?php echo $block["scroll_down"]?></div>
            <a href="#section5">
                <svg class="icon" width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14.5 14.5L28 1" stroke="black" stroke-opacity="0.24" stroke-linecap="round"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="stat-marquee">
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
            <div class="marquee-item gradient-text"><?php echo $block["stat"]?></div>
    </div>
</section>