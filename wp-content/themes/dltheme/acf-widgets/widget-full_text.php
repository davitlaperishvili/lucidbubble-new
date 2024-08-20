
   <?php  
        $section_title = get_sub_field('section_title'); 
        $title_tag = get_sub_field('title_tag'); 
        $section_text = get_sub_field('section_text'); 
        $section_image = get_sub_field('section_image'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="full_text" id="content<?php echo $rowIndex ?>">
        <div class="container">
          <div class="section_wrap <?php echo $image_first ?>">
            <<?php echo $title_tag ?> class="section_title"><?php echo $section_title ?></<?php echo $title_tag ?>>
            <?php 
              if($section_image){
                ?>
                  <figure>
                    <img src="<?php  echo $section_image['url'] ?>" alt="<?php  echo $section_image['alt'] ?>">
                  </figure>
                <?php
              }
            ?>
            <div class="section_text"><?php echo $section_text ?></div>
          </div>
        </div>
    </section>