<?php

	/*
		Template Name: Edit Profile Page
	*/


?>

<?php get_header(); ?>

<div id='main-content'>
<h1>Edit Profile</h1>

 	
 	<?php echo do_shortcode('[wppb-edit-profile] ');  ?>

</div>

<?php get_sidebar('editprofile'); ?>


 <?php get_footer(); ?>