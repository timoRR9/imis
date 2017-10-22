<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<div id="id1">
		  <nav class="transparent" role="navigation">
		    <div class="nav-wrapper" id="top-menu">
		      <div class="row nav-container">
		        <div class="col s10 m6 l4 nav-left">
		          <img src="<?= get_bloginfo('template_url'); ?>/images/logomenu.JPG" class="nav-left-img">
		          <a id="logo-container" href="<?= get_home_url(); ?>" class="brand-logo titleFt1">
		            <?= get_bloginfo('name'); ?>
		          </a>
		        </div>
		        <div class="col s2 m6 l8 nav-right">
		          <ul class="left titleFt1" >
		            <?php if(is_page(8)){ ?>
                  <li class="navlinks active nav-first-link"><a href="<?= get_home_url(); ?>" >l'association</a></li>
                <?php }else{ ?>
                  <li class="navlinks nav-first-link"><a href="<?= get_home_url(); ?>" >l'association</a></li>
                <?php }
                if(is_page(10)){ ?>
                  <li class="navlinks active"><a href="<?= get_permalink(10); ?>">l'édition</a></li>
                <?php }else{ ?>
                  <li class="navlinks"><a href="<?= get_permalink(10); ?>">l'édition</a></li>
                <?php }
                if(is_page(12)){ ?>
                  <li class="navlinks active"><a href="<?= get_permalink(12); ?>">la revue</a></li>
                <?php }else{ ?>
                  <li class="navlinks"><a href="<?= get_permalink(12); ?>">la revue</a></li>
                <?php }
                if(is_page(57)){ ?>
                  <li class="navlinks active"><a href="<?= get_permalink(57); ?>">les évènements</a></li>
                <?php }else{ ?>
                  <li class="navlinks"><a href="<?= get_permalink(57); ?>">les évènements</a></li>
                <?php }
                if(is_page(14)){ ?>
                  <li class="navlinks active"><a href="<?= get_permalink(14); ?>">contact</a></li>
                <?php }else{ ?>
                  <li class="navlinks"><a href="<?= get_permalink(14); ?>">contact</a></li>
                <?php } ?>
		          </ul>
		          <a href="#" data-activates="mobile-demo" class="button-collapse nav-burger"><i class="material-icons">menu</i></a>
	          </div>
        </div>
      </div>
    </nav>
  </div>
		  <ul class="side-nav titleFt nav-side-block" id="mobile-demo">
		    <li class="navlinks active"><a href="<?= get_home_url(); ?>">l'association</a></li>
		    <li class="navlinks"><a href="<?= get_permalink(10); ?>">l'édition</a></li>
		    <li class="navlinks"><a href="<?= get_permalink(12); ?>">la revue</a></li>
		    <li class="navlinks"><a href="<?= get_permalink(57); ?>">les évènements</a></li>
		    <li class="navlinks"><a href="<?= get_permalink(14); ?>">contact</a></li>
		  </ul>
		<div id="content-wrap">
