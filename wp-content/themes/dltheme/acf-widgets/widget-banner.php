
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_button = get_sub_field('section_button');
        $rowIndex = get_row_index();
    ?>
    
    <section class="banner" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="banner_wrap">
          <h2 class="banner_title"><?php echo $section_title ?></h2>
          <?php 
            if($section_subtitle){
              ?>
                <div class="banner_desc"><?php echo $section_subtitle ?></div>
              <?php
            }
          ?>
          <div class="theme_button">
            <a href="<?php echo $section_button['url'] ?>"><?php echo $section_button['title'] ?></a>
          </div>
        </div>
      </div>
    </section>

