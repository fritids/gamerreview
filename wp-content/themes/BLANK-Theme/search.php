<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1 id='results'>Results</h1>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>
		<?php if (is_search() && ($post->post_type=='page')) continue; ?>
			<div <?php post_class() ?> id="resultpost">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div id="result">
					<div id='mask'>
						<?php if (function_exists('usp_post_attachments')) {
						usp_post_attachments('full', '<img src="', '" alt="" />', 99);
						} ?>
					</div>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink() ?>">Read More</a></p>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>