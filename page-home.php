<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	
				<?php the_content(); ?>
	
			</div>
	
		<?php endwhile;  else :  endif; ?>

	</div><!-- /#content -->

<?php get_footer(); ?>