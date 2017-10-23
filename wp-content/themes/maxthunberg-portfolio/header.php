<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
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
      <img class="icn-carousel icn-carousel--white" src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-carousel--white.svg" />
    </div>

    <div class="header-displaymode--grid">
      <img class="icn-grid icn-grid--white" src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-grid--white.svg" />
    </div>

  </div>

</nav>
