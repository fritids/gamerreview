<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_front_page()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="wp-content/themes/BLANK-Theme/style.css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- START JAVASCRIPT SDK CODE FOR FACEBOOK FEED -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- END FACEBOOK FEED CODE -->
	
	<div id="page-wrap">

		<header>


			<?php 

			if ( is_user_logged_in() ) {

				echo "<p id='createpost'><a href='"; echo site_url('?page_id=37'); echo "'><img src='wp-content/themes/BLANK-Theme/images/pen.png' alt='Pen for create post link.' height='20' width='20' />Create Post</a></p> <p id='dash'> - </p>  <p id='editlink'><a href='"; echo site_url('?page_id=34'); echo "' title='Edit Profile'>Edit Profile</a></p>";

			} else { wp_login_form(); }?>

			<h1><a href='<?php echo site_url(); ?>'><img src='wp-content/themes/BLANK-Theme/images/GRHead.png' alt='Gamerreview' height='86' width='300' /></a></h1>


			<nav>
				<?php wp_nav_menu(array('menu' => 'Main Nav Menu' )); ?>
			</nav>
			
		</header>
			
			<?php get_search_form() ?>





