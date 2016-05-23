
<!--use of shortcode for filter plugin-->
<?php echo do_shortcode( '[searchandfilter fields="state" types="checkbox" headings="Medical Categories"]'  ); ?>

<!--for callingall post of medical categoty-->

<?php 
					$args = array( 'post_type' => 'medical-healthcare', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					

			
					<!--for options-->
					<?php echo types_render_field( "placement", array("raw" => "true" ) ); ?>
					<?php echo types_render_field( "fees", array("raw" => "true" ) ); ?>
					<!--for  image-->
					<!--<img src="<?php echo types_render_field( "slider-image", array("raw" => "true" ) ); ?> />-->
					<!--end for options-->
						<?php
						//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
						$orderby = 'name';
						$show_count = 1; // 1 for yes, 0 for no
						$pad_counts = 0; // 1 for yes, 0 for no
						$hierarchical = 1; // 1 for yes, 0 for no
						$taxonomy = 'medical-category';
						$title = '';

						$args = array(
						  'orderby' => $orderby,
						  'show_count' => $show_count,
						  'pad_counts' => $pad_counts,
						  'hierarchical' => $hierarchical,
						  'taxonomy' => $taxonomy,
						  'title_li' => $title
						);
						?>
						<ul>
						<?php
						wp_list_categories($args);
						?>
						</ul>
					<?php	
					endwhile;
					?>
                    
                    
                    
                    
                    <!-- End Engineering Section--> 
				<?php 
					$args = array( 'post_type' => 'engineering', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
								
					<!--for options-->
					<?php echo types_render_field( "placement", array("raw" => "true" ) ); ?>
					<!--end for options-->
						<?php
						//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
						$orderby = 'name';
						$show_count = 1; // 1 for yes, 0 for no
						$pad_counts = 0; // 1 for yes, 0 for no
						$hierarchical = 1; // 1 for yes, 0 for no
						$taxonomy = 'engineering-category';
						$title = '';

						$args = array(
						  'orderby' => $orderby,
						  'show_count' => $show_count,
						  'pad_counts' => $pad_counts,
						  'hierarchical' => $hierarchical,
						  'taxonomy' => $taxonomy,
						  'title_li' => $title
						);
						?>
						<ul>
						<?php
						wp_list_categories($args);
						?>
						</ul>
					<?php	
					endwhile;
					?>
                  <!-- End Engineering Section-->