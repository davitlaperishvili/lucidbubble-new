
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $images = get_sub_field('images'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="gallery" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <?php 
          if($section_title){
            ?>
              <h2 class="section_title center"><?php echo $section_title ?></h2>
            <?php
          }
        ?>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <div class="section_wrap">
          <div class="images">
            <?php 
              foreach($images as $img){
                ?>
                  <figure>
                    <img src="<?php echo $img['image']['url'] ?>" alt="<?php echo $img['image']['alt'] ?>">
                  </figure>
                <?php
              }
            ?>
          </div>
        </div>
      </div>
    </section>

