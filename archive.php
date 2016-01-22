<?php get_header(); ?>

	<article class="content span-8">

		<?php 

		if (have_posts()) :  

 			// hack. Set $post so that the_date() works.
 			$post = $posts[0]; 

			 // if this is a cat archive

			if (is_category()) { 
				echo '<h1>'.single_term_title('', false).'</h1>';
			} 

			 // if this is a tag archive

			elseif( is_tag() ) { 
				echo '<h1>'.single_tag_title('', false).'</h1>';
			}

			 // if this is a daily archive 

			elseif (is_day()) { 
				echo '<h1>Archive for  '.get_the_time('F jS, Y').'</h1>';
			}

			// if this is a monthly archive

			elseif (is_month()) { 
				echo '<h1>Archive for  '.get_the_time('F, Y').'</h1>';
			}


			// if this is a yearly archive

			elseif (is_year()) { 
				echo'<h1>Archive for '.get_the_time('Y').'</h1>';
			}

			 // if this is an author archive

			elseif (is_author()) { 
				echo'<h1>Author Archive</h1>';
			}

			 // if this is a paged archive

			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
				echo'<h1>Blog Archives</h1>';
			}

			//start our loop
			while (have_posts()) : the_post();

		?>

		<div <?php post_class() ?>>

			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>

			<?php get_template_part('meta'); ?>

			<?php the_excerpt(); ?>

		</div>

		<?php endwhile; ?>

		<?php get_template_part('nav'); ?>

		<?php else : ?>

			<h1>We're sorry, we didn't find anything to show you!</h1>

			<p>Try going back to the <a href="<?php bloginfo('url'); ?>">home page</a>.</p>

		<?php endif; ?>

	</article>

	<aside class="sidebar span-4 omega">

		<?php get_sidebar(); ?>

	</aside>

<?php get_footer(); ?>