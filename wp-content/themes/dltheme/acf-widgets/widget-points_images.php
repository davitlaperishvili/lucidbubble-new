
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $images = get_sub_field('images'); 
        $points_list = get_sub_field('points_list'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="points_images" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <?php 
          if($section_title){
            ?>
              <h2 class="section_title"><?php echo $section_title ?></h2>
            <?php
          }
        ?>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle"><?php echo $section_subtitle ?></div>
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
          <div class="points_list">
            <ul>
              <?php 
                foreach($points_list as $point){
                  ?>
                    <li>
                      <div class="point_item">
                        <div class="point_title"><?php echo $point['title']?></div>
                        <div class="point_desc"><?php echo $point['desc']?></div>
                      </div>
                    </li>
                  <?php
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

