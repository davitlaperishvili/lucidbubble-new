<?php 
  $phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$header = get_field('header', 'option');
?>
<footer class="trans-all-4">
  <div class="container">
    <div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo $header['logo']['url'] ?>" alt="<?php wp_title() ?>">
			</a>
		</div>
		<div class="footer_menu">
			<?php
				wp_nav_menu([
					'theme_location'	=> 'footer_menu',
					'menu'				=> 'footer_menu', 
					'container'			=> 'nav',
					'container_class'	=> 'footer_navigation',
					'menu_class'		=> 'footer_navigation'
				]);
			?>
		</div>
    <div class="footer_contacts">
      <div class="contact_item">
        <a href="tel:<?php echo $phone ?>">
          <span class="svg_wrap">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.7453 21.7595L22.3844 18.4611L22.3641 18.4517C21.9819 18.2883 21.5651 18.2227 21.1512 18.2609C20.7373 18.2991 20.3395 18.4399 19.9938 18.6705C19.953 18.6973 19.9139 18.7266 19.8766 18.758L16.0735 22.0002C13.6641 20.8299 11.1766 18.3611 10.0063 15.983L13.2531 12.122C13.2844 12.083 13.3141 12.0439 13.3422 12.0017C13.5679 11.6569 13.7048 11.2616 13.7408 10.8511C13.7768 10.4405 13.7107 10.0274 13.5485 9.64861V9.62986L10.2406 2.25642C10.0262 1.76152 9.6574 1.34926 9.18937 1.08117C8.72134 0.813081 8.17916 0.703549 7.64376 0.768922C5.52653 1.04753 3.58311 2.08731 2.17647 3.69407C0.769838 5.30083 -0.00381396 7.36469 1.41385e-05 9.50017C1.41385e-05 21.9064 10.0938 32.0002 22.5 32.0002C24.6355 32.004 26.6994 31.2303 28.3061 29.8237C29.9129 28.4171 30.9527 26.4737 31.2313 24.3564C31.2968 23.8212 31.1875 23.2792 30.9197 22.8112C30.6519 22.3432 30.2399 21.9743 29.7453 21.7595ZM22.5 29.5002C17.1975 29.4944 12.1137 27.3854 8.36427 23.6359C4.6148 19.8864 2.5058 14.8027 2.50001 9.50017C2.49414 7.97437 3.04384 6.4986 4.04648 5.34846C5.04911 4.19832 6.43611 3.45246 7.94845 3.25017C7.94783 3.25641 7.94783 3.26269 7.94845 3.26892L11.2297 10.6127L8.00001 14.4783C7.96717 14.516 7.93738 14.5562 7.91095 14.5986C7.67582 14.9594 7.53788 15.3749 7.51051 15.8046C7.48313 16.2344 7.56725 16.664 7.7547 17.0517C9.17033 19.947 12.0875 22.8424 15.0141 24.2564C15.4046 24.4421 15.8367 24.5233 16.2681 24.4921C16.6994 24.4609 17.1153 24.3183 17.475 24.0783C17.5152 24.0514 17.5538 24.0222 17.5906 23.9908L21.3891 20.7502L28.7328 24.0392H28.75C28.5502 25.5537 27.8054 26.9435 26.6551 27.9486C25.5047 28.9537 24.0276 29.5053 22.5 29.5002Z" fill="#1F1F1F"/>
            </svg>
          </span>
          <span><?php echo $phoneVisible ?></span>
        </a>
      </div>
      <div class="contact_item">
        <a href="mailto:<?php echo $email ?>">
          <span class="svg_wrap">
            <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M33.6668 3.99984C33.6668 2.1665 32.1668 0.666504 30.3335 0.666504H3.66683C1.8335 0.666504 0.333496 2.1665 0.333496 3.99984V23.9998C0.333496 25.8332 1.8335 27.3332 3.66683 27.3332H30.3335C32.1668 27.3332 33.6668 25.8332 33.6668 23.9998V3.99984ZM30.3335 3.99984L17.0002 12.3332L3.66683 3.99984H30.3335ZM30.3335 23.9998H3.66683V7.33317L17.0002 15.6665L30.3335 7.33317V23.9998Z" fill="#1F1F1F"/>
            </svg>
          </span>
          <span><?php echo $email ?></span>
        </a>
      </div>
    </div>
  </div>
</footer>
  <div class="modal micromodal-slide" id="sign_in_popup" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-call">
        <div class="modal-content-content">
        <button class="modal__close_icon close_sign_in_popup" aria-label="Close modal" data-micromodal-close></button>
          <div class="modal__content">
            <section class="sign_in_form micro_modal">
              <div class="modal_content_wrap">
                <div class="form_wrap">
                  <?php echo do_shortcode('[contact-form-7 id="d49d03e" title="Sign In form"]') ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
<?php wp_footer(); ?>
</body>
</html>
