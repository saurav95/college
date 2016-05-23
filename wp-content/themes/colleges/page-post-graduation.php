<?php
/*
Template Name: Post Graduation
*/
?>

<?php include (TEMPLATEPATH . '/header2.php'); ?>
			
			<div id="content" class="clearfix row margin-top all_panels_listing">
			
				<div id="main" class="col-sm-12 clearfix" role="main">
				  
				<div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
                        <div class="favicon"><i class="fa fa-3x fa-cog"></i></div>
                        <h4 class="panel-title">Engineering<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <!-- Start Engineering Section--> 
            				<ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-eng-category',array( 'taxonomy' => 'pg-eng-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-eng-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Engineering Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse2">
                        <div class="favicon"><i class="fa fa-3x fa-users"></i></div>
                        <h4 class="panel-title">Management & Business<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse in">
                        <!-- Start Management & Business Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-management-category',array( 'taxonomy' => 'pg-management-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-management-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Management & Business Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse3">
                        <div class="favicon"><i class="fa fa-3x fa-plus"></i></div>
                        <h4 class="panel-title">Medical & Health Care<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse in">
                        <!-- Start Medical & Health Cares Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-medical-category',array( 'taxonomy' => 'pg-medical-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-medical-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Medical & Health Cares Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse4">
                        <div class="favicon"><i class="fa fa-3x fa-building"></i></div>
                        <h4 class="panel-title">Architecture<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse in">
                        <!-- Start Architecture Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-architecture-category',array( 'taxonomy' => 'pg-architecture-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-architecture-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Architecture Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse5">
                        <div class="favicon"><i class="fa fa-3x fa-inr"></i></div>
                        <h4 class="panel-title">Commerce<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse5" class="panel-collapse collapse in">
                        <!-- Start Commerce Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-commerce-category',array( 'taxonomy' => 'pg-commerce-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-commerce-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Commerce Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse6">
                        <div class="favicon"><i class="fa fa-3x fa-flask"></i></div>
                        <h4 class="panel-title">Science<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse6" class="panel-collapse collapse in">
                        <!-- Start Science Section--> 
        				<ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-science-category',array( 'taxonomy' => 'pg-science-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-science-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                          <!-- End Science Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse7">
                        <div class="favicon"><i class="fa fa-3x fa-object-group"></i></div>
                        <h4 class="panel-title">Arts & Humanities<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse7" class="panel-collapse collapse in">
                        <!-- Start Arts & Humanities Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-arts-category',array( 'taxonomy' => 'pg-arts-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-arts-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Arts & Humanities Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse8">
                        <div class="favicon"><i class="fa fa-3x fa-pencil-square-o"></i></div>
                        <h4 class="panel-title">Languages & Teaching<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse8" class="panel-collapse collapse in">
                        <!-- Start Languages & Teaching Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-teachings-category',array( 'taxonomy' => 'pg-teachings-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-teachings-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Languages & Teaching Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse9">
                        <div class="favicon"><i class="fa fa-3x fa-medkit"></i></div>
                        <h4 class="panel-title">Pharmacy<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse9" class="panel-collapse collapse in">
                        <!-- Start Pharmacy Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-pharmacy-category',array( 'taxonomy' => 'pg-pharmacy-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-pharmacy-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Pharmacy Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse10">
                        <div class="favicon"><i class="fa fa-3x fa-gavel"></i></div>
                        <h4 class="panel-title">Law<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse10" class="panel-collapse collapse in">
                        <!-- Start Law Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-law-category',array( 'taxonomy' => 'pg-law-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-law-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Law Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse11">
                        <div class="favicon"><i class="fa fa-3x fa-desktop"></i></div>
                        <h4 class="panel-title">Computers<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse11" class="panel-collapse collapse in">
                        <!-- Start Computers Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-computers-category',array( 'taxonomy' => 'pg-computers-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-computers-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Computers Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse12">
                        <div class="favicon"><i class="fa fa-3x fa-bed"></i></div>
                        <h4 class="panel-title">Hotel Management, Aviation & Travel<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse12" class="panel-collapse collapse in">
                        <!-- Start Hotel Management, Aviation & Travel Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-hotel-management-category',array( 'taxonomy' => 'pg-hotel-management-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-hotel-management-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Hotel Management, Aviation & Travel Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse13">
                        <div class="favicon"><i class="fa fa-3x fa-camera-retro"></i></div>
                        <h4 class="panel-title">Mass Comm & Media<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse13" class="panel-collapse collapse in">
                        <!-- Start Mass Comm & Media Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-mass-com-media-category',array( 'taxonomy' => 'pg-mass-com-media-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-mass-com-media-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Mass Comm & Media Section-->
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse14">
                        <div class="favicon"><i class="fa fa-3x fa-black-tie"></i></div>
                        <h4 class="panel-title">Fashion & Design<i class="pull-right fa fa-angle-up"></i></h4>
                      </div>
                      <div id="collapse14" class="panel-collapse collapse in">
                        <!-- Start Fashion & Design Section--> 
        				    <ul class="college_categorys">
                                <?php $jobsTerms = get_terms('pg-fashion-design-category',array( 'taxonomy' => 'pg-fashion-design-category' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								    $term_link = get_term_link( $term, 'pg-fashion-design-category' ); 
            							 echo "<li><a href='".$term_link."'>" . $term->name . " <span class='cat_count'>(" . $term->count . ")</span><span class='arrow'><i class='fa fa-chevron-right'></i></span><span class='cat_desc'>" . $term->description . "</span></a></li>";
                                         ?>
        						<?php	 
        							}
        						?>						
    				       	</ul>
                        <!-- End Fashion & Design Section-->
                      </div>
                    </div>
                    
                </div> 
				  
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>
<div class="container-fluid no-padding">
<?php get_footer(); ?>