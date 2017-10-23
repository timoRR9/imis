<?php
/*
Template Name: Evenement
*/
?>

<?php get_header(); ?>

<div class="row first-block" id="id4">
  <div class="container">
    <div class="section">
      <div class="row noMargfix">
        <div class="col s12 center-align">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="titleFt1"><?= get_field('title_p_event'); ?></h4>
          <br>
          <p class="left-align light">
            <?= get_field('txt_p_event'); ?>
          </p>
        </div>
      </div>

      <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$args = array(
		  'post_type' => 'evenement',
		  'orderby' => 'date',
		  'order' => 'ASC',
		  'posts_per_page' => 3,
		  'paged' => $paged
	    );

	    $postQuery = new WP_Query($args);
	    $temp_query = $wp_query;
	    $wp_query = NULL;
	    $wp_query = $postQuery;

	    if($postQuery->have_posts()){
       		while($postQuery->have_posts()): $postQuery->the_post(); ?>
       			<div class="row">
			        <div class="col s12 center-align">
			          <h5 class="bar-title titleFt1" style="background-color: <?= get_field('color_title_event'); ?>;"><?= get_the_title(); ?></h5>
			          <p class="left-align light txt-top-event">
			            <?= get_field('txt_top_event', get_the_ID()); ?>
			          </p>
			        </div>
			      </div><br />
			      <div class="row noMargfix">
			        <div class="col s12 l6 irow">
			          <div class="iconteneur">
			            <iframe src="<?= get_field('video_event', get_the_ID()); ?>" frameborder="0" allowfullscreen></iframe>
			          </div>
			        </div>
			        <div class="col s12 l6">
			          <p class="left-align light txt-col-event">
			            <?= get_field('txt_col', get_the_ID()); ?>
			          </p>
			        </div>
			      </div>
       		<?php endwhile;
       	}
       	wp_reset_postdata(); ?>
	    <?php the_posts_pagination( array(
	      'mid_size' => 1,
	      'prev_text' => 'Précédent',
		  'next_text' => 'Suivant'
	    ) ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
