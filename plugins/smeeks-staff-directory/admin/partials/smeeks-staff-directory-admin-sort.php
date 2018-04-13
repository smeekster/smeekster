<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       paulc2763.sb.cis
 * @since      1.0.0
 *
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
	query_posts( "post_type=Smeeks_Staff_directory".$query_string."&meta_key=Smeeks_Staff_directory_sort_order&orderby=meta_value_num&order=ASC" );

	
?>
<fieldset class = "outer">
<legend>Smeeks Staff Directory Sort Order</legend>

 <?php 
 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
 $custom = get_post_custom($post->ID);
 echo '<label class="Smeeks-Staff-directory-label">';
 echo $custom["Smeeks_Staff_directory_first_name"][0].' ';
 echo $custom["Smeeks_Staff_directory_last_name"][0].' ';
 echo '</label>';
 echo '<input class="Smeeks-Staff-directory-input" type = "text" value = "'.$custom["Smeeks_Staff_directory_sort_order"][0].'"><br>';
 endwhile; else : 
	echo '<p> '._e( 'Sorry, no staff directory posts to sort.' ); 
endif; 
?>
</fieldset>
https://jqueryui.com/sortable/<br>

<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul>