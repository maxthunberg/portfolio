<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
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
