<?php get_header(); ?>

<?php 
  $queried_object = get_queried_object();
 //print_r( $queried_object );
 $tax = $queried_object->taxonomy;
 //echo $tax;


  
  
if(isset($_GET['state']) && !empty($_GET['state']) ) {

  //print_r($_GET['checkboxvar']);

$state = $_GET['state'];  
//print_r($state);



} 

else {
	$state = array();

}

if(isset($_GET['fees']) && !empty($_GET['fees']) ) {

  //print_r($_GET['checkboxvar']);

$fees = $_GET['fees'];  
//print_r($fees);

} 

else {
	$fees = array();
	
}


if(isset($_GET['fees']) || isset($_GET['state']))
{
	$relation = "AND";
}

else {
	$relation = "OR";
}

?>
 
    <div class="col-md-2 col-sm-2 col-xs-12 filter_form">
        <form id="search" action="" method="get">        
    	
		<h1>state</h1>
		<?php $jobsTerms = get_terms('state',array( 'taxonomy' => 'state' )); 
    		//print_r($jobsTerms);
    			foreach($jobsTerms as $term){
    			     ?>
    				
                     <input type="checkbox" name="state[]" value="<?php echo $term->name; ?>" <?php if(in_array($term->name, $state)) { echo "checked"; } ?> onchange="document.getElementById('search').submit()" /> <?php echo $term->name; ?>   </br>
    		<?php	 
    			}
		?>
		<br />
		<h1>fees</h1>
		<?php $jobsTerms = get_terms('fees-filter',array( 'taxonomy' => 'fees-filter' )); 
    		//print_r($jobsTerms);
    			foreach($jobsTerms as $term){
    			     ?>
    				
                     <input type="checkbox" name="fees[]" value="<?php echo $term->name; ?>" <?php if(in_array($term->name, $fees)) { echo "checked"; } ?> onchange="document.getElementById('search').submit()" /> <?php echo $term->name; ?>   </br>
    		<?php	 
    			}
		?>
		
	</form>
    </div>	

 <?php
 
 $custom = get_post();
 $custom_post = $custom->post_type;
 //echo $custom_post;
  $meta = get_post_meta( get_the_ID() );
  //print_r($meta);
 

 
 ?>
			
<?php

// The Query
$args = array(
	 'post_type' => $custom_post,
     
	 'tax_query' => array(
	  array(
		'taxonomy' =>  $tax,
		'field'  => 'term_id',
		'terms' => array($queried_object->term_id),
		'operator' => 'IN'
	  ),
	 
	 ),
	 
	 'meta_query' => array(
	  'relation' => $relation,
	  array(
	   'key' => 'wpcf-location',
	   'value' => $state
	  ),
	  
	  array(
	   'key' => 'wpcf-fees-filter',
	   'value' => $fees
	  )
	  
	 )

);
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {
	$query->the_post();
?> 	
<div class="col-md-8 col-sm-8 col-xs-12 college_listings">
    
 	<?php $College_logo = types_render_field( "college-logo", array("raw"=>"true","size"=>"large") ); ?>
	<?php $location = types_render_field( "location", array("raw" => "true" ) ); ?>
    <?php $college_city = types_render_field( "college-city", array("raw" => "true" ) ); ?>
    
    <div class="title-logo">
        <span class="college_logo"><img src=" <?php echo $College_logo; ?> " /></span>
        <span class="college_tittle"><h1 class="college_name"><a href="<?php the_permalink();?>"><?php echo get_the_title() ?></a></h1><span class="college_city"><?php echo $location; ?><span class="college_location"><?php echo $college_city; ?>,</span></span></span>
    </div>
    
    <?php $featured = types_render_field( "check-for-featured", array("raw" => "true" ) );  
         if($featured == "Featured")
      {
    ?>
    <span class="featured"><?php echo $featured; ?></span>
    <?php
      } 
      ?>
    <?php $college_course = types_render_field( "college-course", array("raw" => "true" ) ); ?>
    <span class="college_course"><?php echo $college_course ?></span>
   
        <?php $college_duration = types_render_field( "duration", array("raw" => "true" ) ); ?>
        <?php $college_fees = types_render_field( "fees", array("raw" => "true" ) ); ?>
        <?php $institution_type = types_render_field( "institution-type", array("raw" => "true" ) ); ?>
        
        <div class="description col-md-3 col-sm-3 col-xs-12 no-padding">
            <ul>
                <li>Duration - </li>
                <li>Fees - </li>
                <li>Institute Type -</li>
                <li>Reviews - </li>
            </ul>
        </div>
        <div class="desc_val col-md-9 col-sm-9 col-xs-12 no-padding">
            <ul>
                <li><?php echo $college_duration ?></li>
                <li><?php echo $college_fees ?></li>
                <li><?php echo $institution_type ?></li>
                <li><?php if(function_exists('the_ratings')) { the_ratings(); } ?></li>
            </ul> 
        </div>
        
    <!-- space for KCET-->
    <div class="col-md-12 col-sm-12 col-xs-12 branches no-padding">
    <ul>
        <?php
        $thefields = get_post_meta($post->ID, 'wpcf-kcet', false);
        foreach ($thefields as $onefield)
        { ?>
        <li><a href="<?php the_permalink();?>"><i class="fa fa-file-text-o"></i><?php echo $onefield ;?></a> </li>
        <?php } ?>
    </ul>
    </div>
 
<?php
}

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata()

?>
</div>
</div>
</div>
<div class="container-fluid no-padding"></div>
<?php get_footer(); ?>
