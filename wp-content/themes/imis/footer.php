		</div>
		<footer class="page-footer" id="id6">
		    <div class="container">
		      <div class="row">
		        <div class="col l6 s12">
		          <h5 class="white-text"><?= get_bloginfo('name'); ?></h5>
		          <p class="grey-text text-lighten-4">
		            Mener des actions culturelles et solidaires autour<br />
		            de la littérature et de l'art contemporain.
		          </p>
		        </div>
		        <div class="col l3 s12">
		          <h5 class="white-text">liens</h5>
		          <ul>
		            <li><a class="white-text" href="<?= get_permalink(14); ?>?from=yes">newsletter</a></li>
		            <li><a class="white-text" href="<?= get_permalink(82); ?>">mentions légales</a></li>
		            <li><a class="white-text" href="<?= get_permalink(78); ?>">cookies</a></li>
		            <li><a class="white-text" href="<?= get_permalink(80); ?>">crédits</a></li>
		          </ul>
		        </div>
		        <div class="col l3 s12">
		          <h5 class="white-text">nos partenaires...</h5>
		          </div>
		      </div>
		    </div>
		    <div class="footer-copyright">
		      <div class="container">
		        &copy; <?= get_bloginfo('name'); ?>
		        <a href="<?= get_field('lien_fb', 8); ?>" target="_blank"><img src="<?= get_bloginfo('template_url'); ?>/images/fb.png" class="img-footer"></a>
		      </div>
		    </div>
		  </footer>
		<?php wp_footer() ?>

	</body>
</html>
