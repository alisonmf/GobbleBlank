<?php get_header(); ?>

	<div class="content">
	
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1><?php single_tag_title(); ?></h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1>Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>
			
			<?php } ?>

			<?php get_template_part('nav'); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
				
						<h2 class="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<?php get_template_part('meta'); ?>

						<div class="entry">
							<?php the_excerpt(); ?>
						</div>

				</div>

			<?php endwhile; ?>

			<?php get_template_part('nav'); ?>
			
	<?php else : ?>

		<h1>We don't have anything to show you!</h1>
		
		<p>Try going back to the <a href="<?php bloginfo('url'); ?>">home page</a>.</p>

	<?php endif; ?>

	</div>
	
	<div class="sidebar span-4">
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>
