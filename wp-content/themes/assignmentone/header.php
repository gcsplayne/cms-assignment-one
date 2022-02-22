<?php
/**
 * The header.
 *
 * This file is what displays all of the head section
 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<!-- Link to bootstrap -->
<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/bootstrap/css/bootstrap.min.css')) ?>">
<!-- bootstrap js -->
<script type="text/javascript" src="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/bootstrap/js/boostrap.js')) ?>"></script>
<!-- call in custom css file that you create -->
<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/css/custom-css.css')); ?>">
<!-- call in any libraries -->
<!--  call in google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div class="container">
<header class="row">
	<div class="col-sm-12 col-md-6 col-lg-8">
	<a href="<?php echo esc_url(home_url()); ?>">
			<img src="<?php echo esc_url(home_url('wp-content/uploads/2022/02/green-1.png')); ?>" alt="logo" height="300" width="300">
		</a>
	</div>
	
	<nav class="navbar col-sm-12 col-md-6 col-lg-4">
		
		<?php 
			wp_nav_menu(array(
				'menu' => 'main',
				'theme_location' => '',
				'depth' => 2,
				'fallback_cb' => false,
				'container' => 'ul',
				'menu_class' => 'nav navbar-nav navbar-right'
			));
		?>
		
	</nav>
		</div>
</header>