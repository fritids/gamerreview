<?php

	/*
		Template Name: Contact Page
	*/


?>

<?php get_header(); ?>

 <div id='main-content'>

 	<h1>Message Us!</h1>

 	<div id='contactform'>

 		<?php echo do_shortcode( '[contact-form-7 id="21" title="Contact form 1"]' ); ?>
 	</div>

 </div>

 <?php get_sidebar('contact'); ?>

 <?php get_footer(); ?>