<?php
/*
Template Name: Edition
*/
?>

<?php get_header(); ?>

<div class="row first-block" id="id2">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center-align">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="titleFt1"><?= get_field('titre_edition'); ?></h4>
          <div class="row center-align noMargfix">
          <div class="col s12 m10 offset-m1 xl8 offset-xl2 mobileview">
                <video controls muted>
                  <source src="<?= get_field('video_edition'); ?>" type="video/mp4">
                </video>
              </div>
            <div class="col s12 m10 offset-m1 xl8 offset-xl2 largeview">
              <video autoplay muted>
                <source src="<?= get_field('video_edition'); ?>" type="video/mp4">
              </video>
            </div>
          </div>
          <?= get_field('txt_edition'); ?>
          <br>
          <h5 class="left-align titleFt"><?= get_field('titre_coll'); ?></h5>

          <p class="left-align light">
            <?= get_field('txt_col'); ?>
          </p>

          <?php
          	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		    $args = array(
		      'post_type' => 'editions',
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
			                      <h5 class="titleFt"><b><?= get_the_title(); ?></b></h5>
			                      <h5 class="titleFt"><?= get_field('auteur_edition', get_the_ID()); ?></h5>
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col s8 offset-s2 m4 offset-m4">
			                      <img src="<?= get_field('img_edition', get_the_ID())['url']; ?>" class="img-article"/>
			                    </div>

			                    <div class="col s12 m12">
			                      <p class="light">
			                        <?= get_field('desc_edtition', get_the_ID('desc_edtition')); ?>
			                         
			                        <br><br>
			                        <span class="caract-edition">
			                            <?= get_field('caract_edition', get_the_ID()); ?>
			                        </span>
			                      </p>
			                      <div class="row">
			                        <div class="col s10 offset-s1 edition-separator"><hr></div>
			                      </div>
			                      <h4 class="center-align titleFt edition-subtitle">Un extrait du livre</h4>
			                      <div class="light">
			                        <?= get_field('extrait_edition', get_the_ID()); ?>
			                      </div>
			                    </div>
			                  </div>
			                  <div class="row">
			                    <div class="col s12 center-align edition-icon-container">
			                      <i class="material-icons icon-carousel">check</i> <?= get_field('prix_edition', get_the_ID()); ?>
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
		      'prev_text' => false,
		      'next_text' => false
		    ) );
		    ?>



        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
