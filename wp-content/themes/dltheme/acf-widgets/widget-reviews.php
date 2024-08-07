
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $reviews = get_sub_field('reviews'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="reviews" id="content<?php echo $rowIndex ?>">
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
        <div class="reviews_wrap">
          <div class="reviews_list swiper">
            <div class="swiper-wrapper">
            <?php 
              foreach($reviews as $review){
                ?>
                  <div class="swiper-slide">
                    <div class="review_item">
                      <div class="review_top">
                        <figure>
                          <img src="<?php echo $review['image']['url'] ?>" alt="<?php echo $review['image']['alt'] ?>">
                        </figure>
                        <div class="author_name"><?php echo $review['author_name']?></div>
                      </div>
                      <div class="testimonial_stars">
                        <?php 
                          if(!$review['rating']){
                            $review['rating'] = "5";
                          }
                          for($i = 0; $i < 5; $i++){
                            if($i < intval($review['rating'])){
                              ?>
                                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M10.5267 0.390543C10.6805 -0.0612999 11.3195 -0.0613002 11.4733 0.390543L13.5788 6.57601C13.6478 6.77865 13.8381 6.9149 14.0521 6.9149H20.8143C21.3043 6.9149 21.5019 7.54653 21.0993 7.82576L15.6692 11.5916C15.4857 11.7189 15.4089 11.9523 15.4808 12.1636L17.5642 18.2844C17.7197 18.741 17.2023 19.1312 16.806 18.8563L11.2849 15.0274C11.1136 14.9086 10.8864 14.9086 10.7151 15.0274L5.19403 18.8563C4.79769 19.1312 4.28034 18.7409 4.43576 18.2844L6.51921 12.1636C6.59115 11.9523 6.51427 11.7189 6.33082 11.5916L0.900718 7.82576C0.498093 7.54653 0.695683 6.9149 1.18566 6.9149H7.94785C8.1619 6.9149 8.35221 6.77865 8.42118 6.57601L10.5267 0.390543Z" fill="#F4C445"/>
                                </svg>
                              <?php
                            }else{
                              ?>
                                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M10.5267 0.390543C10.6805 -0.0612999 11.3195 -0.0613002 11.4733 0.390543L13.5788 6.57601C13.6478 6.77865 13.8381 6.9149 14.0521 6.9149H20.8143C21.3043 6.9149 21.5019 7.54653 21.0993 7.82576L15.6692 11.5916C15.4857 11.7189 15.4089 11.9523 15.4808 12.1636L17.5642 18.2844C17.7197 18.741 17.2023 19.1312 16.806 18.8563L11.2849 15.0274C11.1136 14.9086 10.8864 14.9086 10.7151 15.0274L5.19403 18.8563C4.79769 19.1312 4.28034 18.7409 4.43576 18.2844L6.51921 12.1636C6.59115 11.9523 6.51427 11.7189 6.33082 11.5916L0.900718 7.82576C0.498093 7.54653 0.695683 6.9149 1.18566 6.9149H7.94785C8.1619 6.9149 8.35221 6.77865 8.42118 6.57601L10.5267 0.390543Z" fill="#eee"/>
                                </svg>
                              <?php
                            }
                          }
                        ?>
                      </div>
                      <div class="review_text"><?php echo $review['text'] ?></div>
                    </div>
                  </div>
                <?php
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>

