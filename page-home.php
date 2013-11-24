<?php get_header(); ?>

	<div class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
	
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	
				<?php the_content(); ?>
	
			</div>
	
		<?php endwhile;  else :  endif; ?>

	</div><!-- /.content -->

<?php get_footer(); ?>