<?php get_header(); ?>

<?php 
  $queried_object = get_queried_object();
 //print_r( $queried_object );
 $tax = $queried_object->taxonomy;
 //echo $tax;


  
  
if(isset($_GET['state']) && !empty($_GET['state'])) {

  //print_r($_GET['checkboxvar']);

$state = $_GET['state'];  
print_r($state);



} 

else {
	$state = array();
}



?>
 
                        <form id="search" action="" method="get">        
						<?php $jobsTerms = get_terms('state',array( 'taxonomy' => 'state' )); 
        						//print_r($jobsTerms);
      								foreach($jobsTerms as $term){
      								     ?>
            							
                                         <input type="checkbox" name="state[]" value="<?php echo $term->name; ?>" <?php if(in_array($term->name, $state)) { echo "checked"; } ?> onchange="document.getElementById('search').submit()" /> <?php echo $term->name; ?>   </br>
        						<?php	 
        							}
        						?>
								
							</form>	

 <?php
 
 $custom = get_post();
 $custom_post = $custom->post_type;
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
	  array(
	   'key' => 'wpcf-location',
	   'value' => $state
	  )
	  
	 )

);
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {
	$query->the_post();
?> 	

<?php 	
	echo '<li>' . get_the_title() . '</li>';
 
}

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata()

?>

<?php get_footer(); ?>