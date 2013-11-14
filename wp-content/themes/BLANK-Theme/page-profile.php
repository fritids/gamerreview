<?php

	/*
		Template Name: Profile Page
	*/


?>

<?php get_header(); ?>

 <div id='profile-content'>

 	<h1>Profile</h1>

 	<?php echo do_shortcode('[wp-members page="user-profile"]'); ?>

 </div>

 <?php get_footer(); ?>