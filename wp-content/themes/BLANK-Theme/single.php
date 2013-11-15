<?php get_header(); ?>
	


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post">
			
			<h1><?php the_title(); ?></h1>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
			<div id='mask'>
				<?php if (function_exists('usp_post_attachments')) {
					usp_post_attachments('full', '<img src="', '" alt="" />', 99);
				} ?>
			</div>
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>
		<div id='single-sidebar'>
				<?php echo get_related_author_posts(); ?>
		</div>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>