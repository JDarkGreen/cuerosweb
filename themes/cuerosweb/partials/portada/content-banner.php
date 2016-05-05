<?php  
	// The Query
	$args = array(
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
		'post_type'      => 'banner',
		'posts_per_page' => -1,
	);

	$the_query = new WP_Query( $args );

	$i = 0; 
	$transition = ""; //para las transiciones control que guarda una variable
	// The Loop
	if ( $the_query->have_posts() ) : 

?>

<!-- Contenedor de bannner para responsive no full width  -->
<div class="banner-container relative">
	
	<section id="carousel-home" class="pageInicio__slider">
		<ul class="">
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<!-- Clase Control i  -->
			<?php  
				switch ( $i ) {
					case 0:
						$transition = "3dcurtain-horizontal";
						break;
					case 1:
						$transition = "slotfade-horizontal";
						break;

					case 2:
						$transition = "curtain-2";
						break;
					default:
						$transition = "slideright";
						break;
				}
			?>

			<li class="item-slider" data-transition="<?= $transition ?>" data-slotamount="10">
			<!-- Imagen -->
			<?php if( has_post_thumbnail() ) :  ?>
				<?php the_post_thumbnail('full', array('class'=>'img-fluid') ); ?>
			<?php endif; ?>

				<!-- Caption Titulo -->
				<div class="caption sft big_white"  data-x="50" data-y="154" data-speed="700" data-start="500" data-easing="easeOutBack">
					<h2 class="pageInicio__slider__title text-uppercase">
						<?php _e( get_the_title() , LANG ); ?>
					</h2> <!-- /.pageInicio__slider__title -->
				</div> <!-- /. -->	


				<!-- Caption Contenido -->
				<div class="caption sfb big_white" data-x="100" data-y="240" data-speed="700" data-start="1000" data-easing="easeOutBack">
					<p class="pageInicio__slider__content">
						<?php _e( get_the_content() , LANG ); ?>
					</p> <!-- /.pageInicio__slider__content -->
				</div> <!-- /. -->	
		
			</li> <!-- /.item-slider -->
		<?php $i++; endwhile; ?>
		</ul> <!-- /. ul -  -->
	</section> <!-- /.carousel-home -->

</div> <!-- /.banner-container relative -->

<?php endif; wp_reset_postdata(); ?>

