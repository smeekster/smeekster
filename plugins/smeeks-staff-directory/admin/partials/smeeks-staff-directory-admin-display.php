<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       smeeks12763.sb.cis
 * @since      1.0.0
 *
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
	global $post;
	$custom = get_post_custom($post->ID);
	$smeeks_staff_directory_first_name = $custom["smeeks_staff_directory_first_name"][0];
	$smeeks_staff_directory_last_name = $custom["smeeks_staff_directory_last_name"][0];
		
?>
<fieldset class = "outer">
<legend>Staff Directory Fields</legend>
	<label class="smeeks-staff-directory-label">First Name:</label>
	<input class="smeeks-staff-directory-input"  name="smeeks_staff_directory_first_name" type="text" value="<?php echo $smeeks_staff_directory_first_name; ?>"  required /><br>
	<label class="smeeks-staff-directory-label">Last Name:</label>
	<input class="smeeks-staff-directory-input"  name="smeeks_staff_directory_last_name" type="text" value="<?php echo $smeeks_staff_directory_last_name; ?>"  required /><br>
</fieldset>