
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $why_us = get_sub_field('why_us'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="why_us" id="content<?php echo $rowIndex ?>">
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
        <div class="why_us_list">
          <ul>
            <?php 
              foreach($why_us as $why){
                ?>
                  <li>
                    <div class="why_us_item">

                      <figure>
                        <img src="<?php echo $why['icon']['url'] ?>" alt="<?php echo $why['icon']['alt'] ?>">
                      </figure>
                      <div class="why_us_title"><?php echo $why['title']?></div>
                      <div class="why_us_desc"><?php echo $why['desc']?></div>

                    </div>
                  </li>
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </section>

