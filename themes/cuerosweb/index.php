
<!-- Header -->
<?php 
	get_header(); 
	$options = get_option('wallpay_custom_settings'); 
?>

<!-- Incluir Banner de Portada -->
<?php  
	$term = "Portada";
	//template
	include(locate_template('partials/portada/content-banner.php'));
?>

<!-- Banner de Informacion  -->
<section class="sectionCommon__info-banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-8 text-xs-center text-uppercase">
				<h2 class="sectionCommon__info-banner__title">
					<strong><?php _e( 'has tu pedido ahora: ' ); ?></strong>
					<!-- Su información de contacto -->
					<?php $email = isset($options['contact_email']) ? $options['contact_email'] : '' ; ?>
					<span>
					<?= !empty($email) ? $email : "no disponible"; ?>
					</span>
				</h2>
			</div><!-- /.col-xs-8 -->
			<div class="col-xs-2"></div>
		</div> <!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.sectionCommon__info-banner -->

<!-- Seccion Miscelaenea -->
<section class="sectionCommon__miscelaneo">
	<div class="container">
		<div class="row">
			<!-- Blog -->
			<div class="col-xs-6">
				<!-- Titulo --> <h2 class="sectionCommon__miscelaneo__title text-uppercase">
				<?php _e( 'blog' , LANG ); ?></h2> <!-- /. sectionCommon__miscelaneo__title text-uppercase-->
				<!-- Dos blogs destacados -->
				<?php  
					$args = array(
						'order'          => 'DESC',
						'orderby'        => 'date',
						'post_status'    => 'publish',
						'post_type'      => 'post',
						'posts_per_page' => 2,
					);
					$blogs = get_posts( $args );

					foreach( $blogs as $blog ) :
				?>
					<article class="sectionCommon__miscelaneo__article">
						<!-- Imagen -->
						<?php if( has_post_thumbnail( $blog->ID ) ) : ?>
							<figure class="pull-xs-left"><?= get_the_post_thumbnail( $blog->ID , 'full', array('class'=>'img-fluid') ); ?></figure>
						<?php endif; ?>
						<!-- Contenido -->
						<div class="center-block">
							<a href="<?= apply_filters( 'the_permalink' , $blog->guid ); ?>">
								<h3><?php _e( $blog->post_title , LANG ); ?></h3>
							</a>
							<p><?= wp_trim_words( $blog->post_content , 29 , '' ); ?></p>
						</div><!-- /. -->

						<!-- Limpiar float --> <div class="clearfix"></div>
					</article> <!-- /.sectionCommon__miscelaneo__article -->

				<?php endforeach; ?>
			</div> <!-- /.col -->
			<!-- Videos -->
			<div class="col-xs-6">
				<!-- Titulo --> <h2 class="sectionCommon__miscelaneo__title text-uppercase">
				<?php _e( 'videos' , LANG ); ?></h2> <!-- /. sectionCommon__miscelaneo__title text-uppercase-->
				<!-- Video -->
				<?php  
					$args = array(
						'orderby'        => 'rand',
						'post_status'    => 'publish',
						'post_type'      => 'gallery-video',
						'posts_per_page' => 1,
					);
					$videos = get_posts( $args );
					foreach( $videos as $video ):
				?>
				<article class="sectionCommon__miscelaneo__article">
					<?php 
						$url_video = get_post_meta( $video->ID , 'mb_url_video_text' , true );
						$url_video = str_replace( 'watch?v=' , 'embed/' , $url_video );
						if( !empty($url_video) ) :
					?>
					<iframe style="width:100%; height: 270px;" src="<?= $url_video ?>" frameborder="0"></iframe>
					<?php endif; ?>
				</article> <!-- /.sectionCommon__miscelaneo__article- -->

				<?php endforeach;  ?>
			</div> <!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section> <!-- /.sectionCommon__miscelaneo -->

<!-- Footer -->
<?php get_footer(); ?>