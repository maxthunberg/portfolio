<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<!--contact page -->

<?php $contacts = get_posts([
  'post_type' => 'contact',
  'order' => 'ASC',
  'orderby' => 'name'
]);?>

<div class="Section--100vh Section-column Section--padding" id="contact">

  <!-- <div class="title Grid-col"><h3>Kontakt</h3></div> -->

  <div class="Section">

    <?php foreach ($contacts as $contact):?>

      <div class="Section-column Grid-col--1of4 Grid-col">

        <h2 class="wordbreak lineheight-sm"><?php echo get_field('category', $contact->ID); ?></h2><br />
        <p>Bes&ouml;ksadress: <?php echo get_field('visitingaddress', $contact->ID); ?></p>
        <p>Reception: <?php echo get_field('reception', $contact->ID); ?></p>
        <?php if (get_field('fax', $contact->ID) != ''):?>
        <p>Fax: <?php echo get_field('fax', $contact->ID); ?></p>

      <?php endif; ?><br />

        <p><?php echo get_field('postaddress', $contact->ID); ?></p><br />
        <p>Öppettider: <?php echo get_field('openinghours', $contact->ID); ?></p>

      </div>

    <?php endforeach; ?>

  </div>

  <?php get_footer(); ?>

</div>
