<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>

</head>

<body>

<nav class="header">

    <div class="header-signature">
      <h2 class="header-signature--white">Max Thunberg</h2>
    </div>

  <div class="header-displaymode">
    <div class="header-displaymode--carousel selected">
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-carousel--white.svg" />
    </div>

    <div class="header-displaymode--grid">
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-grid--white.svg" />
    </div>

  </div>

</nav>

  <main class="Section">
