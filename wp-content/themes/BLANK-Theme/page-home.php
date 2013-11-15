<?php

	/*
		Template Name: Home Page
	*/


?>

<?php get_header(); ?>

 <div id='home-content'>
 	
 	<div id='slideshow'>
 		<?php echo do_shortcode('[SlideDeck2 id=54 ress=1]') ?>
 	</div>


<?php if ( is_user_logged_in() )
	{
	 	echo '<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Gamerreview1"  data-widget-id="400744570343784448">Tweets by @Gamerreview1</a>

	    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>' ;


		echo '<div class="fb-like-box" data-href="http://www.facebook.com/gamerreview1" data-width="450" data-height="400" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>';

 	} else {

 		echo "<div id='signcontent'>

 		<h1>Sign Up!</h1>

 		<p>Sign up and become a member today! You will get exclusive, members only benefits. Click the link below to sign up now!</p>

 		<ul>
 			<li>Create your own profile for others to view!</li>
 			<li> Post reviews to get your views on games out into the world!</li>
 		</ul>

 		<p id='signlink'><a href='?page_id=10'>Sign Up!</a></p>

 		</div>
 	</div>";

 	get_sidebar('home');

	}
 ?>

 

 <?php get_footer(); ?>