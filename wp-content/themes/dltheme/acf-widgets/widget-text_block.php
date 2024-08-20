
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text'); 
        $section_image = get_sub_field('section_image'); 
        $image_first = get_sub_field('image_first') ? "reversed" : "";
        $section_buttons = get_sub_field('section_buttons'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="text_block" id="content<?php echo $rowIndex ?>">
        <div class="container">
          <div class="section_wrap <?php echo $image_first ?>">
            <figure>
                <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
            </figure>
            <div class="section_left">
              <h2 class="section_title"><?php echo $section_title ?></h2>
              <div class="section_text"><?php echo $section_text ?></div>
              <div class="section_buttons">
                <?php 
                  foreach($section_buttons as $btn){
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
          </div>
        </div>
    </section>

