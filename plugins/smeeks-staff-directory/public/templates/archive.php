<?php
get_header();
?>

<ul id="sortable">
 <?php 
 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
 $custom = get_post_custom($post->ID);
 echo '<li class="ui-state-default">'.the_post_thumbnail(array(100, 100)).the_content'</li>';
 endwhile; else : 
	echo '<p> '._e( 'Sorry, no staff directory posts to sort.' ); 
endif; 
?>
</ul>