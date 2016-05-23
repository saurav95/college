<?php
/*
Template Name: Category
*/
?>

<?php get_header(); ?>
			

                                <form id="category-select" class="category-select navbar-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">    
                                    <?php
                                        $args = array(
                                        'show_option_none' => __( 'Categories' ),
                                        'show_count'       => 1,
                                        'orderby'          => 'name',
                                        'echo'             => 0,
                                        'class'              => 'postform form-control chosen-select',
                                        );
                                    ?>

                                    <?php $select  = wp_dropdown_categories( $args ); ?>
                                    <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
                                    <?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

                                    <?php echo $select; ?>

                                    <noscript>
                                        <input type="submit" value="View" />
                                    </noscript>

                                </form>




<?//php get_footer(); ?>












<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'B.Tech / B.E.' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"><?php echo get_cat_name(4);?></a>