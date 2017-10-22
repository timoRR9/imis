<?php
/*
Template Name: Revue
*/
?>

<?php get_header(); ?>

<div class="row first-block" id="id3">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center-align">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="titleFt1"><?= get_field('titre_revue'); ?></h4>
          <br>
          <div class="left-align light">
          	<?= get_field('texte_revue'); ?>
          </div>

	        <?php
	          	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			    $args = array(
			      'post_type' => 'revues',
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
		                  <div class="container-article">
		                    <div class="card inverse-carousel">
		                      <div class="card-content content-pad">
		                        <div class="row">
		                          <div class="col s12">
		                            <h4 class="titleFt"><?= get_the_title(); ?></h4>
		                          </div>
		                        </div>
		                        <div class="row">
		                          <div class="col s8 offset-s2 m4 offset-m4">
		                            <img src="<?= get_field('img_revue',get_the_ID())['url']; ?>" alt="<?= get_field('img_revue', get_the_ID())['alt']; ?>" class="img-article"/>
		                          </div>

		                          <div class="col s12 m12">
		                            <p class="left-align light txt-revue">
		                              <?= get_field('txt_revue', get_the_ID()); ?>
		                            </p>
		                          </div>
		                        </div>
		                        <br><br>
		                        <div class="row">
		                          <div class="col s12 m12 l6 center-align" >
		                            <i class="material-icons icon-carousel">check</i> <?= get_field('prix_papier_revue', get_the_ID()); ?>
		                          </div>
		                          <div class="col s12 m12 l6 center-align">
		                            <i class="material-icons icon-carousel">check</i> <?= get_field('prix_pdf_revue', get_the_ID()); ?>
		                          </div>
		                        </div>
		                      </div>
		                      <div class="card-action">
		                        <a href="#" class="action-carousel">
		                          <i class="material-icons icon-carousel">add_shopping_cart</i>
		                          Ajouter au panier
		                        </a>
		                      </div>
		                    </div>
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
  </div>
</div>

<?php get_footer(); ?>
