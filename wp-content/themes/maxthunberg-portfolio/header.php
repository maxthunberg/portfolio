<!DOCTYPE html>

<?php $ogimage = get_field('og_image', 'option'); ?>
<?php if ( is_front_page() == true ) : ?>
  <html class="fixed" <?php language_attributes(); ?>>
<?php else: ?>
  <html <?php language_attributes(); ?>>
<?php endif; ?>

<head>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MFG7MVP');</script>
  <!-- End Google Tag Manager -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">

  <link id="favicon" rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon.ico" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
  <meta name="image" property="og:image" content="<?= $ogimage['url']; ?>">
  
</head>

<?php if ( is_front_page() == true ) : ?>
  <body class="fixed">
<?php else: ?>
  <body>
<?php endif; ?>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFG7MVP"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<?php include( get_template_directory() . '/phtml-components/navbar.phtml');?>
