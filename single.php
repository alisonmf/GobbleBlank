<?php get_header(); ?>

<div class="container">

	<div class="content span-8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?>>

			<h1><?php the_title(); ?></h1>

			<?php
				//gets the time, category, and tags
				get_template_part('meta');
			?>

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

	</div>

	<aside class="sidebar span-4 omega print">

		<?php get_sidebar(); ?>

	</aside>

</div>

<?php get_footer(); ?>