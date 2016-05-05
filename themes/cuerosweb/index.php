
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


<!-- Seccion contenido principal -->
<main class="pageInicio__main-content">
	<div class="container">
		<div class="row">
			<!-- Seccion de Productos destacados -->
			<div class="col-xs-8">
				<section class="pageInicio__products">
					<!-- Titulo -->
					<h2 class="pageCommon__section-title text-uppercase">
						<strong><?php _e('productos destacados' , LANG ); ?></strong>
					</h2> <!-- /.pageCommon__section-title  text-uppercase -->
					
					<!-- Contenedor -->
					<section class="pageInicio__products__content row">
						<?php  
							$args = array(
								'post_status'    => 'publish',
								'post_type'      => 'product',
								'posts_per_page' => 9,
								'meta_key'       => '_featured',  
								'meta_value'     => 'yes', 
							);
							$featured_products = get_posts( $args );

							foreach( $featured_products as $f_product ) :
						?>
							<div class="col-xs-4">
								<article class="text-xs-center">
									<!-- Enlace al producto -->
									<a href="<?= $f_product->guid ?>">
									<!-- Imagen -->
										<figure>
										<?php if( has_post_thumbnail( $f_product->ID )) : ?>
											<?= get_the_post_thumbnail( $f_product->ID , 'full' , array('class'=>'img-fluid') ); ?>
										<?php endif; ?>
										</figure> <!-- /.figure -->
									</a>
									<!-- Nombre corto -->
									<h2>
										<?php 
											$short_name = get_post_meta( $f_product->ID , 'mb_short_name_product_text', true); 

											if( empty($short_name)){
												$short_name = wp_trim_words( $f_product->post_title , 3 , '' );
											}

											echo ucfirst( $short_name );
										?>
									</h2>
									<!-- Codigo de Producto -->
									<p class="product-code">
										<strong><?= get_post_meta( $f_product->ID , 'mb_code_product_text', true); ?>
										</strong>
									</p>
									<!-- Precio regular del producto -->
									<p class="product-price">
										<?= "S/. " . get_post_meta( $f_product->ID , '_regular_price', true); ?>
									</p>

									<!-- Saltos de Línea --> <br/>

									<!-- Botón Comprar -->
									<a href="#" class="btn__buy text-uppercase"><?php _e( 'comprar', LANG ); ?></a>

								</article>
							</div> <!-- ./col-xs-3 -->

						<?php endforeach; ?>
					</section><!-- /.pageInicio__products__content -->
					
				</section><!-- /.pageInicio__products -->
			</div> <!-- /.col-xs-8 -->
			<!-- Aside de categorias -->
			<div class="col-xs-4">
				<aside class="mainSidebar">
					<!-- Categorias -->
					<section class="mainSidebar__section-categories">
						<!-- Titulo -->
						<h2 class="pageCommon__section-title text-uppercase">
							<strong><?php _e('categorias' , LANG ); ?></strong>
						</h2> <!-- /.pageCommon__section-title  text-uppercase -->

						<!-- Contenedor -->
						
					</section> <!-- /.mainSidebar__section-categories -->
				</aside> <!-- /.mainSidebar -->
			</div><!-- /.col-xs-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.pageInicio__main-content -->

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