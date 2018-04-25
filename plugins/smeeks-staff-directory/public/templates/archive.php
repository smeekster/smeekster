<?php
get_header();
?>
this is the plugin archive template 
<ul id="sortable">
 <?php 
 // sort by custom field
 //global $query;
 $args = array(
            'post_status' => 'publish',
            'post_type' => 'staff_directory',
            'meta_key' => 'staff_directory_sort_order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
        );
 $query = new WP_Query($args);
 if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
 $custom = get_post_custom($post->ID);
 echo '<li class="ui-state-default">'.get_the_post_thumbnail(null,array(100, 100)).'</li>';
 endwhile; else : 
	echo '<p> '._e( 'Sorry, no staff directory posts to sort.' ); 
endif; 
?>
</ul>
<?php
get_footer();
?>