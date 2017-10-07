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
    <!-- <div class="Navigation-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/logos/png/logo_white.png" /></div> -->
    <div class="header-inner">
      <ul>
        <?php
          $pages = get_pages();
          foreach ($pages as $page):?>
          <li class="nav-item <?php echo get_the_title() == $page->post_title ? 'active' : "" ?>">
            <a class="nav-link" href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a>
          </li>
        <?php endforeach; ?>
      </ul>

  </div>
</nav>

  <main class="Section">
