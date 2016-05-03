<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	
	<?php 
		$options = get_option('wallpay_custom_settings'); 
		global $post;
	?>

	<!-- Header -->
	<header class="mainHeader text-xs-center">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-xs-12">
					<!-- Logo -->
					<h1 class="logo text-xs-center">
						<a href="<?= site_url() ?>"><img src="<?= IMAGES ?>/logo_wallpay.jpg" alt="logo-wallpay" class="img-fluid" /></a>
					</h1><!-- /.logo -->					
				</div><!-- /.col-xs-12 -->
				<!-- Menu de navegación -->
				<nav class="mainNavigation">
					<?php 
						wp_nav_menu(
							array(
								'menu_class'     => 'mainMenu list-inline text-uppercase',
								'theme_location' => 'main-menu'
						));
					?>					
				</nav><!-- /.mainNavigation -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</header> <!-- /. -->



