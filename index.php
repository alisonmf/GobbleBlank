<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
			
				<?php the_excerpt(); ?>
				
			</div>

		</div>

	<?php endwhile; else : endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>