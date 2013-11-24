<?php get_header(); ?>

	<div class="content span-8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php 
				//gets the time, category, and tags
				get_template_part('meta'); 
			?>
	
			<div class="entry">
				
				<?php the_content(); ?>
	
			</div>
			
		</div>
	
		<?php comments_template(); ?>
	
		<?php endwhile; endif; ?>
	
	</div>
	
	<div class="sidebar span-4">
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>