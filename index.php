<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php get_template_part('meta'); ?>

			<div class="entry">
			
				<?php the_excerpt(); ?>
				
			</div>

		</div>
		
		<?php comment_form(); ?>

	<?php endwhile; else : endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>