<?php get_header(); ?>

	<div class="span-8">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> class="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<?php get_template_part('meta'); ?>

			<div class="entry">

				<?php the_excerpt(); ?>

			</div>

		</div>

	<?php endwhile; else : endif; ?>

	</div>

	<aside class="sidebar span-4 omega">

		<?php get_sidebar(); ?>

	</aside>

<?php get_footer(); ?>