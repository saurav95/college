<?php include (TEMPLATEPATH . '/header3.php'); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-md-12 col-sm-12 col-xs-12 clearfix col-title-sec" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?//php the_post_thumbnail( 'wpbs-featured' ); ?>
							<?php $College_logo = types_render_field( "college-logo", array("raw"=>"true","size"=>"large") ); ?>
                        	<?php $location = types_render_field( "location", array("raw" => "true" ) ); ?>
                            <?php $college_city = types_render_field( "college-city", array("raw" => "true" ) ); ?>
							<!--<h1 class="single-title" itemprop="headline"><?//php the_title(); ?></h1>-->
							<div class="title-logo">
                                <span class="college_logo"><img src=" <?php echo $College_logo; ?> " /></span>
                                <span class="college_tittle"><h1 class="college_name"><?php the_title(); ?></h1><span class="college_city"><?php echo $location; ?><span class="college_location"><?php echo $college_city; ?>,</span></span></span>
                            </div>
                            <?//php $coll_gallery = types_render_field( "gallery", array("raw"=>"true","size"=>"large") ); ?>
                            <div class="coll-gallery">
                                <ul>
                                    <?php
                                    $coll_galleries = get_post_meta($post->ID, 'wpcf-gallery', false);
                                    foreach ($coll_galleries as $coll_gallery)
                                    { ?>
                                    <li><img src="<?php echo $coll_gallery ;?>" /></li>
                                    <?php } ?>
                                </ul>
                            </div>
                </div>
            </div>
       </div>
                            <div class="container-fluid no-padding internal_navigation">
                            <div class="container">
                            <!--<div class="internal_navigation">-->
                                <ul>
                                    <li><a href="#">INFO</a></li>
                                    <li><a href="#">GALLERY</a></li>
                                    <li><a href="#">COURSES</a></li>
                                    <li><a href="#">RANKINGS</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                </ul>
                            <!--</div>-->
                            </div>
                            </div>
                            <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						      <div class="other_courses">
                                <h4><span>Other Courses</span></h4>
                                <div class="other-course col-md-3 col-sm-6 col-xs-6">
                                    <ul>
                                        <?php
                                        $other_courses = get_post_meta($post->ID, 'wpcf-other-course-name', false);
                                        foreach ($other_courses as $other_course)
                                        { ?>
                                        <li><span class="course_name"><?php echo $other_course ;?></span></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="other-fees col-md-9 col-sm-6 col-xs-6">
                                    <ul>
                                        <?php
                                        $other_course_feeses = get_post_meta($post->ID, 'wpcf-other-course-fees', false);
                                        foreach ($other_course_feeses as $other_course_fees)
                                        { ?>
                                        <li><span class="course_fee"><?php echo $other_course_fees ;?></span></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                              </div>
                              
                              <div class="eligibility">
                                <h4><span>ELIGIBILITY & ADMISSION PROCEDURE</span></h4>
                                <?php $minimum_eligibility = types_render_field( "minimum-eligibility", array("raw"=>"true","size"=>"large") ); ?>
                                <p><?php echo $minimum_eligibility ;?></p>
                              </div>
                              
                              <div class="lo_co_info">
                              <?php $phone_no = types_render_field( "phone-no", array("raw"=>"true","size"=>"large") ); ?>
                              <?php $e_mail = types_render_field( "e-mail", array("raw"=>"true","size"=>"large") ); ?>
                              <?php $website = types_render_field( "website", array("raw"=>"true","size"=>"large") ); ?>
                              <?php $address = types_render_field( "address", array("raw"=>"true","size"=>"large") ); ?>
                              <?php $map = types_render_field( "map", array("raw"=>"true","size"=>"large") ); ?>
                                <h4><span>LOCATION & CONTACT INFO</span></h4>
                                <div class="col-md-6 col-sm-6 col-xs-12 info">
                                    <div class="col-md-4 col-sm-4 col-xs-12 phone">
                                        <i class="fa fa-3x fa-phone" style="color:#ff6b49;margin-bottom: 15px;display: block;"></i>
                                        <?php echo $phone_no ;?>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 e-mail">
                                        <i class="fa fa-3x fa-envelope" style="color:#ff6b49;margin-bottom: 15px;display: block;"></i>
                                        <?php echo $e_mail ;?>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 website">
                                        <i class="fa fa-3x fa-internet-explorer" style="color:#ff6b49;margin-bottom: 15px;display: block;"></i>
                                        <?php echo $website ;?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 address">
                                        <strong>Address:</strong>
                                        <?php echo $address ;?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 map">
                                    <?php echo $map ;?>
                                </div>
                              </div>
                              
                              <div class="overview">
                                <h4><span>OVERVIEW</span></h4>
                                <div class="facilities_available">
                                    <h6>FACILITIES AVAILABLE</h6>
                                <ul>
                                    <li>
                                        <?php $auditoriumm = types_render_field( "auditorim", array("raw" => "true" ) );  
                                             if($auditoriumm == "Auditorium")
                                          {
                                        ?>
                                        <i class="fa fa-audio-description"></i><?php echo $auditoriumm; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $GYM = types_render_field( "gym", array("raw" => "true" ) );  
                                             if($GYM == "Gym")
                                          {
                                        ?>
                                        <i class="fa fa-leaf"></i><?php echo $GYM; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $LAB = types_render_field( "lab", array("raw" => "true" ) );  
                                             if($LAB == "Lab")
                                          {
                                        ?>
                                        <i class="fa fa-flask"></i><?php echo $LAB; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $HOSTEL = types_render_field( "hostel", array("raw" => "true" ) );  
                                             if($HOSTEL == "Hostel")
                                          {
                                        ?>
                                        <i class="fa fa-bed"></i><?php echo $HOSTEL; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $MEDICAL = types_render_field( "medical", array("raw" => "true" ) );  
                                             if($MEDICAL == "Medical")
                                          {
                                        ?>
                                        <i class="fa fa-plus-square"></i><?php echo $MEDICAL; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $SPORTS = types_render_field( "sports", array("raw" => "true" ) );  
                                             if($SPORTS == "Sports")
                                          {
                                        ?>
                                        <i class="fa fa-futbol-o"></i><?php echo $SPORTS; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $CAFETERIA = types_render_field( "cafeteria", array("raw" => "true" ) );  
                                             if($CAFETERIA == "Cafeteria")
                                          {
                                        ?>
                                        <i class="fa fa-coffee"></i><?php echo $CAFETERIA; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $LIBRARY = types_render_field( "library", array("raw" => "true" ) );  
                                             if($LIBRARY == "Library")
                                          {
                                        ?>
                                        <i class="fa fa-book"></i><?php echo $LIBRARY; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $COMPUTER_LAB = types_render_field( "computer-lab", array("raw" => "true" ) );  
                                             if($COMPUTER_LAB == "Computer Lab")
                                          {
                                        ?>
                                        <i class="fa fa-desktop"></i><?php echo $COMPUTER_LAB; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $TRANSPORT = types_render_field( "transport", array("raw" => "true" ) );  
                                             if($TRANSPORT == "Transport")
                                          {
                                        ?>
                                        <i class="fa fa-bus"></i><?php echo $TRANSPORT; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                    <li>
                                        <?php $WIFI = types_render_field( "wi-fi", array("raw" => "true" ) );  
                                             if($WIFI == "WI-FI")
                                          {
                                        ?>
                                        <i class="fa fa-wifi"></i><?php echo $WIFI; ?>
                                        <?php
                                          } 
                                        ?>
                                    </li>
                                </ul>
                                <div class="instute_type">
                                    <?php $INSTUTE_TYPE = types_render_field( "institue-type", array("raw" => "true" ) );  
                                             if($INSTUTE_TYPE == "Private")
                                          {
                                        ?>
                                        <i class="fa fa-unlock-alt"></i></i><strong><?php echo $INSTUTE_TYPE; ?></strong> Institute
                                        <?php
                                          } 
                                          if ($INSTUTE_TYPE == "Public")
                                          {
                                            ?>
                                            <i class="fa fa-unlock-alt"></i></i><strong><?php echo $INSTUTE_TYPE; ?></strong> Institute
                                          <?php
                                          } 
                                        ?>
                                </div>
                                <div class="aflited_to">
                                <?php $AFFLIATED_TO = types_render_field( "affliated-to", array("raw" => "true" ) ); ?>
                                    <i class="fa fa-shield"></i> Affliated to <strong><?php echo $AFFLIATED_TO; ?></strong>
                                </div>
                                <div class="approved_by">
                                <?php $APPROVED_BY = types_render_field( "approved-by", array("raw" => "true" ) ); ?>
                                    <i class="fa fa-check-circle"></i> Approved by <strong><?php echo $APPROVED_BY; ?></strong>
                                </div>
                                
                              </div>
                              </div>
						
						</header> <!-- end article header -->
					
						
						
					
					</article> <!-- end article -->
					
					<?//php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?//php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
            
<div class="container-fluid no-padding">
<?php get_footer(); ?>