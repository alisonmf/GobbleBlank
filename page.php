<?php get_header(); ?>

	<div class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
		<div class="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
	
		</div><!-- /.post -->
	
		<?php endwhile; endif; ?>
		
	</div><!-- /.content -->	

	<div class="sidebar span-4">
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>