		</div> <!-- END page wrap -->

	<footer>
		<div class='footernav'>
			<?php wp_nav_menu(array('menu' => 'Footer Nav' )); ?>
		</div>

		<p>All content is copyrighted by their respected owner. Must have permission to use any works from this site.</p>

		<?php
		if ( is_user_logged_in() ) {

				echo "<p><a href='"; echo wp_logout_url(); echo "'>Logout</a></p>";

			}
		?>

	</footer>
	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
