<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div id="post-<?php the_ID(); ?>">
	
				<h2><?php the_title(); ?></h2>
	
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div><!-- /.entry -->
	
			</div><!-- /.post -->
	
		<?php endwhile; endif; ?>
		
	</div><!-- /#content -->	

<?php get_sidebar(); ?>

<?php get_footer(); ?>