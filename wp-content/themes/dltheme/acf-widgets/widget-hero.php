
   <?php  
        $hero_title = get_sub_field('hero_title'); 
        $hero_subtitle = get_sub_field('hero_subtitle'); 
        $hero_top_title = get_sub_field('hero_top_title'); 
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
                  ?>
                    <div class="theme_button <?php echo $btn_color ?>">
                        <a href="<?php echo $btn['button']['url'] ?>"><?php echo $btn['button']['title'] ?></a>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
          <figure>
              <img src="<?php echo $hero_image['url'] ?>" alt="<?php echo $hero_image['alt'] ?>">
          </figure>
        </div>
      </div>
    </section>

