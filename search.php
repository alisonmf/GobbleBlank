<?php get_header(); ?>

	<div class="content">

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php get_template_part('nav'); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> class="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>

		<?php get_template_part('nav'); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

	<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
