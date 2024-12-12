
   <?php  
        $hero_title = get_sub_field('hero_title'); 
        $hero_subtitle = get_sub_field('hero_subtitle'); 
        $hero_top_title = get_sub_field('hero_top_title'); 
        $use_video = get_sub_field('use_video'); 
        $video_iframe = get_sub_field('video_iframe'); 
        $hero_image = get_sub_field('hero_image'); 
        $hero_buttons = get_sub_field('hero_buttons'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="hero" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="section_wrap">
          <div class="hero_content">
            <div class="top_title"><?php echo $hero_top_title ?></div>
            <h1 class="page_title"><?php echo $hero_title ?></h1>
            <div class="hero_subtitle"><?php echo $hero_subtitle ?></div>
            <div class="hero_buttons">
              <?php 
                foreach($hero_buttons as $btn){
                  $btn_color = $btn['color'] == "fill" ? "": "white";
                  $open_popup = $btn['open_popup'] ? "show_popup" : "";
                  ?>
                    <div class="theme_button <?php echo $btn_color ?>">
                        <a href="<?php echo $btn['button']['url'] ?>" class="<?php echo $open_popup ?>"><?php echo $btn['button']['title'] ?></a>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
          <?php 
            if($use_video){
              ?>
                <div class="video_iframe"><?php echo $video_iframe ?></div>
              <?php
            }else{
              ?>
                <figure>
                    <img src="<?php echo $hero_image['url'] ?>" alt="<?php echo $hero_image['alt'] ?>">
                </figure>
              <?php
            }
          ?>
        </div>
      </div>
    </section>
                