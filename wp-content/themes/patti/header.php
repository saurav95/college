<?php global $smof_data; //get theme options ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		
		<!-- mobile meta tag -->
		<?php if(isset($smof_data['responsive_enabled']) && ($smof_data['responsive_enabled'] =='1')) {  ?>		
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php } else {  ?> 
			<meta name="viewport" content="width=1150">
			<?php } ?>

		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		
		<!-- Custom Favicon -->
		<?php if(!empty($smof_data['custom_favicon']['url'])) { ?><link rel="icon" type="image/png" href="<?php echo esc_url($smof_data['custom_favicon']['url']); ?>" /><?php } ?>			
				
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>			

	</head>
	
<body <?php body_class(); ?>>

	<!-- preloader-->
<?php 
	if(isset($smof_data['enable_preloader'])) {
		if($smof_data['enable_preloader'] != 0) { ?>
	<div id="qLoverlay"></div>

	<?php }} ?>

	<header id="header" class="<?php if(isset($smof_data['header_style'])) { echo $smof_data['header_style']; } else { echo 'solid-header'; } ?>">
		<div class="centered-wrapper">

	<?php
		$isfullscreen = 'no-fullscreen-menu';
		if(isset($smof_data['menu_type']) && ($smof_data['menu_type'] ==='fullscreen-menu')) {
			$isfullscreen = 'yes-fullscreen-menu';
	} ?>

			<div class="percent-one-fourth <?php echo $isfullscreen ?>">
				<div class="logo">
				<?php 
					if(isset($smof_data['svg_enabled']) && ($smof_data['svg_enabled'] == '1')) { 
						if(isset($smof_data['svg_logo']['url']) && ($smof_data['svg_logo']['url'] !='')) {
						?>
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo $smof_data['svg_logo']['url']; ?>" alt="<?php bloginfo( 'name' ) ?>" width="<?php echo $smof_data['svg_logo_width']; ?>" height="<?php echo $smof_data['svg_logo_height']; ?>" /></a>
				<?php	} }
				else if(isset($smof_data['custom_logo']['url']) && ($smof_data['custom_logo']['url'] !='')) { ?>
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo $smof_data['custom_logo']['url']; ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>
				<?php } 
				
				else { ?>			
			
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ) ?>" /></a>
				<?php } ?>	

				<?php
				if(isset($smof_data['site_desc_enabled']) && ($smof_data['site_desc_enabled'] == '1')) {
				 $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) {  ?>
						<span class="site-description"><?php echo $description; ?></span>
					<?php } }
				?>			
				</div><!--end logo-->
			</div><!--end one-fourth-->
			
			<?php 
				if(isset($smof_data['menu_type']) && ($smof_data['menu_type'] !='fullscreen-menu')) { 
				 	if(isset($smof_data['responsive_enabled']) && ($smof_data['responsive_enabled'] =='1')) {  ?>	
						<a class="nav-btn <?php if(isset($smof_data['header_scheme']) && ($smof_data['header_scheme'] == 'dark-header')) { echo 'dark-things'; } ?>"><i class="fa fa-bars"></i></a>
			<?php } } ?>

					

			<?php 
			if(isset($smof_data['header_scheme'])) { $headerscheme = $smof_data['header_scheme']; }

			if(isset($smof_data['menu_type']) && ($smof_data['menu_type'] !='fullscreen-menu')) { ?> 

			<div class="percent-three-fourth column-last">		

				<div id="regular-navigation">
					<?php get_template_part( 'includes/header-widgets' ); ?>	
				</div>
							

				<nav id="navigation" class="<?php echo $headerscheme ?>">
					<?php wp_nav_menu( array(
						'theme_location' => 'top_menu',
						'menu_id' => 'mainnav',
						'menu_class' => 'sf-menu',
						'sort_column' => 'menu_order',
						'fallback_cb' => ''
					)); ?>
				</nav><!--end navigation-->	

			</div><!--end three-fourth-->
			<div class="clear"></div>
		</div><!--end centered-wrapper-->

		<?php } else { ?> 							

			<div class="bm <?php echo $headerscheme ?>">
				<div class="bi burger-icon">
					<div id="burger-menu">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
					</div>
				</div>	
			</div>					
				
			<div class="clear"></div>
		</div><!--end centered-wrapper-->

		<!-- fullscreen navigation - remove the "displaynone" class to enable the fullscreen navigation -->
		<div class="overlay">
			<div class="wrap centered-wrapper">
					<?php wp_nav_menu( array(
						'theme_location' => 'top_menu',
						'menu_id' => 'wrap-navigation',
						'menu_class' => 'wrap-nav',
						'sort_column' => 'menu_order',
						'fallback_cb' => ''
					)); ?>
				<div class="clear"></div>

				<!-- social icons for the fullscreen navigation -->
 				<!--
 				<ul class="overlaymenu-social">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul> 
				-->
				<?php get_template_part( 'includes/header-widgets' ); ?>					
			</div>
		</div>

		<?php } ?>

	</header>		
	
	<div id="wrapper">	
		
	<?php

	if(is_front_page()) { echo '<div id="hello"></div>';  }

	if(isset($smof_data['header_style'])) {
		if(($smof_data['header_style'] == 'solid-header') && (is_page_template('template-homepage.php'))) { 
			echo '<div class="menu-fixer"></div>';
		} 
	}
	else if(!isset($smof_data['header_style'])) {
		echo '<div class="menu-fixer"></div>';
	}
	if(!is_page_template('template-homepage.php'))   {
		if(isset($smof_data['header_style'])) {
			echo '<div class="menu-fixer"></div>';
		}
	}

	?>