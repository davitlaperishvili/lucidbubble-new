
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $benefits_bg_image = get_sub_field('benefits_bg_image'); 
        $benefits = get_sub_field('benefits'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="benefits" id="content<?php echo $rowIndex ?>">
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
        <div class="benefits_list">
          <ul>
            <?php 
              foreach($benefits as $benefit){
                ?>
                  <li>
                    <div class="benefit_item" style="background-image: url(<?php echo $benefits_bg_image['url'] ?>)">

                      <figure>
                        <img src="<?php echo $benefit['icon']['url'] ?>" alt="<?php echo $benefit['icon']['alt'] ?>">
                      </figure>
                      <div class="benefit_title"><?php echo $benefit['title']?></div>
                      <div class="benefit_desc"><?php echo $benefit['desc']?></div>

                    </div>
                  </li>
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </section>

