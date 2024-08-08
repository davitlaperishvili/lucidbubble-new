<!DOCTYPE html>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$mobile_button_text = get_field('mobile_button_text', 'option');
	$header = get_field('header', 'option');
  $page_direction = "ltr";
  if(pll_current_language() == "he"){
    $page_direction = "rtl";
  }
?>
<html lang="en" class="dl_theme" dir="<?php echo $page_direction ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<meta name="robots" content="noindex">
	<link rel="shortcut icon" href="<?php echo $header['favicon']['url'] ?>">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="resp_menu trans-no-all">
	<div class="resp_menu_toggle">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="resp_menu_ul"></div>
</div>

<div class="mobile_fixed_button">
	<a href="tel:<?php echo $phone ?>"><?php echo $mobile_button_text ?></a>
</div>

<header class="trans-all-4">
	<div class="container">
		<div class="header_elems">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo $header['logo']['url'] ?>" alt="<?php wp_title() ?>">
        </a>
      </div>
      <div class="header_menu">
        <?php
          wp_nav_menu([
            'theme_location'	=> 'header_menu',
            'menu'				=> 'header_menu', 
            'container'			=> 'nav',
            'container_class'	=> 'navigation',
            'menu_class'		=> 'navigation'
          ]);
        ?>
      </div>
    </div>
    <div class="header_sign_in">
      <div class="theme_button white small">
        <a href="<?php echo $header['header_button']['url'] ?>"><?php echo $header['header_button']['title'] ?></a>
      </div>
      <div class="icon">
        <img src="<?php echo $header['header_icon']['url'] ?>" alt="<?php echo $header['header_icon']['alt'] ?>">
      </div>
    </div>
	</div>
</header>