<?php get_header(); ?>

<main class="no_found_page">
  <section class="no_found">
    <div class="container">
      <h1 class="section_title center">404</h1>
      <div class="section_subtitle center"><?php pll_e("Page Not Found") ?></div>
      <div class="section_buttons">
        <div class="theme_button center">
          <a href="<?php echo home_url() ?>"><?php pll_e("Return to home") ?></a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>