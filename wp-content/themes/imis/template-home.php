<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

  <div class="row first-block">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4 class="center-align titleFt1"><?= get_field('title_home'); ?></h4>
            <div class="row center-align noMargfix">
              <div class="col s12 m10 offset-m1 xl8 offset-xl2 mobileview">
                <video controls muted>
                  <source src="<?= get_field('video_home'); ?>" type="video/mp4">
                </video>
              </div>
              <div class="col s12 m10 offset-m1 xl8 offset-xl2 largeview">
                <video autoplay muted>
                  <source src="<?= get_field('video_home'); ?>" type="video/mp4">
                </video>

              </div>

            </div>
            <p class="left-align light noMargfix">
              <?= get_field('txt_home'); ?>
            </p>
          </div>
        </div>
        <section class="images slider">
          <?php
            $visuels = get_field('slides_home');
            foreach ($visuels as $visuel) { ?>
              <div>
                <div class="row noMargfix">
                  <div class="col s12 m6 offset-m3 l4 offset-l4">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?= $visuel['url']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }
          ?>
        </section>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
