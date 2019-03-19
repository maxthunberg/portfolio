<?php get_header('project'); ?>

<div class="grain">

<?php include( get_template_directory() . '/phtml-components/hero.phtml');?>

<?php include( get_template_directory() . '/phtml-components/project-details.phtml');?>

<?php include( get_template_directory() . '/phtml-components/project-content.phtml');?>

<?php include( get_template_directory() . '/phtml-components/project-overview.phtml');?>

<!-- Modal Menu -->
<?php include( get_template_directory() . '/phtml-components/modal--menu.phtml');?>

</div>

<?php get_footer('project'); ?>
