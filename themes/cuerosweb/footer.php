
<!-- Extraer opciones  -->
<?php $options = get_option('wallpay_custom_settings'); ?>

<footer class="mainFooter">
	<div class="container">
		<section class="mainFooter__content container-flex">
			<!-- Articulos Logo -->
			<article class="mainFooter__article mainFooter__article__logo">
				<figure class="full-width">
					<img src="<?= IMAGES ?>/logo_wallpay_blanco.png" alt="logo-wallpay-blanco" class="img-fluid" />
				</figure>
			</article> <!-- /.mainFooter__article__logo -->
			<!-- Articulos Datos -->
			<article class="mainFooter__article mainFooter__article__info">
				<!-- Subtitulo -->
				<h2 class="mainFooter__subtitle text-uppercase"><?php _e('datos:', LANG ); ?></h2>
				<br>
				<!-- Lista -->
				<ul class="mainFooter__contact-list list-unstyled">
					<li> 
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						jr tambo real n 280 of 208 santiago de surco
					</li>
					<li> <i class="fa fa-mobile" aria-hidden="true"></i> 992 745 510 </li>
					<li> <i class="fa fa-envelope" aria-hidden="true"></i> info@grupopetrelli.pe </li>
				</ul><!-- /mainFooter__contact-list  -->
			</article> <!-- /.mainFooter__article__info -->
			<!-- Articulos Redes Sociales -->
			<article class="mainFooter__article not-border mainFooter__article__social">
				<!-- Subtitulo -->
				<h2 class="mainFooter__subtitle text-uppercase"><?php _e('redes sociales:', LANG ); ?></h2>
				<!-- Lista -->
				<ul class="mainFooter__social-list list-unstyled list-inline">

					<!-- facebook -->
					<?php if( isset( $options['red_social_fb'] ) && !empty($options['red_social_fb']) ) : ?>
						<li><a href="<?= $options['red_social_fb'] ?>" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a></li>
					<?php endif; ?>

					<!-- twitter -->
					<?php if( isset( $options['red_social_twitter'] ) && !empty($options['red_social_twitter']) ) : ?>
						<li><a href="<?= $options['red_social_twitter'] ?>" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a></li>
					<?php endif; ?>

					<!-- youtube -->
					<?php if( isset( $options['red_social_ytube'] ) && !empty($options['red_social_ytube']) ) : ?>
						<li><a href="<?= $options['red_social_ytube'] ?>" target="_blank">
							<i class="fa fa-youtube" aria-hidden="true"></i>
						</a></li>
					<?php endif; ?>

					<!-- gmail -->
					<?php if( isset( $options['red_social_gmail'] ) && !empty($options['red_social_gmail']) ) : ?>
						<li><a href="<?= $options['red_social_gmail'] ?>" target="_blank">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a></li>
					<?php endif; ?>

				</ul><!-- /mainFooter__social-list  -->					
			</article> <!-- /.mainFooter__article__social -->
		</section> <!-- /.mainFooter__content -->
	</div><!-- /.container -->
</footer> <!-- /.mainFooter -->


	<?php wp_footer(); ?>
</body>
</html>

