<?php 
    //Template Name: Blog Page
?>
<?php get_header(); ?>
<?php 
    $phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
  $hero = get_field(pll_current_language(), "option");
  $page_direction = "ltr";
  if(pll_current_language() == "he"){
    $page_direction = "rtl";
  }
?>
<main class="services">
  <section class="hero">
    <div class="container">
      <div class="section_wrap">
        <div class="hero_content">
          <div class="top_title"><?php echo $hero['hero_top_title'] ?></div>
          <h1 class="page_title"><?php echo $hero['hero_title'] ?></h1>
          <div class="hero_subtitle"><?php echo $hero['hero_subtitle'] ?></div>
          <div class="hero_buttons">
            <?php 
              foreach($hero['hero_buttons'] as $btn){
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
            <img src="<?php echo $hero['hero_image']['url'] ?>" alt="<?php echo $hero['hero_image']['alt'] ?>">
        </figure>
      </div>
    </div>
  </section>
  <section class="blog_page_content <?php echo $page_direction ?>" >
      <div class="container page_content">
          <div class="blog_page_wrap">
              <div class="blog_posts_listing">
                  <!-- Blog Post -->
                  <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  $args = array('post_type' => 'post', 'posts_per_page' => 16, 'paged' => $paged );

                  $post_type_data = new WP_Query($args);

                  set_query_var('page',$paged);
                  while ($post_type_data->have_posts()):
                  $post_type_data->the_post();
                  global $more;
                      $more = 0; ?>
                      <article>
                          <div class="post_text">
                              <figure>
                                <a href="<?php the_permalink() ?>">
                                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                                </a>
                              </figure>
                              <h3 class="post_title">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                              </h3>
                              <div class="post_content_text">
                                  <?php the_excerpt() ?>
                              </div>
                          </div>
                      </article>
                  <?php endwhile; ?>
                  <!-- //Blog Post// -->
              </div>  
              <div class="pagination">
                  <?php 
                      echo paginate_links( array(
                          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                          'total'        => $post_type_data->max_num_pages,
                          'current'      => max( 1, get_query_var( 'paged' ) ),
                          'format'       => '?paged=%#%',
                          'show_all'     => false,
                          'type'         => 'list',
                          'end_size'     => 2,
                          'mid_size'     => 1,
                          'prev_next'    => false,
                          'add_args'     => false,
                          'add_fragment' => '',
                      ) );
                  ?>
              </div>
          </div>
      </div>
  </section>
</main>

<?php get_footer(); ?>
