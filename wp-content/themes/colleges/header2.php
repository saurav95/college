<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
        <!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/jquery.bxslider.css"/>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"/>
        <script type="text/javascript">
        jQuery(document).ready(function($){ 
          jQuery('.searchandfilter').find("input[type=text]").each(function($){ 
                jQuery(this).attr("placeholder", "Enter College or University Name...");
          });
          jQuery('.searchandfilter').find("input[type=Submit]").each(function($){//if(!jQuery(this).val()) { 
                jQuery(this).val("Search");//}
          });
        });
       </script>
        <script type="text/javascript">
        jQuery(document).ready(function($){
        	jQuery(window).scroll(function($){
        		if (jQuery(this).scrollTop() > 170) {
        			jQuery(".twelth-graduation").addClass("fix");
        		} else {
        			jQuery(".twelth-graduation").removeClass("fix");
        		}
        	});
        });
       </script>
    </head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar top-header">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<!--<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>-->
                            <img src="<?php bloginfo('template_url'); ?>/images/Menu2.png" alt="mobile-menu" />
						</button>

						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?//php bloginfo('name'); ?><?php theme_logo(); ?></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse pull-right">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						<?php //if(of_get_option('search_bar', '1')) {?>
						<!--<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?//php echo home_url( '/' ); ?>">
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?//php _e('Search','wpbootstrap'); ?>">
							</div>
						</form>-->
						<?php //} ?>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
        <div class="search_mee"><?php echo do_shortcode( '[searchandfilter taxonomies="search"]' ); ?></div>
        <div class="container-fluid no-padding twelth-graduation">
            <div class="col-md-6 text-center no-padding twelth"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">After 12th</a></div>
            <div class="col-md-6 text-center no-padding graduation"><a class="active" href="<?php echo esc_url( home_url( '/' ) ); ?>post-graduation">Post Graduation</a></div>
        </div>
		<?php echo do_shortcode('[rev_slider alias="banner-slider"]');?>
		<div class="container">
