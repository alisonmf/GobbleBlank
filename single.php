<?php get_header(); ?>

	<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php get_template_part('meta'); ?>

			<div class="entry">
				
				<?php the_content(); ?>

			</div>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
	<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>