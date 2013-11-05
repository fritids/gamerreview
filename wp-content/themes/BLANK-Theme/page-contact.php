<?php

	/*
		Template Name: Contact Page
	*/


?>

<?php get_header(); ?>

 <div id='main-content'>

 	<h1>Message Us!</h1>

 	<form id='contact' action=''>
 		<label for="con_name">Name</label>
		<input type="text" id="con_name" />

		<label for="email">Email Address</label>
		<input type="text" id="email" />

		<label for="message">Message</label>
		<textarea rows='10' cols='75' type="text" id="message"></textarea>

		<input type='submit' value='Send' class='subbtn'> 

 	</form>

 </div>

 <?php get_sidebar('contact'); ?>

 <?php get_footer(); ?>