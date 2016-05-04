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
	// The Loop
	if ( $the_query->have_posts() ) : 

?>
<section id="carousel-home" class="pageInicio__slider relative">
	<ul>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class="item-slider" data-transition="boxslide" data-slotamount="6">
		<!-- Imagen -->
		<?php if( has_post_thumbnail() ) :  ?>
			<?php the_post_thumbnail('full', array('class'=>'img-fluid') ); ?>
		<?php endif; ?>
		</li> <!-- /.item-slider -->
	<?php endwhile; ?>
	</ul> <!-- /. ul -  -->
</section> <!-- /.carousel-home -->

<?php endif; wp_reset_postdata(); ?>

