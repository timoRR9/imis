<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="container first-block" id="id5">
  <div class="section">
    <div class="row" style="margin: 0;padding: 10px 0">
      <div class="col m10 offset-m1 s12">
        <?= do_shortcode('[contact-form-7 id="6" title="Formulaire de contact"]'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>